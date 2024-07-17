<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  use HasFactory;

  protected $fillable = [
    'baku_id',
    'suplier_id',
    'jadi_id',
    'type',
    'stock',
    'totalprice',
    'status'
  ];

  public function baku()
  {
    return $this->belongsTo(Baku::class,  'baku_id');
  }

  public function suplier()
  {
    return $this->belongsTo(Suplier::class,  'suplier_id');
  }

  public function jadi()
  {
    return $this->belongsTo(Jadi::class,  'jadi_id');
  }
}
