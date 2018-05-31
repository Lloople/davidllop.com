<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Spatie\Sheets\Sheets;

class PostsController
{
    public function show(string $slug, Sheets $sheets): View
    {
        $post = $sheets->collection('posts')->all()
            ->where('slug', $slug)
            ->first();

        if ($post === null) {
            abort(404);
        }

        return view('post')
            ->with('post', $post);
    }
}
