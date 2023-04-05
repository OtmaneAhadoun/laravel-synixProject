<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::controller(UserController::class)->group(function(){
    Route::get('/login','login')->name('tologin');
    Route::post('/login','aauth')->name('login');
    Route::get('/logout','logout')->name('logout');
});
Route::controller(cartController::class)->group(function(){
    Route::post('/add','store')->name('addToCart');
});
Route::controller(ProductController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/show/{product}','show')->name('show');
    Route::get('/add','add')->name('add');
    // Route::post('/store','store')->name('store');
});
