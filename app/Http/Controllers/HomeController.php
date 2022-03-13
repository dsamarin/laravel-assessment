<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $hottest = Product::orderBy('price', 'desc')->take(9)->get();

        return view('home', [
            'hottest' => $hottest,
        ]);
    }
}
