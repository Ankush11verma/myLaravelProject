<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('cart', compact('cart'));
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        $cart = Session::get('cart', []);
        $cart[$id] = $product;
        Session::put('cart', $cart);
        return redirect()->route('cart.index');
    }
}
