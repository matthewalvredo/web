<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baku extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'stock',
    'price',
    'suplier_id',
    'code',
    'status'
  ];

  public function transaksi()
  {
    return $this->belongsTo(Transaksi::class, 'baku_id', 'id');
  }
}
