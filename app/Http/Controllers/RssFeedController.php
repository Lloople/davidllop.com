<?php

namespace App\Http\Controllers;

use App\Services\Blog\Posts;
use Illuminate\Support\Collection;

class RssFeedController
{
    public function index(Posts $posts): Collection
    {
        return $posts
            ->all()
            ->map(function ($post) {
                return [
                    'id' => $post->date->timestamp,
                    'title' => $post->title,
                    'summary' => $post->summary,
                    'updated' => $post->date,
                    'link' => route('post', [$post->slug]),
                    'author' => 'Dieter Stinglhamber',
                ];
            });
    }
}
