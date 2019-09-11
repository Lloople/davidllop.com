<?php

namespace App\Models;

use GitDown\Facades\GitDown;
use Spatie\Sheets\Sheet;
use Spatie\Sheets\Sheets;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Support\Htmlable;

class Post extends Sheet implements Htmlable
{

    public function getContent(): string
    {
        return GitDown::parseAndCache(html_entity_decode($this->contents));
    }

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
            ->map(static function (self $post) {
                return [
                    'id' => route('post', [$post->slug]),
                    'title' => $post->title,
                    'updated' => $post->date,
                    'summary' => $post->summary,
                    'content' => $post->body,
                    'link' => route('post', [$post->slug]),
                    'author' => config('info.name'),
                ];
            });
    }
}
