<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/view_category',[AdminController::class,'view_category']);

Route::post('/add_category',[AdminController::class,'add_category']);

Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

Route::post('/add_product',[AdminController::class,'add_product']);

Route::get('/view_product',[AdminController::class,'view_product']);

Route::get('/show_product',[AdminController::class,'show_product']);

Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

Route::get('/update_product/{id}',[AdminController::class,'update_product']);

Route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

Route::get('/product_details/{id}',[HomeController::class,'product_details']);

Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

Route::get('/cart_items',[HomeController::class,'cart_items']);

Route::get('/deletecart_product/{id}',[HomeController::class,'deletecart_product']);

Route::get('/deletecart',[HomeController::class,'deletecart']);

Route::post('/cart/add',[HomeController::class,'addItem'])->name('cart.add');

Route::post('/cart/rmv',[HomeController::class,'rmvItem'])->name('cart.rmv');

Route::post('/cart/qtyadd',[HomeController::class,'qtyItem'])->name('cart.qtyadd');

Route::post('/cart/checkout',[HomeController::class,'checkout'])->name('cart.checkout');

Route::post('/cart/rmvall',[HomeController::class,'rmvItemall'])->name('cart.rmvall');