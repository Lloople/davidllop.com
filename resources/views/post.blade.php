@extends('layouts.master')

@section('meta')
    <meta name="description" content="{{ $post->summary }}">

    <meta property="og:url" content="{{ route('post', [$post->slug]) }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:image" content="{{ asset('media/me.jpg') }}">
    <meta property="og:description" content="{{ $post->summary }}">
    <meta property="og:site_name" content="Dieter Stinglhamber">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="Dieter Stinglhamber">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elhebert">
    <meta name="twitter:creator" content="@elhebert">
    <meta name="twitter:url" content="{{ route('post', [$post->slug]) }}">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ $post->summary }}">
    <meta name="twitter:image" content="{{ asset('media/me.jpg') }}">
@endsection

@section('content')
    @include('_partials.nav')

    <div class="flex flex-col xl:flex-row h-screen w-full| bg-blue-light">
        <div class="w-full xl:w-1/4 px-12 py-12 | bg-blue-light">
            @include('_partials.sidebar')
        </div>

        <main class="xl:relative | w-full xl:w-3/4 xl:px-24 py-12 h-full | xl:overflow-auto | bg-white">
            <div class="my-6 mx-24 | text-blue text-2xl">
                <span class="text-blue-dark text-lg font-semibold | block">
                    Written on <time>{{ $post->date->format('M d, Y') }}</time>
                </span>
                <h3 class="article-title | relative | text-blue-dark text-4xl font-bold | mb-12">
                    {{ $post->title }}
                </h3>
                {!! $post->contents !!}
            </div>
        </main>
    </div>
@endsection
