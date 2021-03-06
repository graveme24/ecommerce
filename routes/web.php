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
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('/user')->group(function () {
    Route::get('/dashboard', 'UserController@index')->name('user.dashboard');
});

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');
});

Route::get('/', 'HomeController@index')->name('index');
Route::get('/shop', 'HomeController@shop')->name('shop');






