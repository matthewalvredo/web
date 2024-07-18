<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

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
}
