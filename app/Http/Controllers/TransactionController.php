<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function index()
    {
        $user_id = Auth::user()->id;
        $transactions = User::find($user_id)->transactions;

        return view('history', compact('transactions'));
    }

    public function store()
    {
        $user_id = Auth::user()->id;
        $carts = User::find($user_id)->carts;
        $transaction = new TransactionHeader();
        $transaction->user_id = $user_id;
        $transaction->save();

        foreach ($carts as $cart) {
            $detail = new TransactionDetail();
            $detail->transaction_header_id = $transaction->id;
            $detail->product_id = $cart->product->id;
            $detail->qty = $cart->qty;
            $detail->save();

            $cart->delete();
        }

        return redirect('/history')->with('success', 'Transaction created successfully!');;
    }
}
