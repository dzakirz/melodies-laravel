<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Products;
class DashboardController extends Controller
{
    // test commit


    public function index ()
    {
        $products = Products::all();
        return view('home', compact('products')
        );
    }
}
