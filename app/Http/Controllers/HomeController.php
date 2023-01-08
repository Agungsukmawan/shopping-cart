<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function index() {
        $products = Products::get();
        return view('home.index', ['products' => $products ]);
    }
}
