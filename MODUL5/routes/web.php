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

Route::get('/', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::get('/product/create', 'App\Http\Controllers\ProductController@create');
Route::get('/product/delete/{id}', 'App\Http\Controllers\ProductController@delete');
Route::get('/product/update/{id}', 'App\Http\Controllers\ProductController@update'); //cari id product
Route::put('/product/update/product/updates/{id}', 'App\Http\Controllers\ProductController@updates'); //update product

Route::get('/create_product', function () {
    return view('insert_product');
});
Route::get('/insert_product', function () {
    return view('insert_product');
});

Route::get('/order', 'App\Http\Controllers\ProductController@index2');
Route::get('/detail_order/{id}', 'App\Http\Controllers\ProductController@detail_order');
Route::get('/detail_order/order/create', 'App\Http\Controllers\OrderController@create');
Route::get('/history', 'App\Http\Controllers\OrderController@index');


