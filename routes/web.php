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
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/register','UserController@show')->name('auth.show');
Route::post('/register','UserController@store')->name('auth.post');
Route::get('/login','UserController@showlogin')->name('auth.showlogin');
Route::post('/login','UserController@login')->name('auth.login');
Route::get('logout','UserController@logout')->name('logout');





