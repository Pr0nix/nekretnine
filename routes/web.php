<?php

Auth::routes();

Route::get('/estates', 'EstatesController@index');

Route::get('/estates/{estate}', 'EstatesController@show');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index'); 

Route::get('/admin/create', 'AdminController@create');

Route::post('/estates', 'EstatesController@store');