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
Route::get('/register', 'UserController@show')->name('get.register');
Route::post('/register', 'UserController@store')->name('post.register');
Route::get('/login', 'UserController@showlogin')->name('get.login');
Route::post('/login', 'UserController@login')->name('post.login');
Route::get('logout', 'UserController@logout')->name('logout');

Route::group(['middleware' => 'adminLogin'], function () {
    Route::get('/admin', 'ProductsController@viewProducts')->name('get.admin');
    Route::get('/add', 'ProductsController@viewAddpage')->name('get.add');
    Route::post('/add', 'ProductsController@addProducts')->name('post.addproducts');
    Route::get('delete/{id}', 'ProductsController@deleteProducts');
    Route::get('edit/{id}', 'ProductsController@editProducts');
    Route::put('update/{id}', 'ProductsController@updateProducts');
});
