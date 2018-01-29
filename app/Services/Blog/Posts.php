<?php

namespace App\Services\Blog;

use Illuminate\Contracts\Filesystem\Factory as Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Posts
{
    /** @var Filesystem */
    private $disk;

    public function __construct(Filesystem $filesystem)
    {
        $this->disk = $filesystem->disk('posts');
    }

    public function all()
    {
        return Cache::rememberForever('posts.all', function () {
            return $this->getAllPosts();
        });
    }

    private function getAllPosts(): Collection
    {
        return collect($this->disk->files(''))
            ->filter(function ($file) {
                return ends_with($file, '.md');
            })
            ->map(function ($file) {
                [$slug, $extenstion] = explode('.', $file, 2);
                $object = YamlFrontMatter::parse($this->disk->get($file));

                return (object) [
                    'slug' => $slug,
                    'title' => $object->title,
                    'summary' => $object->summary ?? substr($object->body(), 0, 125),
                    'content' => $object->body(),
                ];
            });
    }
}
