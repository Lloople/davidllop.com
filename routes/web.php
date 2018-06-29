<?php

Route::feeds();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/{slug}', 'PostsController@show')->name('post');
