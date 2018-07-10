<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Spatie\Sheets\Sheets;

class PostsController
{
    public function show(string $slug, Sheets $sheets): View
    {
        $posts = $sheets->all()->sortByDesc('date');

        $postKey = $posts->search(function ($post) use ($slug) {
            return $post->slug === $slug;
        });

        if ($postKey === false) {
            abort(404);
        }

        return view('post')
            ->with('post', $posts->get($postKey))
            ->with('previousPost', $posts->get($postKey+1))
            ->with('nextPost', $posts->get($postKey-1));
    }
}
