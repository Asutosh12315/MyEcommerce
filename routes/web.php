<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\MasterController::class,'viewHome']);

Route::get('/login',[App\Http\Controllers\UserController::class,'viewLogin']);

Route::get('/logout',[App\Http\Controllers\UserController::class,'logOut']);

Route::post('/auth_check',[App\Http\Controllers\UserController::class,'checkAuth']);

Route::get('/register',[App\Http\Controllers\UserController::class,'viewRegister']);

Route::post('/new_registration',[App\Http\Controllers\UserController::class,'storeUser']);

Route::get('/product',[App\Http\Controllers\ProductController::class,'index']);

Route::get('/product_details/{id}',[App\Http\Controllers\ProductController::class,'viewProductSingle']);
