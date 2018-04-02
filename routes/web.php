<?php

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index');
Route::get('/faq', 'ServiceController@faq');
Route::get('/contact-us', 'ServiceController@contactUs');

Route::get('/products/{id}', 'ProductController@detail');

Route::get('/cart', 'CartController@index');
Route::post('/cart/add', 'CartController@addToCart');
Route::get('/cart/update', 'CartController@updateCart');
Route::get('/cart/get-photo', 'CartController@getPhoto');

Route::get('/checkout', 'CheckoutController@index');
Route::get('/wishlist', 'WishlistController@index');

Route::get('/profile/edit', 'ProfileController@edit');
Route::get('/profile/address', 'ProfileController@address');
Route::get('/profile/bank', 'ProfileController@bank');
