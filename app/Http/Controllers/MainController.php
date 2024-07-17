<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Baku;
use App\Models\Jadi;
use App\Models\Suplier;
use App\Models\Transaksi;
use GuzzleHttp\Psr7\Query;

class MainController extends Controller
{
  public function index()
  {
    $barbaku = Baku::all();
    $barjadi = Jadi::all();

    return view('inventory', compact('barbaku', 'barjadi'));
  }

  public function purchase()
  {
    $barbaku = Baku::all();
    $suplier = Suplier::all();

    return view('purchase', compact('barbaku', 'suplier'));
  }


  public function hasil()
  {
    $barja = Jadi::all();
    $barba = Baku::all();

    return view('hasil', compact('barja', 'barba'));
  }

  public function storebaku()
  {
    return view('addproduct');
  }

  public function storejadi()
  {
    return view('addproduct');
  }

  public function store(Request $request)
  {
    if ($request->type == 'jadi') {
      $jadi = new Jadi();
      $jadi->name = $request->name;
      $jadi->stock = '0';
      $jadi->price = '0';
      $jadi->code = '0';
      $jadi->status = '0';
      $jadi->save();

      return redirect()->route('jadi')->with('success', 'Item added successfully!');
    } else if ($request->type == 'baku') {
      $baku = new Baku();
      $baku->name = $request->name;
      $baku->stock = '0';
      $baku->price = '0';
      $baku->code = '0';
      $baku->suplier_id = '0';
      $baku->status = '0';
      $baku->save();

      return redirect()->route('baku')->with('success', 'Item added successfully!');
    }
  }

  public function svpurchase(Request $request)
  {
    $temp = Baku::findorfail($request->name);
    $temp->update([
      'price' => $request->price,
      'suplier_id' => $request->suplier,
    ]);

    $tr = new Transaksi();
    $tr->baku_id = $request->name;
    $tr->suplier_id = $request->suplier;
    $tr->jadi_id = '0';
    $tr->type = '0';
    $tr->stock = $request->stock;
    $tr->totalprice = $request->price * $request->stock;
    $tr->status = '0';

    $tr->save();

    return redirect()->route('baku')->with('success', 'Item added successfully!');
  }

  public function svhasil(Request $request)
  {
    $temp = Jadi::findorfail($request->namahasil);

    $tr = new Transaksi();
    $tr->baku_id = '0';
    $tr->suplier_id = '0';
    $tr->jadi_id = $request->namahasil;
    $tr->type = 1;
    $tr->stock = $request->quantityhasil;
    $tr->totalprice = '0';
    $tr->status = '0';
    $tr->save();

    $t = new Transaksi();
    $t->baku_id = $request->namabahan;
    $t->suplier_id = '0';
    $t->jadi_id = '0';
    $t->type = 1;
    $t->stock = $request->quantitybahan;
    $t->totalprice = '0';
    $t->status = '0';
    $t->save();

    return redirect()->route('jadi')->with('success', 'Item added successfully!');
  }
}
