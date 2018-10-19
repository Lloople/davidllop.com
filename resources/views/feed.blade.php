<?=
/* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<feed xmlns="http://www.w3.org/2005/Atom">
    @foreach($meta as $key => $metaItem)
        
        @if($key === 'link')
            <{{ $key }} href="{{ url($metaItem) }}" rel="self"></{{ $key }}>
        @elseif($key === 'title')
            <{{ $key }} type="html"><![CDATA[{{ $metaItem }}]]></{{ $key }}>
        @else
            <{{ $key }}>{{ $metaItem }}</{{ $key }}>
        @endif
@endforeach
@foreach($items as $item)
    <entry>
        <title><![CDATA[{{ $item->title }}]]></title>
        <link rel="alternate" href="{{ url($item->link) }}" />
        <id>{{ url($item->id) }}</id>
        <author>
            <name> <![CDATA[{{ $item->author }}]]></name>
        </author>
        <summary type="html">
            <![CDATA[{!! $item->summary !!}]]>
        </summary>
        <content type="html">
            <![CDATA[{!! $item->content !!}]]>
        </content>
        <updated>{{ $item->updated->toAtomString() }}</updated>
    </entry>
    @endforeach
    </feed>
