<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('', function () {
    return view('about');
});

Route::view("about","/about");

Route::view('contact','/contact');

Route::get('user/{id}',[UserController::class,'show']);

Route::view('user','users');

Route::view('privacy','privacy');

Route::get('product/{productName}',[ProductController::class,'name']);

Route::get('products/{names}', function ($name){
  return view('product-list',['name'=>$name]);
});
