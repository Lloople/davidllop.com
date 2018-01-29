<?php

namespace App\Services\Blog;

use Illuminate\Support\ServiceProvider;

class PostsProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Posts::class);
    }
}
