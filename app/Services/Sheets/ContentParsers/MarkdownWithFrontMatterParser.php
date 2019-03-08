<?php

namespace App\Services\Sheets\ContentParsers;

use Spatie\Sheets\ContentParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class MarkdownWithFrontMatterParser implements ContentParser
{
    public function parse(string $contents): array
    {
        $document = YamlFrontMatter::parse($contents);

        return array_merge(
            $document->matter(),
            ['contents' => $document->body()]
        );
    }
}
