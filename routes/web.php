<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/products', [\App\Http\Controllers\ServiceController::class, 'index']);

Route::post('/products', [\App\Http\Controllers\ServiceController::class, 'redirectToDescription']);

Route::get('/products/{index}', [\App\Http\Controllers\ServiceController::class, 'category']);

Route::get('/products/create/{index}', [\App\Http\Controllers\ServiceController::class, 'create']);

Route::post('/products/create/logo-design', [\App\Http\Controllers\ServiceController::class, 'createLogoDesign']);

Route::get('/about-us', function(){return view('about-us');});

Route::get('/impressum', function(){return view('rechtliches.impressum');});

Route::get('/datenschutz', function(){return view('rechtliches.datenschutz');});

Route::resource('/shoppingcart', 'App\Http\Controllers\ShoppingcartController');
