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
            'kategori_produk' => 'Gitar Elektrik',
            'merk_produk' => 'FENDER',
            'gambar_produk' => 'images/5.png',
            'harga' => 5500000,
            'stok' => 1
        ]);

        Products::create([
            'kategori_produk' => 'Drum',
            'merk_produk' => 'ARMADA',
            'gambar_produk' => 'images/3.png',
            'harga' => 12000000,
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
