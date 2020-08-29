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

Route::get('/', 'ProductController@show');

Auth::routes();

// Admin Panel Routes
Route::get('/home', 'HomeController@showData');

// Product Silme
Route::delete('/home/product/{product}', 'ProductController@destroy');

// Product Edit
Route::get('/product/{product}/edit', 'ProductController@edit');
Route::patch('/product/{product}', 'ProductController@update');


//Product Ekleme Sayfası
Route::get('home/product-add', 'ProductController@create');
Route::post('home/product-add', 'ProductController@store');

//Product Image Ekleme
Route::get('/home/product/image', 'ImageController@create');
Route::post('/home/product/image', 'ImageController@store');

//Product Image Silme
Route::delete('/home/image/{image}', 'ImageController@destroy');

//Product Video Ekleme
Route::get('/home/product/video', 'VideoController@create');
Route::post('/home/product/video', 'VideoController@store');

//Product Video Silme
Route::delete('/home/video/{video}', 'VideoController@destroy');