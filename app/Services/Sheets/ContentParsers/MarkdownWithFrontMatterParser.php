<?php

namespace App\Services\Sheets\ContentParsers;

use App\Services\Markdown\Renderer\BlockQuoteRenderer;
use App\Services\Markdown\Renderer\HeadingRenderer;
use App\Services\Markdown\Renderer\LinkRenderer;
use App\Services\Markdown\Renderer\ParagraphRenderer;
use App\Services\Sheets\Renderer\ImageRenderer;
use League\CommonMark\Block\Element\BlockQuote;
use League\CommonMark\Block\Element\Heading;
use League\CommonMark\Block\Element\Paragraph;
use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;
use League\CommonMark\Inline\Element\Image;
use Spatie\Sheets\ContentParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class MarkdownWithFrontMatterParser implements ContentParser
{
    /** @var League\CommonMark\DocParser */
    protected $parser;

    /** @var League\CommonMark\HtmlRenderer */
    protected $renderer;

    public function __construct()
    {
        $environment = Environment::createCommonMarkEnvironment();

        $environment->addInlineRenderer(Link::class, new LinkRenderer());
        $environment->addInlineRenderer(Image::class, new ImageRenderer());
        $environment->addBlockRenderer(Paragraph::class, new ParagraphRenderer());
        $environment->addBlockRenderer(Heading::class, new HeadingRenderer());
        $environment->addBlockRenderer(BlockQuote::class, new BlockQuoteRenderer());

        $this->parser = new DocParser($environment);
        $this->renderer = new HtmlRenderer($environment);
    }

    public function parse(string $contents): array
    {
        $document = YamlFrontMatter::parse($contents);

        $body = $this->parser->parse($document->body());
        $html = $this->renderer->renderBlock($body);
        $html = preg_replace('/<p class="mb-8">(<figure class="mb-8 text-center">.*<\/figure>)<\/p>/', '$1', $html);

        return array_merge(
            $document->matter(),
            ['contents' => $html]
        );
    }
}
