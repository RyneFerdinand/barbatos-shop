<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getAllProducts(){
        $products = Product::all();

        return view('home', compact('products'));
    }

    public function getProductById($id){
        $product = Product::find($id);

        return view('product-detail', compact('product'));
    }

    public function searchProduct(Request $request){
        $query = $request->query('query');
        $products = Product::where('name', 'LIKE', "%$query%")->get();

        return view('search-product', compact('products', 'query'));
    }
}
