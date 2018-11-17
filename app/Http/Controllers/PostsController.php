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

        abort_if($postKey === false, 404);

        $post = $posts->get($postKey);

        $otherPosts = isset($post->category)
            ? $posts->filter(function ($otherPost) use ($post) {
                return $otherPost->published
                    && isset($otherPost->category)
                    && $otherPost->category === $post->category
                    && $otherPost !== $post;
            })
            : [];

        return view('post')
            ->with('post', $post)
            ->with('previousPost', $posts->get($postKey + 1))
            ->with('nextPost', $posts->get($postKey - 1))
            ->with('otherPosts', $otherPosts);
    }
}
