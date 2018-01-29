<?php

namespace App\Http\Controllers;

use App\Services\Blog\Posts;
use Illuminate\Support\Facades\View;

class HomeController
{
    public function index(Posts $posts): \Illuminate\View\View
    {
        $recentPosts = $posts->all();
        $allPosts = $recentPosts->splice(2);

        $view = View::make('home');
        $view = $view->with('posts', $allPosts);
        $view = $view->with('recentPosts', $recentPosts);

        return $view;
    }
}
