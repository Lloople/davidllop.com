<?php

namespace App\Services\Sheets\Renderer;

use League\CommonMark\Util\Xml;
use League\CommonMark\HtmlElement;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Element\ThematicBreak;
use League\CommonMark\Block\Renderer\BlockRendererInterface;

class ThematicBreakRenderer implements BlockRendererInterface
{
    public function render(AbstractBlock $block, ElementRendererInterface $htmlRenderer, $inTightList = false)
    {
        if (!($block instanceof ThematicBreak)) {
            throw new \InvalidArgumentException('Incompatible block type: ' . get_class($block));
        }

        $attrs = [
            'class' => 'bg-blue-light w-1/4 mx-auto my-16 h-2px',
        ];

        foreach ($block->getData('attributes', []) as $key => $value) {
            $attrs[$key] = Xml::escape($value, true);
        }

        return new HtmlElement('hr', $attrs, '', true);
    }
}
