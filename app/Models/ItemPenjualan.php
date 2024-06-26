<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPenjualan extends Model
{
    use HasFactory;

    protected $fillable = ['nota', 'id_barang', 'qty'];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'nota');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
