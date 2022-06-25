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
            'id' => 1,
            'kategori_produk' => 'Gitar Akustik',
            'merk_produk' => 'TAYLOR',
            'gambar_produk' => 'images/1.png',
            'harga' => 6000000,
            'stok' => 1
        ]);

        User::create([
            'id' => 1,
            'name' => 'Dzaki',
            'email' => 'dzaki@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
