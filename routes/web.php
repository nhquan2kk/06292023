<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

//added this route for my about the store page
Route::get('aboutstore', function(){
    return view('aboutstore');
});

//added this route for my controller
Route::resource('Prods','App\Http\Controllers\ProductCtrl');
Route::resource('About','App\Http\Controllers\AboutCtrl');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');