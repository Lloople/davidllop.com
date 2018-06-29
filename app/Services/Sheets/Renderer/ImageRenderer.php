<?php

namespace App\Services\Sheets\Renderer;

use League\CommonMark\ElementRendererInterface;
use League\CommonMark\HtmlElement;
use League\CommonMark\Inline\Element\AbstractInline;
use League\CommonMark\Inline\Element\Image;
use League\CommonMark\Inline\Renderer\InlineRendererInterface;
use League\CommonMark\Util\Xml;
use Spatie\MediaLibrary\Models\Media;

class ImageRenderer implements InlineRendererInterface
{

    public function render(AbstractInline $inline, ElementRendererInterface $renderer): HtmlElement
    {
        if (! ($inline instanceof Image)) {
            throw new \InvalidArgumentException('Incompatible inline type: ' . get_class($inline));
        }

        $attrs = [];
        foreach ($inline->getData('attributes', []) as $key => $value) {
            $attrs[$key] = Xml::escape($value, true);
        }

        $attrs['src'] = Xml::escape($inline->getUrl(), true);

        $alt = $renderer->renderInlines($inline->children());
        $alt = preg_replace('/\<[^>]*alt="([^"]*)"[^>]*\>/', '$1', $alt);
        $attrs['alt'] = preg_replace('/\<[^>]*\>/', '', $alt);

        if (isset($inline->data['title'])) {
            $attrs['title'] = Xml::escape($inline->data['title'], true);
        }

        $img = new HtmlElement('img', $attrs, '', true);

        return new HtmlElement('figure', ['class' => 'mb-8 text-center'], $img);
    }
}
