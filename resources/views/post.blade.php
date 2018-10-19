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
    @include('_partials.nav')
    
    <div class="xl:flex xl:flex-row xl:h-screen w-full| bg-blue-light">
        @include('_partials.sidebar')
        
        <main class="xl:relative | w-full xl:w-3/4 xl:px-24 py-12 h-full | xl:overflow-auto | bg-white">
            <div class="my-6 mx-2 xl:mx-24 | text-blue text-xl">
                <span class="text-blue-dark text-lg font-semibold | block">
                    Written on <time>{{ $post->date->format('M d, Y') }}</time>
                </span>
                
                <h3 class="article-title | relative | text-blue-dark text-4xl font-bold | mb-12">
                    {{ $post->title }}
                </h3>
                
                {!! $post->contents !!}
    
                <ul class="flex justify-around | mb-12 | list-reset">
                    <li class="px-1">
                        @if ($previousPost)
                            <a href="{{ route('post', [$previousPost->slug]) }}"
                               class="text-sm text-orange no-underline">
                                👈 {{ $previousPost->title }}
                            </a>
                        @endif
                    </li>
        
                    <li class="px-1 text-right">
                        @if ($nextPost)
                            <a href="{{ route('post', [$nextPost->slug]) }}"
                               class="text-sm text-orange no-underline text-right">
                                {{ $nextPost->title }} 👉
                            </a>
                        @endif
                    </li>
                </ul>
                
                <div class="text-sm | text-center">
                    <p>
                        Spotted a mistake? Noticed something to improve? Feel free to
                        <a
                                class="text-blue-dark font-bold"
                                href="https://github.com/Lloople/davidllop.com/blob/master/posts/{{ $post->date->format('Y-m-d') }}.{{ $post->slug }}.md">
                            edit this post on GitHub.
                        </a>
                    </p>
                    <br>
                    <p>
                        Special thanks 🙏 to <a class="text-blue-dark fotn-bod" href="https://dieterstinglhamber.me">Dieter Stinglhamber</a> for the amazing code of this blog
                    </p>
                </div>
            </div>
        </main>
    </div>
@endsection
