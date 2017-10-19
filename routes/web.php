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


Auth::routes();

Route::resource('events','EventController');

Route::resource('categories','CategoryController');

Route::resource('eventNames','EventNameController');

Route::get('/', 'HomeController@index')->name('home');

Route::get('logout','Auth\LoginController@logout');
