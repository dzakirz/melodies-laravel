<?php

namespace App\Models;

class Product
{
  public static function allProducts()
  {
    return [
      [
        "idbarang" => 1,
        "kategori" => "Gitar Akustik",
        "merek" => "TAYLOR",
        "harga" => "Rp.600.000",
        "gambar" => "images/1.png"
      ],
      [
        "idbarang" => 2,
        "kategori" => "Saxophone",
        "merek" => "YAMAHA",
        "harga" => "Rp.1.750.000",
        "gambar" => "images/2.png"
      ],
      [
        "idbarang" => 3,
        "kategori" => "Drum",
        "merek" => "GRETESCH",
        "harga" => "Rp.17.500.000",
        "gambar" => "images/3.png"
      ],
      [
        "idbarang" => 4,
        "kategori" => "Piano",
        "merek" => "LV",
        "harga" => "Rp.25.000.000",
        "gambar" => "images/4.png"
      ],
      [
        "idbarang" => 5,
        "kategori" => "Gitar Classic",
        "merek" => "YAMAHA",
        "harga" => "Rp.3.500.000",
        "gambar" => "images/5.png"
      ],
      [
        "idbarang" => 6,
        "kategori" => "Gitar Listrik",
        "merek" => "FENDER",
        "harga" => "Rp.4.750.000",
        "gambar" => "images/6.png"
      ],
      [
        "idbarang" => 7,
        "kategori" => "Drum",
        "merek" => "PEARL",
        "harga" => "Rp.17.500.000",
        "gambar" => "images/7.png"
      ],
      [
        "idbarang" => 8,
        "kategori" => "Biola",
        "merek" => "YAMAHA",
        "harga" => "Rp.750.000",
        "gambar" => "images/8.png"
      ],
    ];
  }
}
