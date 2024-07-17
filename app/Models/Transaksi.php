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
    return $this->hasOne(Baku::class, 'id', 'baku_id');
  }

  public function suplier()
  {
    return $this->hasOne(Suplier::class, 'id', 'suplier_id');
  }

  public function jadi()
  {
    return $this->hasOne(Jadi::class, 'id', 'jadi_id');
  }
}
