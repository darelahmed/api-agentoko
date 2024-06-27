<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = ['id_nota', 'tanggal', 'id_pelanggan', 'sub_total'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function itemPenjualans()
    {
        return $this->hasMany(ItemPenjualan::class, 'id_nota');
    }
}
