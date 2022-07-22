<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['kategori_produk', 'merk_produk', 'gambar_produk', 'harga', 'stok'];


    public function get_produk()
    {
        return $this->hasMany('App\Models\Products', 'produk_id', 'id');
    }
}
