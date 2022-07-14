<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;



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
    return view('welcome');
});

// Routing Testing

// Route::get('/about',function(){
//   return view('about');
// });

// Route::view('about','/about');

// Route::get('/about/{name}',function($name){
//   return view('about',['name'=>$name]);
// });

// for controller

// Route::get('user/{sonu}',[UserController::class,'show']);

//laravel7
// Route::get('user','UserController@show');

//Route::view('user','users');

// Route::get('user',[UserController::class,'show']);

// Route::view('product','product')->middleware('protectedPage');;

// Route::post('getFormData',[ProductsController::class,'getFormData']);

// Route::view('noaccess','noaccess');

//group middleware
// Route::group(['middleware'=>['protectPage']],function(){
//     Route::get('user',[UserController::class,'show']);
// });

// Route::get('/users',[UserController::class,'index']);
// Route::get('/users/index2',[UserController::class,'index2']);

Route::get('/users/getApiData',[UserController::class,'getApiData']);

Route::view('/login/testHttpMethods','testHttpMethods');

Route::put('getHttpMethodData',[UserController::class,'getHttpMethodData']);

