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


Route::get('/', 'Admin\ProductsController@list');
Route::get('/products', 'Admin\ProductsController@list')->name('admin.products.list');
Route::get('/product/create', 'Admin\ProductsController@create')->name('admin.products.create');
Route::post('/product/save', 'Admin\ProductsController@save')->name('admin.products.save');
