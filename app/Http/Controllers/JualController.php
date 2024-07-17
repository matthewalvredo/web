<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadi;
use App\Models\Transaksi;

class JualController extends Controller
{
  public function index()
  {
    $jual = Jadi::where('stock', '>', 0)->get();

    return view('jual', compact('jual'));
  }

  public function sell(Request $request)
  {
    $query = $request->getQueryString();

    $id = $query;
    $item = Jadi::where('stock', '>', 0)->get();
    $jual = Jadi::find($id);

    return view('sell', compact('jual', 'item'));
  }

  public function svsell(Request $request)
  {
    $temp = Jadi::findorfail($request->name);
    $temp->update([
      'stock' => $request->stock,
    ]);

    $tr = new Transaksi();
    $tr->baku_id = '0';
    $tr->suplier_id = '0';
    $tr->jadi_id = $request->name;
    $tr->type = '1';
    $tr->stock = $request->stock;
    $tr->totalprice = $request->price * $request->stock;
    $tr->status = '0';

    $tr->save();

    return redirect()->route('jual')->with('success', 'Item added successfully!');
  }
}
