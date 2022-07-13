<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::view('user','users');