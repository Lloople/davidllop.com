<?php

namespace App\Models;

use Spatie\Sheets\Sheet;
use Spatie\Sheets\Sheets;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Support\Htmlable;

class Post extends Sheet implements Htmlable
{
    public function toHtml(): string
    {
        return Cache::rememberForever("posts:{$this->slug}:html", function () {
            return view('_partials.post')
                ->with('post', $this)
                ->render();
        });
    }

    public function feed(Sheets $sheets): Collection
    {
        return $sheets
            ->all()
            ->sortByDesc('date')
            ->map(function (self $post) {
                return [
                    'id' => route('post', [$post->slug]),
                    'title' => $post->title,
                    'updated' => $post->date,
                    'summary' => $post->summary,
                    'link' => route('post', [$post->slug]),
                    'author' => config('info.name'),
                ];
            });
    }
}
