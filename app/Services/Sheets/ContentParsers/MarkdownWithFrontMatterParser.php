<?php

namespace App\Services\Sheets\ContentParsers;

use League\CommonMark\DocParser;
use Spatie\Sheets\ContentParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;
use League\CommonMark\Inline\Element\Link;
use League\CommonMark\Inline\Element\Image;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use League\CommonMark\Block\Element\Heading;
use App\Services\Sheets\Renderer\LinkRenderer;
use League\CommonMark\Block\Element\Paragraph;
use App\Services\Sheets\Renderer\ImageRenderer;
use League\CommonMark\Block\Element\BlockQuote;
use App\Services\Sheets\Renderer\HeadingRenderer;
use League\CommonMark\Block\Element\ThematicBreak;
use App\Services\Sheets\Renderer\ParagraphRenderer;
use App\Services\Sheets\Renderer\BlockQuoteRenderer;
use App\Services\Sheets\Renderer\ThematicBreakRenderer;

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
        $environment->addBlockRenderer(ThematicBreak::class, new ThematicBreakRenderer());
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
