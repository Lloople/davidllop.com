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
    <div class="mt-6 mx-2 xl:mx-24 | text-purple-lighter font-dos overflow-hidden pb-24 xl:pb-0">
        <span class="text-purple-light font-semibold font-amiga | block mb-2">
            <time>{{ $post->date->format('M d, Y') }}</time>
        </span>

        <h3 class="article-title | relative | text-pink uppercase text-2xl font-bold font-amiga | mb-12">
            > {{ $post->title }}
        </h3>

        {!! $post->contents !!}

        @if (count($otherPosts))
            <p>You may also like:</p>
            <ul class="mb-12">
                @foreach ($otherPosts as $otherPost)
                    <li>
                        <a class="text-sm text-green no-underline"
                           href="{{ route('post', $otherPost->slug) }}">{{ $otherPost->title }}</a>
                    </li>
                @endforeach
            </ul>
        @endif

        <ul class="flex justify-around | mb-24 | list-reset">
            <li class="px-1">
                @if ($previousPost)
                    <a href="{{ route('post', $previousPost->slug) }}"
                       class="text-sm text-green no-underline">
                        << {{ $previousPost->title }}
                    </a>
                @endif
            </li>

            <li class="px-1 text-right">
                @if ($nextPost)
                    <a href="{{ route('post', $nextPost->slug) }}"
                       class="text-sm text-green no-underline text-right">
                        {{ $nextPost->title }} >>
                    </a>
                @endif
            </li>
        </ul>

        <div class="text-sm text-center mb-3">
            <p>
                Found a typo?
                <a class="text-pink font-bold"
                   href="https://github.com/Lloople/davidllop.com/blob/master/posts/{{ $post->date->format('Y-m-d') }}.{{ $post->slug }}.md">
                    Edit this post</a>.
                <br>
            Special thanks to <a class="text-pink font-bold" href="https://dieterstinglhamber.me">Dieter</a> for
                the amazing code of this blog.</p>
        </div>

    </div>
    @include('_partials.sorcerers')

@endsection