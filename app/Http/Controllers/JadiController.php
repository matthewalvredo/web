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
    $tran = Transaksi::with('jadi', 'baku')->where('status', '==', 0)->get();
    $jadi = Jadi::where('stock', '>', 0)->get();

    return view('jadi', compact('tran', 'jadi'));
  }

  public function edit($id)
  {
    $jadi = Transaksi::findorfail($id);

    $temp = Jadi::findorfail($jadi->jadi_id);
    $temp->stock += $jadi->stock;
    $temp->status = 1;
    $temp->save();

    $teb = Baku::findorfail($temp->id);
    $teb->stock -= $jadi->stock;
    $teb->status = 1;
    $teb->save();

    $jadi->status = 1;
    $jadi->save();

    return redirect()->route('jadi')->with('success', 'Item added successfully!');
  }
}
