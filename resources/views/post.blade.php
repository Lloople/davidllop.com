@extends('layouts.master')

@section('meta')
    <title>{{ $post->title }} - {{ config('info.name') }}</title>
    <meta name="description" content="{{ $post->summary }}">

    <meta property="og:url" content="{{ route('post', [$post->slug]) }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:image" content="{{ asset('media/me.jpg') }}">
    <meta property="og:description" content="{{ $post->summary }}">
    <meta property="og:site_name" content="{{ config('info.name') }}">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="{{ config('info.name') }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ config('info.social.twitter.username') }}">
    <meta name="twitter:creator" content="{{ config('info.social.twitter.username') }}">
    <meta name="twitter:url" content="{{ route('post', [$post->slug]) }}">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ $post->summary }}">
    <meta name="twitter:image" content="{{ asset('media/me.jpg') }}">

@endsection

@section('content')
    <span class="text-green shadow-green font-semibold font-amiga | block mb-2">
            <time>{{ $post->date->format('M d, Y') }}</time>
        </span>

    <h1 class="article-title text-3xl mb-12">{{ $post->title }}</h1>

    <div class="markdown-body">
    {!! $post->getContent() !!}
    </div>

    @if (count($otherPosts) > 1)
        <p>You may also like:</p>
        <ul class="mb-12">
            @foreach ($otherPosts as $otherPost)
                <li>
                    <a href="{{ route('post', $otherPost->slug) }}">{{ $otherPost->title }}</a>
                </li>
            @endforeach
        </ul>
    @elseif (count($otherPosts) == 1)
        <p class="mb-12">You may also like:
            <a href="{{ route('post', $otherPosts->first()->slug) }}">
                {{ $otherPosts->first()->title }}
            </a>
        </p>
    @endif

    <ul class="flex justify-around | mb-24 | list-reset">
        <li class="px-1">
            @if ($previousPost)
                <a href="{{ route('post', $previousPost->slug) }}"
                   class="shadow-green-sm text-green no-underline font-dos">
                    << {{ $previousPost->title }}
                </a>
            @endif
        </li>

        <li class="px-1 text-right">
            @if ($nextPost)
                <a href="{{ route('post', $nextPost->slug) }}"
                   class="shadow-green-sm text-green no-underline text-right font-dos">
                    {{ $nextPost->title }} >>
                </a>
            @endif
        </li>
    </ul>
@endsection

@section('afterContent')
    <div class="mb-24 md:mb-6 mx-2 xl:mx-24">
        <p class=" font-mono">
            Found a typo?
            <a
                    href="https://github.com/Lloople/davidllop.com/blob/master/posts/{{ $post->date->format('Y-m-d') }}.{{ $post->slug }}.md">
                Edit this post</a>.
            <br>
            Special thanks to <a href="https://dieterstinglhamber.me">Dieter</a> for
            the amazing code of this blog.</p>
    </div>
    @include('_partials.sorcerers')
@endsection