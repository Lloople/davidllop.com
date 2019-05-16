<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Spatie\Sheets\Sheets;

class PostsController
{

    /** @var \Illuminate\Support\Collection */
    protected $posts;

    public function __construct(Sheets $sheets)
    {
        $this->posts = $sheets->all()->sortByDesc('date');
    }

    public function __invoke(string $slug): View
    {
        $postKey = $this->getPostKey($slug);

        $post = $this->posts->get($postKey);

        $data = [
            'post' => $post,
            'previousPost' => $this->posts->get($postKey + 1),
            'nextPost' => $this->posts->get($postKey - 1),
            'otherPosts' => $this->getOtherPosts($post),
        ];

        return view('post', $data);
    }

    private function getPostKey(string $slug)
    {
        $postKey = $this->posts->search(static function ($post) use ($slug) {
            return $post->slug === $slug;
        });

        abort_if($postKey === false, 404);

        return $postKey;
    }

    private function getOtherPosts($post)
    {
        return isset($post->category)
            ? $this->posts->filter(static function ($otherPost) use ($post) {
                return $otherPost->published
                    && isset($otherPost->category)
                    && $otherPost->category === $post->category
                    && $otherPost !== $post;
            })
            : [];
    }
}
