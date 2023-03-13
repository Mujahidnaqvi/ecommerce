<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FruitsController;
use App\Http\Controllers\IfelseController;
use App\Http\Controllers\ForeachController;
use App\Http\Controllers\IncludeController;
use App\Http\Controllers\PostFormDataController;

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

Route::get('url' ,function(){
   return view('current-url');
});

Route::get('previous', function(){
   return view('previous-url');
});

Route::get('allurl',function(){
  return view('all-url');
});

Route::get('urlpractice',function(){
   return view('url-practice');
});

Route::get('user',function(){
  return view('user');
});

Route::get('fruits',[FruitsController::class,'fruitslist']);
Route::get('fruits/array',[FruitsController::class,'fruitsarray']);

Route::get('ifelse',[IfelseController::class,'check']);

Route::get('foreach',[ForeachController::class,'showall']);

Route::get('include',[IncludeController::class,'jsarray']);

Route::view('login','sign-in');
Route::post('postformdata',[PostFormDataController::class,'postData']);

Route::view('noaccess','noaccess');

Route::group(['middleware'=>['checkLocation']],function(){

  Route::view('check','group-middleware');
  Route::view('checktwo','group-middleware-two');

});

Route::view('single','single-route')->middleware('RouteStatus');
Route::view('noaccess-single-route','noaccess-single-route');


Route::get('allusers',[UsersController::class,'index']);
Route::get('allusers/create',[UsersController::class,'create']);

