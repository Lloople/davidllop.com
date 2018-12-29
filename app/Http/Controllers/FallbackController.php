<?php

namespace App\Http\Controllers;

use Spatie\Sheets\Sheets;

class FallbackController
{
    public function __invoke(string $slug, Sheets $sheets)
    {
        if ($this->isPostsPreviousUrl($slug, $sheets)) {
            return redirect("posts/{$slug}", 301);
        }

        abort(404);
    }

    private function isPostsPreviousUrl(string $slug, Sheets $sheets)
    {
        return $sheets->all()->first(function ($post) use ($slug) {
            return $post->slug === $slug;
        }) !== null;
    }
}
