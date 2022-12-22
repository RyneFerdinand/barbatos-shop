<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function store(Request $request, $product_id){
        $user_id = Auth::user()->id;

        $temp = Cart::where('user_id', '=', $user_id)->where('product_id', '=', $product_id)->get();
        if (count($temp) != 0){
            $cart = Cart::find($temp[0]->id);
            $cart->qty += $request->qty;
            $cart->save();
        }
        else {
            $cart = new Cart();
            $cart->qty = $request->qty;
            $cart->user_id = $user_id;
            $cart->product_id = $product_id;
            $cart->save();
        }

        return redirect('/');
    }

    public function destroy($product_id){
        $user_id = Auth::user()->id;
        $temp = Cart::where('user_id', '=', $user_id)->where('product_id', '=', $product_id)->get();
        Cart::destroy($temp);

        return redirect()->back();
    }

    public function index(){
        $user_id = Auth::user()->id;
        $carts = User::find($user_id)->carts;

        return view('cart', compact('carts'));
    }
}
