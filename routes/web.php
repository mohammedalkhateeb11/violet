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

Route::view('/categories', 'categories')->name('categories');
Route::view('/check-out', 'check-out')->name('check-out');
Route::view('/contact', 'contact')->name('contact');
//Route::view('/product-page', 'product-page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'IndexController@index')->name('index');
Route::get('/product-page', 'ProductController@index')->name('product-page');  

Route::get('/addToCart{product}', 'ProductController@addToCart')->name('cartAdd');   
Route::get('/shopping-cart', 'ProductController@showCart')->name('shopping-cart');   


