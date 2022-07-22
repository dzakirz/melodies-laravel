<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;
    protected $fillable = ['produk_id', 'pesanan_id', 'jumlah', 'jumlah_harga', 'user_id'];

    public function produk()
    {
        return $this->belongsTo('App\Models\dataProduk', 'produk_id', 'id');
    }

    public function pesanan()
    {
        return $this->belongsTo('App\Models\Pesanan', 'pesanan_id', 'id');
    }
}
