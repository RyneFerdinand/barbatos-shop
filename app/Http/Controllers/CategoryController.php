<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();

        return view('home', compact('categories'));
    }

    public function show($id){
        $category = Category::find($id);
        $products = $category->products()->paginate(10);

        return view('view-product-by-category', compact('category', 'products'));
    }

    public function getAllCategoriesForAddProduct(){
        $categories = Category::all();

        return view('add-product', compact('categories'));
    }
}
