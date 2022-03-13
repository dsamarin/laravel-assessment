<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index($category)
    {
        // Uppercase
        $categoryName = Str::plural(Str::title($category));

        $products = Product::where('category', '=', $category)->paginate(16);

        return view('category', [
            'category' => $categoryName,
            'products' => $products,
        ]);
    }
}
