<?php

namespace App\Services\Markdown\Renderer;

use League\CommonMark\ElementRendererInterface;
use League\CommonMark\HtmlElement;
use League\CommonMark\Inline\Element\AbstractInline;
use League\CommonMark\Inline\Element\Link;
use League\CommonMark\Inline\Renderer\InlineRendererInterface;
use League\CommonMark\Util\Configuration;
use League\CommonMark\Util\ConfigurationAwareInterface;
use League\CommonMark\Util\RegexHelper;
use League\CommonMark\Util\Xml;

class LinkRenderer implements InlineRendererInterface, ConfigurationAwareInterface
{
    /** @var Configuration */
    protected $config;

    public function render(AbstractInline $inline, ElementRendererInterface $htmlRenderer)
    {
        if (!($inline instanceof Link)) {
            throw new \InvalidArgumentException('Incompatible inline type: ' . get_class($inline));
        }

        $attrs = [
            'class' => 'text-blue-dark font-bold underline ',
        ];

        foreach ($inline->getData('attributes', []) as $key => $value) {
            $attrs[$key] = Xml::escape($value, true);
        }

        $forbidUnsafeLinks = $this->config->getConfig('safe') || !$this->config->getConfig('allow_unsafe_links');
        if (!($forbidUnsafeLinks && RegexHelper::isLinkPotentiallyUnsafe($inline->getUrl()))) {
            $attrs['href'] = Xml::escape($inline->getUrl(), true);
        }

        if (isset($inline->data['title'])) {
            $attrs['title'] = Xml::escape($inline->data['title'], true);
        }

        return new HtmlElement('a', $attrs, $htmlRenderer->renderInlines($inline->children()));
    }

    public function setConfiguration(Configuration $configuration)
    {
        $this->config = $configuration;
    }
}
