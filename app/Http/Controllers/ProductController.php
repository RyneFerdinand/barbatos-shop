<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::paginate(10);

        return view('manage-product', compact('products'));
    }

    public function show($id){
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

    public function destroy($id){
        $product = Product::find($id);

        $product->delete();

        return redirect()->back();
    }

    public function update(Request $request, $id){
        $rules = ([
            'name' => 'required',
            'category' => 'required',
            'detail' => 'required',
            'price' => 'required|numeric',
            'photo' => 'required|mimes:jpeg,jpg,png',
        ]);

        $messages = ([
            'name.required' => "You need to fill in the product's name!",
            'category.required' => "You need to choose the product's category!",
            'detail.required' => "You need to fill in the product's detail!",
            'price.required' => "You need to fill in the product's price!",
            'photo.required' => "You need to choose the product's photo!",
            'photo.mimes' => "The product's photo must be in jpeg, jpg, or png!",
            'price.numeric' => "The price must be in integer!"
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        $product = Product::find($id);
        $product->name = $request->name;
        $category = Category::find($request->category);
        $product->detail = $request->detail;
        $product->category_id = $category->id;
        $product->price = $request->price;

        $ext = $request->file('photo')->extension();
        $photo = time().'.'.$ext;

        Storage::putFileAs('/public/images', $request->photo, $photo);

        $product->photo = '/storage/images/'.$photo;

        $product->save();

        return redirect('/manage-product');
    }

    public function viewUpdateProduct($id){
        $product = Product::find($id);
        $categories = Category::all();

        return view('update-product', compact('product', 'categories'));
    }

    public function store(Request $request){

        $rules = ([
            'name' => 'required',
            'category' => 'required',
            'detail' => 'required',
            'price' => 'required|numeric',
            'photo' => 'required|mimes:jpeg,jpg,png',
        ]);

        $messages = ([
            'name.required' => "You need to fill in the product's name!",
            'category.required' => "You need to choose the product's category!",
            'detail.required' => "You need to fill in the product's detail!",
            'price.required' => "You need to fill in the product's price!",
            'photo.required' => "You need to choose the product's photo!",
            'photo.mimes' => "The product's photo must be in jpeg, jpg, or png!",
            'price.numeric' => "The price must be in integer!"
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        $product = new Product();

        $product->name = $request->name;
        $category = Category::find($request->category);
        $product->detail = $request->detail;
        $product->category_id = $category->id;
        $product->price = $request->price;

        $ext = $request->file('photo')->extension();
        $photo = time().'.'.$ext;

        Storage::putFileAs('/public/images', $request->photo, $photo);

        $product->photo = '/storage/images/'.$photo;

        $product->save();

        return redirect('/manage-product');
    }
}
