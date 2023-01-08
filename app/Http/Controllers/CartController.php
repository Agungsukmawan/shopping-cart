<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;

class CartController extends Controller
{
    public function index() {
        $carts = Cart::where('user_id', 1)
                        ->join('products', 'products.id', '=', 'carts.product_id')
                        ->get();

        return view('cart.index', ['carts' => $carts]);
    }

    public function add(Products $product) {

        $item = Cart::where('product_id', $product->id)->first();
        
        if(!$item) {
            Cart::create([
                'user_id' => 1,
                'product_id' => $product->id,
                'qty' => 1,
                'price' => $product->price
            ]);

            return redirect('cart');
        } else {
            Cart::where('user_id', 1)->where('product_id', $product->id)->update([
                'qty' => $item->qty + 1,
                'price' => $product->price
            ]);

            return redirect('cart');
        }
    }

    public function remove(Products $product) {
        $item = Cart::where('product_id', $product->id)->first();

        if($item->qty === 1) {
            Cart::where('user_id', 1)->where('product_id', $product->id)->delete();

            return redirect('cart'); 
        } else {

            Cart::where('user_id', 1)->where('product_id', $product->id)->update([
                'qty' => $item->qty - 1,
                'price' => $product->price
            ]);
            
            return redirect('cart');
        }
    }
}
