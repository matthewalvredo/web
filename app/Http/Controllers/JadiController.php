<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadi;
use App\Models\Transaksi;
use App\Models\Baku;

class JadiController extends Controller
{
  public function index()
  {
    $tran = Transaksi::with('jadi')->where('status', '==', 0)->get();
    $jadi = Jadi::where('stock', '>', 0)->get();

    return view('jadi', compact('tran', 'jadi'));
  }

  public function edit($id)
  {
    $baku = Transaksi::where('id', $id)->get();

    $temp = Baku::where($baku->baku_id)->get();
    $temp->stock -= $baku->stock;
    $temp->save();

    $baku->status = 1;
    $baku->save();

    $jadi = Transaksi::findorfail($id);

    $temp = Jadi::findorfail($jadi->jadi_id);
    $temp->stock += $jadi->stock;
    $temp->save();

    $jadi->status = 1;
    $jadi->save();

    return redirect()->route('baku')->with('success', 'Item added successfully!');
  }
}
