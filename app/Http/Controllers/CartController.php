<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {

        return view('cart');
    }
    public function add_to_cart(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $user_id = session('user_id');
        $add_to_cart = new Cart;
        $add_to_cart->product_id = $product_id;
        $add_to_cart->user_id = $user_id;
        $add_to_cart->quantity = $quantity;
        $add_to_cart->save();
        return redirect("/cart");
    }
    public function cart_premove($id)
    {
        Cart::destroy($id);
        return redirect('/cart');
    }
}
