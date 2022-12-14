<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\securityAdmin;
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

Route::get('/login', [UserController::class, 'loginPage']);

Route::get('/register', [UserController::class, 'registerPage']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'register']);

Route::get('/category/{id}', [CategoryController::class, 'getCategoryById']);

Route::get('/product/{id}', [ProductController::class, 'getProductById']);

Route::get('/search', [ProductController::class, 'searchProduct']);

Route::get('/search-admin', [ProductController::class, 'searchProductForAdmin']);

Route::get('/logout', [UserController::class, 'logout'])->middleware('securityUser');

Route::post('/cart/{userid}/{productid}', [CartController::class, 'addCart']);

Route::delete('/cart/{userid}/{productid}', [CartController::class, 'deleteCart']);

Route::get('/manage-product', [ProductController::class, 'getAllProducts'])->middleware('securityAdmin');

Route::get('/add-product', [CategoryController::class, 'getAllCategoriesForAddProduct'])->middleware('securityAdmin');

Route::post('add-product', [ProductController::class, 'addProduct'])->middleware('securityAdmin');

Route::put('/update/{id}', [ProductController::class, 'updateProduct'])->middleware('securityAdmin');

Route::delete('/delete/{id}', [ProductController::class, 'deleteProduct'])->middleware('securityAdmin');

Route::get('/update/{id}', [ProductController::class, 'viewUpdateProduct'])->middleware('securityAdmin');

Route::get('/update-product', function () {
    return view('update-product');
});

Route::get('/profile', function () {
    return view('profile');
})->middleware('securityUser');

Route::get('/cart', function () {
    return view('cart');
})->middleware('securityMember');

Route::get('/history', function () {
    return view('history');
})->middleware('securityMember');
