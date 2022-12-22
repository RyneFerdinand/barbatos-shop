<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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

Route::controller(CategoryController::class)->group(function (){
    Route::get('/', 'index');
    Route::get('/category/{id}', 'show');
    Route::get('/add-product', 'getAllCategoriesForAddProduct')->middleware('securityAdmin');
});

Route::controller(UserController::class)->group(function (){
    Route::get('/login', 'loginPage');
    Route::get('/register', 'registerPage');
    Route::post('/login', 'login');
    Route::post('/register', 'register');
    Route::get('/logout', 'logout')->middleware('securityUser');
});

Route::controller(ProductController::class)->group(function (){
    Route::get('/product/{id}', 'show');
    Route::get('/search', 'searchProduct');
    Route::get('/search-admin', 'searchProductForAdmin');
    Route::middleware(['securityAdmin'])->group(function(){
        Route::get('/manage-product', 'index');
        Route::post('/product', 'store');
        Route::put('/product/{id}', 'update');
        Route::delete('/product/{id}', 'destroy');
        Route::get('/update-product/{id}', 'viewUpdateProduct');
    });
});

Route::controller(CartController::class)->group(function (){
    Route::middleware(['securityMember'])->group(function(){
        Route::delete('/product/cart/{product_id}', 'destroy');
        Route::post('/product/cart/{product_id}', 'store');
        Route::get('/cart', 'index');
    });
});

Route::controller(TransactionController::class)->group(function(){
    Route::get('/history', 'index')->middleware('securityMember');
    Route::post('/product/transaction', 'store');
});

Route::get('/profile', function () {
    return view('profile');
})->middleware('securityUser');

