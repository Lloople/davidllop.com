<?php

namespace App\Services\Markdown\Renderer;

use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Element\Paragraph;
use League\CommonMark\Block\Renderer\BlockRendererInterface;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\HtmlElement;
use League\CommonMark\Util\Xml;

class ParagraphRenderer implements BlockRendererInterface
{
    public function render(AbstractBlock $block, ElementRendererInterface $htmlRenderer, $inTightList = false)
    {
        if (!($block instanceof Paragraph)) {
            throw new \InvalidArgumentException('Incompatible block type: ' . get_class($block));
        }

        if ($inTightList) {
            return $htmlRenderer->renderInlines($block->children());
        }

        $attrs = [
            'class' => 'mb-8',
        ];

        foreach ($block->getData('attributes', []) as $key => $value) {
            $attrs[$key] = Xml::escape($value, true);
        }

        return new HtmlElement('p', $attrs, $htmlRenderer->renderInlines($block->children()));
    }
}
