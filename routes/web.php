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


//Add Product
Route::get('/','App\Http\Controllers\ProductController@create');
Route::post('store','App\Http\Controllers\ProductController@store');

//Update Product details
Route::get('edit/{id}','App\Http\Controllers\ProductController@edit');
Route::post('update/{id}','App\Http\Controllers\ProductController@update');

Route::get('del/{id}','App\Http\Controllers\ProductController@destroy');