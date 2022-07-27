<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'kategori_produk' => 'Gitar Akustik',
            'merk_produk' => 'TAYLOR',
            'gambar_produk' => 'images/1.png',
            'harga' => 6000000,
            'stok' => 1
        ]);

        Products::create([
            'kategori_produk' => 'Saxophone',
            'merk_produk' => 'YAMAHA',
            'gambar_produk' => 'images/2.png',
            'harga' => 5500000,
            'stok' => 1
        ]);

        Products::create([
            'kategori_produk' => 'Drum',
            'merk_produk' => 'GRETSCH',
            'gambar_produk' => 'images/3.png',
            'harga' => 12000000,
            'stok' => 1
        ]);
        Products::create([
            'kategori_produk' => 'Piono',
            'merk_produk' => 'SOLARCI',
            'gambar_produk' => 'images/4.png',
            'harga' => 22000000,
            'stok' => 1
        ]);
        Products::create([
            'kategori_produk' => 'Guitar Classic',
            'merk_produk' => 'YAMAHA',
            'gambar_produk' => 'images/5.png',
            'harga' => 7000000,
            'stok' => 1
        ]);
        Products::create([
            'kategori_produk' => 'Guitar Electric',
            'merk_produk' => 'FENDOR',
            'gambar_produk' => 'images/6.png',
            'harga' => 8000000,
            'stok' => 1
        ]);
        Products::create([
            'kategori_produk' => 'Drum',
            'merk_produk' => 'PEARL',
            'gambar_produk' => 'images/7.png',
            'harga' => 18000000,
            'stok' => 1
        ]);
        Products::create([
            'kategori_produk' => 'Biola',
            'merk_produk' => 'YAMAHA',
            'gambar_produk' => 'images/8.png',
            'harga' => 9000000,
            'stok' => 1
        ]);

        User::create([
            'name' => 'Dzaki',
            'email' => 'dzaki@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([

            'name' => 'Nathan',
            'email' => 'Nathan@gmail.com',
            'password' => bcrypt('54321')
        ]);
    }
}
