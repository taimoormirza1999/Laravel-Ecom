<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;


Route::get('/', [HomeController::class,'index']);

Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'login']);
Route::get('/signup', [SignupController::class,'index']);
Route::post('/signup', [SignupController::class,'signup']);

Route::get('/product/{id}', [ProductController::class,'index']);
// Route::get('/product-list/{id}', [ProductController::class,'listed_product']);

Route::get('/checkout', [CheckoutController::class,'index']);
Route::post('/cart_add', [CartController::class,'add_to_cart']);

Route::get('/cart', [CartController::class,'index']);
Route::get('/cart/id', [CartController::class,'index']);
Route::get('/cart_premove/{id}', [CartController::class,'cart_premove']);

Route::get('/logout', function(){
   session()->flush();
   return redirect('/login');
});

