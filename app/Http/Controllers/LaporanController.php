<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
  public function index()
  {
    $tran = Transaksi::where('type', 1)->get();

    return view('laporanstock', compact('tran'));
  }

  public function index2()
  {
    $tran = Transaksi::where('type', 0)->get();

    return view('laporancredit', compact('tran'));
  }
}
