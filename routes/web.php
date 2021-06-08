<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\MasterController::class,'viewHome']);

Route::get('/login',[App\Http\Controllers\UserController::class,'viewLogin']);

Route::get('/logout',[App\Http\Controllers\UserController::class,'logOut']);

Route::post('/auth_check',[App\Http\Controllers\UserController::class,'checkAuth']);

Route::get('/register',[App\Http\Controllers\UserController::class,'viewRegister']);

Route::post('/new_registration',[App\Http\Controllers\UserController::class,'storeUser']);

Route::get('/product',[App\Http\Controllers\ProductController::class,'index']);

Route::get('/search_product',[App\Http\Controllers\ProductController::class,'searchProduct']);

Route::get('/product_details/{id}',[App\Http\Controllers\ProductController::class,'viewProductSingle']);

Route::post('/add_to_cart',[App\Http\Controllers\ProductController::class,'addToCart']);

Route::get('/removecart/{id}',[App\Http\Controllers\ProductController::class,'removeFromCart']);

Route::get('/cart_list',[App\Http\Controllers\ProductController::class,'cartList']);

Route::get('/ordernow',[App\Http\Controllers\ProductController::class,'checkOut']);

Route::post('/orderplace',[App\Http\Controllers\ProductController::class,'orderPlace']);

Route::get('/myorder',[App\Http\Controllers\ProductController::class,'myOrders']);
