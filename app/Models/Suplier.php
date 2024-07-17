<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'notelp',
    'alamat'
  ];

  public function transaksi()
  {
    return $this->belongsTo(Transaksi::class, 'suplier_id', 'id');
  }
}
