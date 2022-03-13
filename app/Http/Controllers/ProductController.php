<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        // Look for similar products by querying for
        // products in the same category,
        // different from the currently viewed product,
        // and with a similar price.
        // Sort the Walmart way from low to high.
        $similar = Product::where('category', $product->category)
            ->whereNot('id', $product->id)
            ->orderByRaw('ABS(CAST(price AS SIGNED) - ?)', [$product->price])
            ->take(4)
            ->get()
            ->sortBy('price');

        return view('product', [
            'product' => $product,
            'similar' => $similar,
        ]);
    }
}
