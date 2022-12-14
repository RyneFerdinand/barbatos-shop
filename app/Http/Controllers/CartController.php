<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addCart(Request $request, $userid, $productid){
        $cart = new Cart();
        $cart->qty = $request->qty;
        $cart->user_id = $userid;
        $cart->product_id = $productid;

        $temp = Cart::where('user_id', '=', $userid)->where('product_id', '=', $productid)->get();
        if ($temp){
            $temp +=$request->qty;
        }
        else {
            $cart = new Cart();
            $cart->qty = $request->qty;
            $cart->user_id = $userid;
            $cart->product_id = $productid;
            $cart->save();
        }

        return redirect('/');
    }

    public function deleteCart($userid, $productid){
        $cart = Cart::where('user_id', '=', $userid)->where('product_id', '=', $productid)->get();

        Cart::destroy($cart);

        return redirect()->back();
    }
}
