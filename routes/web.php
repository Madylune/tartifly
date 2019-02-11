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

Route::get('/about', 'PageController@about');

Route::get('/about', 'PageController@messages');

Route::get('/voyages', 'VoyageController@index');

Route::get('/voyages/{id}', 'VoyageController@show');

Route::get('/admin/voyages/{id}', function ($id) {
    return 'Admin voyage '.$id;
});

Route::get('/admin/messages/{id}', function ($id) {
    return 'Admi, message '.$id;
});