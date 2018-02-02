<?php

namespace App\Http\Controllers;

use App\Services\Blog\Posts;
use Illuminate\Support\Facades\View;

class PostController
{
    public function show(Posts $posts, string $slug): \Illuminate\View\View
    {
        $view = View::make('post');
        $view = $view->with('post', $posts->find($slug));

        return $view;
    }
}
