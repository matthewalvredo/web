<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadi extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'stock',
    'price',
    'code',
    'status'
  ];

  public function transaksi()
  {
    return $this->belongsTo(Transaksi::class, 'jadi_id', 'id');
  }
}
