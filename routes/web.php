<?php

Auth::routes();

Route::get('/estates', 'EstatesController@index');

Route::get('/estates/{estate}', 'EstatesController@show');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->middleware('auth');

Route::get('/admin/create', 'AdminController@create');

Route::post('/estates', 'EstatesController@store');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');