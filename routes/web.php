<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('home', [
//         "products" => Product::allProducts()
//     ]);
// });
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/keranjang', function () {
    return view('keranjang');
});
Route::get('/checkout', function () {
    return view('checkout');
});


// Dashboard

Route::get('/', [DashboardController::class, 'index']);