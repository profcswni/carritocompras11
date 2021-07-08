<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    {
        public function shop()
        {
            $products = Product::all();
            dd($products);
            return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
        }
    
        public function cart()  {
            $cartCollection = \Cart::getContent();
            dd($cartCollection);
            return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
        }
    
    }
}
