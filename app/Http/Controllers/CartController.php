<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = \Cart::session(Session::getId())->getContent();

        // dd($cart);

        return view('cart', [
            'cart' => $cart,
        ]);
    }

    public function add(Request $request)
    {
        $id = $request->product;
        $quantity = $request->quantity;

        $product = Product::find($id);

        \Cart::session(Session::getId())->add([
            'id' => $id,
            'name' => $product->name,
            'price' => $product->price / 100,
            'quantity' => $quantity,
            'associatedModel' => $product,
        ]);

        return redirect()->back()->with('message', 'Product added to cart successfully!');
    }

    public function remove(Request $request)
    {
        $id = $request->product;
        \Cart::session(Session::getId())->remove($id);

        return redirect()->back()->with('message', 'Product removed from cart successfully!');
    }
}
