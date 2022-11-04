<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/layout', function () {
    return view('components.layout');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/view-product', function () {
    return view('view-product-by-category');
});

Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/search-product', function () {
    return view('search-product');
});

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
