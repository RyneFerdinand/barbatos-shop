<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getAllProducts(){
        $products = Product::paginate(10);

        return view('manage-product', compact('products'));
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

    public function searchProductForAdmin(Request $request){
        $query = $request->query('query');
        $products = Product::where('name', 'LIKE', "%$query%")->paginate(10);

        return view('manage-product', compact('products', 'query'));
    }

    public function deleteProduct($id){
        $product = Product::find($id);

        $product->delete();

        return redirect()->back();
    }

    public function updateProduct($id){
        $product = Product::find($id);

    }

    public function viewUpdateProduct($id){
        $product = Product::find($id);

        return view('manage-product', compact('product'));
    }
}
