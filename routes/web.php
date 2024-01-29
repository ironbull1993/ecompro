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
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/logout',[AdminController::class,'loggedout'])->name('logout')->middleware('custom.auth');

//Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/view_category',[AdminController::class,'view_category'])->middleware('custom.auth');

Route::get('/view_order',[AdminController::class,'view_order'])->middleware('custom.auth');

Route::get('/view_orderdetails',[AdminController::class,'view_orderdetails'])->middleware('custom.auth');

Route::post('/add_category',[AdminController::class,'add_category'])->middleware('custom.auth');

Route::get('/delete_category/{id}',[AdminController::class,'delete_category'])->middleware('custom.auth');

Route::post('/add_product',[AdminController::class,'add_product'])->middleware('custom.auth');

Route::get('/view_product',[AdminController::class,'view_product'])->middleware('custom.auth');

Route::get('/show_product',[AdminController::class,'show_product'])->middleware('custom.auth');

Route::get('/newproduct',[AdminController::class,'newproduct'])->middleware('custom.auth');

Route::get('/delete_product/{id}',[AdminController::class,'delete_product'])->middleware('custom.auth');

Route::get('/update_product/{id}',[AdminController::class,'update_product'])->middleware('custom.auth');

Route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm'])->middleware('custom.auth');

Route::get('/product_details/{id}',[HomeController::class,'product_details']);

Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

Route::get('/cart_items',[HomeController::class,'cart_items']);

Route::get('/deletecart_product/{id}',[HomeController::class,'deletecart_product']);

Route::get('/deletecart',[HomeController::class,'deletecart']);

Route::post('/cart/add',[HomeController::class,'addItem'])->name('cart.add');

Route::post('/cart/rmv',[HomeController::class,'rmvItem'])->name('cart.rmv');

Route::post('/product/rmv',[AdminController::class,'rmvproduct'])->name('product.rmv')->middleware('custom.auth');

Route::post('/order/rmv',[AdminController::class,'rmvorder'])->name('order.rmv')->middleware('custom.auth');

Route::get('/orderview/{id}',[AdminController::class,'vieworder'])->middleware('custom.auth');

Route::post('/product/edit',[AdminController::class,'editproduct'])->name('product.edit')->middleware('custom.auth');

Route::get('/product/edit1',[AdminController::class,'editproduct1'])->name('product.edit1')->middleware('custom.auth');

Route::post('/product/edited',[AdminController::class,'edited'])->name('product.edited')->middleware('custom.auth');

Route::post('/product/add',[AdminController::class,'added'])->name('product.add')->middleware('custom.auth');

Route::post('/cat/edit',[AdminController::class,'catedit'])->name('cat.edit')->middleware('custom.auth');

Route::post('/cat/edited',[AdminController::class,'catedited'])->name('cat.edited')->middleware('custom.auth');

Route::post('/cat/rmv',[AdminController::class,'catrmv'])->name('cat.rmv')->middleware('custom.auth');

Route::post('/cat/add',[AdminController::class,'catadd'])->name('cat.add')->middleware('custom.auth');

Route::post('/cart/qtyadd',[HomeController::class,'qtyItem'])->name('cart.qtyadd');

Route::post('/cart/checkout',[HomeController::class,'checkout'])->name('cart.checkout');

Route::post('/cart/rmvall',[HomeController::class,'rmvItemall'])->name('cart.rmvall');

Route::get('/checkout',[HomeController::class,'mycheckout']);

Route::post('/cart/addproduct',[HomeController::class,'addproduct'])->name('cart.addproduct');

