<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class LaporanController extends Controller
{
  public function index()
  {
    $tran = Transaksi::with('baku', 'jadi')->get();

    return view('laporanstock', compact('tran'));
  }

  public function index2()
  {
    $tran = Transaksi::with('baku', 'jadi')->where('type', 0)->get();

    return view('laporancredit', compact('tran'));
  }

  public function exportToPDFExpense(Request $request)
  {

    $year = $request->input('year');
    $month = $request->input('month');
    $sort = $request->input('sort');

    // Fetch data from the database filtered by year and month
    $data = Transaksi::with('baku', 'jadi')
      ->whereYear('updated_at', $year)
      ->whereMonth('updated_at', $month)
      ->where('type', 0)
      ->orderBy($sort, 'asc')
      ->get();

    // Share data to view
    $pdf = PDF::loadView('pdfexpense', compact('data'));

    // Download the PDF file
    return $pdf->download('expense.pdf');
  }

  public function exportToPDFStock(Request $request)
  {

    $year = $request->input('year');
    $month = $request->input('month');
    $sort = $request->input('sort');

    // Fetch data from the database filtered by year and month
    $data = Transaksi::with('baku', 'jadi')
      ->whereYear('updated_at', $year)
      ->whereMonth('updated_at', $month)
      ->orderBy($sort, 'asc')
      ->get();

    // Share data to view
    $pdf = PDF::loadView('pdfstock', compact('data'));

    // Download the PDF file
    return $pdf->download('stock.pdf');
  }

  public function deleteDataExpense(Request $request)
  {
    $year = $request->input('year');
    $month = $request->input('month');

    $item = Transaksi::whereYear('created_at', $year)
      ->whereMonth('created_at', $month)->get();

    foreach ($item as $i) {
      $i->delete();
    }

    return redirect()->route('laporancredit')->with('success', 'Data deleted successfully.');
  }

  public function deleteByYearMonth(Request $request)
  {
    $year = $request->input('year');
    $month = $request->input('month');

    Transaksi::whereYear('updated_at', $year)
      ->whereMonth('updated_at', $month)
      ->delete();

    return redirect()->back()->with('success', 'Data deleted successfully');
  }
}
