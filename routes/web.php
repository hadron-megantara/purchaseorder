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

Route::get('/login', 'Auth\LoginController@index');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/signout', 'Auth\LoginController@signout');

Route::get('/register', 'Auth\RegisterController@index');
Route::post('/register', 'Auth\RegisterController@create');

Route::get('/password/reset', 'Auth\ForgotPasswordController@forgot');

Route::get('/products', 'ProductController@productList');
Route::get('/products/{name}', 'ProductController@product');
Route::get('/products/detail/{id}', 'ProductController@detail');

Route::get('/categories/{name}', 'ProductController@category');

Route::get('/cart', 'CartController@index');
Route::post('/cart/add', 'CartController@addToCart');
Route::get('/cart/update', 'CartController@updateCart');
Route::get('/cart/delete', 'CartController@deleteCart');
Route::get('/cart/get-photo', 'CartController@getPhoto');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'CheckoutController@index');
    Route::post('/checkout', 'CheckoutController@checkout');

    Route::get('/order/{id}', 'CheckoutController@orderFinish');
});

Route::get('/wishlist', 'WishlistController@index');

Route::get('/config/province/get', 'ConfigController@getProvince');
Route::get('/config/city/get', 'ConfigController@getCity');
Route::get('/config/district/get', 'ConfigController@getDistrict');

Route::get('/profile', 'ProfileController@index');
Route::get('/profile/edit', 'ProfileController@edit');
Route::get('/profile/address', 'ProfileController@address');
Route::get('/profile/bank', 'ProfileController@bank');

Route::post('/profile/address/add', 'ProfileController@addAddress');
