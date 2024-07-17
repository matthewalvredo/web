<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baku;
use App\Models\Suplier;
use App\Models\Transaksi;

class BakuController extends Controller
{
  public function index()
  {
    $tran = Transaksi::with('baku')
      ->where('jadi_id', 0)
      ->where('type', 0)
      ->where('status', 0)
      ->get();

    return view('baku', compact('tran'));
  }

  public function edit($id)
  {
    $baku = Transaksi::findorfail($id);

    $temp = Baku::findorfail($baku->baku_id);
    $temp->stock += $baku->stock;
    $temp->save();

    $baku->status = 1;
    $baku->save();

    return redirect()->route('baku')->with('success', 'Item added successfully!');
  }
}
