<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    //
    public function getAllCategories(){
        $categories = Category::all();

        return view('home', compact('categories'));
    }

    public function getCategoryById($id){
        $category = Category::find($id);
        $products = $category->products()->paginate(8);

        return view('view-product-by-category', compact('category', 'products'));
    }
}
