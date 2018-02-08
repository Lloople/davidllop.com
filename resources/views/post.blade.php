@extends('layouts.master')

@section('meta')
    <meta name="description" content="{{ $post->summary }}">

    @if (app()->env === 'production')
        <meta
            http-equiv="Content-Security-Policy"
            content="
                upgrade-insecure-requests;
                default-src 'none';
                style-src 'self' https://fonts.googleapis.com;
                font-src https://fonts.gstatic.com data:;
                script-src 'self' 'sha256-AYNJOvmbj6Gny6hzhcy5B7TuB6jucnb9unR858g9M9U=' https://www.googletagmanager.com https://www.google-analytics.com;
                img-src 'self' https://www.google-analytics.com;"
        >
    @endif

    <meta property="og:url" content="{{ route('post', [$post->slug]) }}">
    <meta property="og:type" content="website">
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
    <article class="container mx-auto px-4 py-8 text-2xl font-serif">
        <header class="block my-8">
            <h1 class="text-5xl block font-bold text-black mb-0">{{ $post->title }}</h1>
            <time
                class="font-bold font-sans mb-8 block text-grey-darker"
                datetime="{{ $post->date }}"
            >
                {{ $post->date->toFormattedDateString() }}
            </time>

            <div>
                {!! $post->summary !!}
            </div>
        </header>

        {!! $post->content !!}
    </article>

    <script src="{{ mix('js/app.js') }}"></script>
@endsection
