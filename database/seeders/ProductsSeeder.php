<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'id' => 1,
            'kategori_product' => 'Gitar Akustik',
            'merk_produk' => 'TAYLOR',
            'gambar_produk' => 'images/1.png',
            'harga' => 6000000,
            'stok' => 1
        ]);
    }
}
