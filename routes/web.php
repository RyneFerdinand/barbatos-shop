<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CategoryController::class, 'getAllCategories']);

Route::get('/layout', function () {
    return view('components.layout');
});

Route::get('/login', [UserController::class, 'loginPage']);

Route::get('/register', [UserController::class, 'registerPage']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'register']);

Route::get('/category/{id}', [CategoryController::class, 'getCategoryById']);

Route::get('/product/{id}', [ProductController::class, 'getProductById']);

Route::get('/search', [ProductController::class, 'searchProduct']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/manage-product', function () {
    return view('manage-product');
});

Route::get('/add-product', function () {
    return view('add-product');
});


Route::get('/update-product', function () {
    return view('update-product');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/history', function () {
    return view('history');
});
