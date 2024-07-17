<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baku extends Model
{
  use HasFactory;

  protected $table = 'bakus';
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
    return $this->hasMany(Transaksi::class, 'baku_id');
  }
}
