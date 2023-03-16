<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FruitsController;
use App\Http\Controllers\IfelseController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ForeachController;
use App\Http\Controllers\IncludeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FlashSessionController;
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

// How to get data  usign routes
Route::get('products/{names}', function ($name){
  return view('product-list',['name'=>$name]);
});

// HOw to get url in laravel
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

// Condtions Routes and Loops
Route::get('ifelse',[IfelseController::class,'check']);

Route::get('foreach',[ForeachController::class,'showall']);

Route::get('include',[IncludeController::class,'jsarray']);

Route::view('login','sign-in');
Route::post('postformdata',[PostFormDataController::class,'postData']);

Route::view('noaccess','noaccess');

// Group Middleware
Route::group(['middleware'=>['checkLocation']],function(){

  Route::view('check','group-middleware');
  Route::view('checktwo','group-middleware-two');

});

// Route Middleware
Route::view('single','single-route')->middleware('RouteStatus');
Route::view('noaccess-single-route','noaccess-single-route');


Route::get('allusers',[UsersController::class,'index']);
Route::get('allusers/create',[UsersController::class,'create']);

// HOW TO GET DATA USING MODEL AND THE BEST WAY IS THIS MODEL
Route::get('modelusers',[UsersController::class,'showData']);
Route::get('modelemployee',[EmployeeController::class,'getData']);

// HOW TO FETCH API DATA
Route::get('api',[ApiController::class,'fetchData']);

// HTTP all POST GET PUT AND DELETE
Route::post('signup/post',[SignUpController::class,'create']);
Route::get('signup/get',[SignUpController::class,'read']);
Route::delete('signup/delete',[SignUpController::class,'delete']);
Route::put('signup/update',[SignUpController::class,'update']);
Route::view('signup','sign-up');
Route::view('signupget','sign-up-get');
Route::view('signupdelete','sign-up-delete');
Route::view('signupupdate','sign-up-update');

// Flash Session
Route::post('flashsession',[FlashSessionController::class,'sessionFlash']);
Route::view('flash','flash-form');

// Session for login
// Route::view('sessionsignin','session-sign-in');
// check if the user is logged in then send to profile page
Route::get('sessionsignin',function(){
      if (session()->has('user')) {
        return redirect('profile');
      }
    return view('session-sign-in');
});
Route::view('profile','userprofile');
Route::post('sessionsignin/create',[AuthUserController::class,'userLogin']);

// Logout 
Route::get('logout',function(){
  if (session()->has('user')) {
    session()->pull('user',null);
  }
  return redirect('sessionsignin');
});