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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/testing', 'TestingController@index')->name('testing');

Route::prefix('admin')->group(function(){ 
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/create-vendor', 'AdminController@create')->name('admin.vendor');
    Route::post('/create-vendor', 'AdminController@saveVendor')->name('admin.vendor.submit');
});
Route::prefix('vendor')->group(function(){ 
    Route::get('/login', 'Auth\VendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login','Auth\VendorLoginController@login')->name('vendor.login.submit');
    Route::get('/', 'VendorController@index')->name('vendor.dashboard');
    Route::get('/categories', 'CategoryController@index')->name('vendor.categories');
    Route::get('/products', 'ProductController@index')->name('vendor.products');
    Route::get('/show/id/{id}','ProductController@edit')->name('vendor.products.edit');
    Route::post('/show/id/{id}','ProductController@update')->name('vendor.products.edit.submit');
});


