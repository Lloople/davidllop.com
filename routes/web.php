<?php

Route::feeds();

Route::redirect('make-your-laravel-jobs-multi-tenancy-friendly', 'laravel-multitenancy-jobs');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/{slug}', 'PostsController@show')->name('post');
