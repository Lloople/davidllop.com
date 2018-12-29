<?php

Route::feeds();

Route::redirect('make-your-laravel-jobs-multi-tenancy-friendly', 'laravel-multitenancy-jobs');

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
Route::get('/about', \App\Http\Controllers\AboutController::class)->name('about');
Route::get('/posts/{slug}', \App\Http\Controllers\PostsController::class)->name('post');

Route::fallback(\App\Http\Controllers\FallbackController::class);
