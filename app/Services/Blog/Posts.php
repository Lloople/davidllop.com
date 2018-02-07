<?php

namespace App\Services\Blog;

use Illuminate\Contracts\Filesystem\Factory as Filesystem;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use League\CommonMark\CommonMarkConverter;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Posts
{
    /** @var Filesystem */
    private $disk;

    public function __construct(Filesystem $filesystem)
    {
        $this->disk = $filesystem->disk('posts');
    }

    public function all(): Collection
    {
        return Cache::rememberForever('posts.all', function () {
            return $this->getAllPosts();
        });
    }

    public function find($slug)
    {
        return $this->all()
            ->firstWhere('slug', '=', $slug);
    }

    private function getAllPosts(): Collection
    {
        return collect($this->disk->files(''))
            ->filter(function ($file) {
                return ends_with($file, '.md');
            })
            ->map(function ($file) {
                [$date, $slug, $extenstion] = explode('.', $file, 3);
                $object = YamlFrontMatter::parse($this->disk->get($file));

                return (object) [
                    'slug' => $slug,
                    'title' => $object->title,
                    'date' => Carbon::createFromFormat('Y-m-d', $date),
                    'summary' => $object->summary,
                    'content' => (new CommonMarkConverter())->convertToHtml($object->body()),
                ];
            })
            ->sortByDesc('date');
    }
}
