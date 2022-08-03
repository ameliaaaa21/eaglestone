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

Route::get('/', function () { return view('index'); })->name('index');

Route::get('/about-us', function() { });

Route::get('/products', function() { return view('product'); })->name('products');

Route::get('/gallery', function() { return view('gallery'); })->name('gallery');

Route::get('/news-and-info', function() { return view('news-and-info'); })->name('news-and-info');

Route::get('/contact-us', function() { return view('contact-us'); })->name('contact-us');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/add-category', function () {
    return view('admin.category');
})->middleware(['auth'])->name('category');

Route::get('/add-product', function () {
    return view('admin.product');
})->middleware(['auth'])->name('product');

require __DIR__.'/auth.php';
