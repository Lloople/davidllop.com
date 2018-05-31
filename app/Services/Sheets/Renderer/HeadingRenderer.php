<?php

namespace App\Services\Markdown\Renderer;

use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Element\Heading;
use League\CommonMark\Block\Renderer\BlockRendererInterface;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\HtmlElement;
use League\CommonMark\Util\Xml;

class HeadingRenderer implements BlockRendererInterface
{
    public function render(AbstractBlock $block, ElementRendererInterface $htmlRenderer, $inTightList = false)
    {
        if (!($block instanceof Heading)) {
            throw new \InvalidArgumentException('Incompatible block type: ' . get_class($block));
        }

        $tag = 'h' . ($block->getLevel() + 1);

        $titleFontSize = 5 - $block->getLevel();
        $class = "article-title | relative | text-blue-dark text-{$titleFontSize}xl font-bold | mb-6 pt-16";

        $attrs = [
            'class' => $class,
        ];

        foreach ($block->getData('attributes', []) as $key => $value) {
            $attrs[$key] = Xml::escape($value, true);
        }

        return new HtmlElement($tag, $attrs, $htmlRenderer->renderInlines($block->children()));
    }
}
