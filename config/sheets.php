<?php

return [
    'default_collection' => 'posts',

    'collections' => [

        'posts' => [
            'disk' => 'posts',
            'cache' => false,
            'sheet_class' => App\Models\Post::class,
            'path_parser' => Spatie\Sheets\PathParsers\SlugWithDateParser::class,
            'content_parser' => App\Services\Sheets\ContentParsers\MarkdownWithFrontMatterParser::class,
            'extension' => 'md',
        ],
    ],
];
