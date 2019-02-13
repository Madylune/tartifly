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

Route::get('/', 'PageController@home');

Route::get('about', 'PageController@about');

Route::get('messages', 'PageController@messages');

Route::get('voyages', 'VoyageController@index');

Route::get('voyages/{id}', 'VoyageController@show');

Route::prefix('admin')->group(function () {
    Route::get('/', 'PageController@admin');
    Route::resource('voyages', 'AdminVoyageController');
    Route::resource('users', 'AdminUserController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile');