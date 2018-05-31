@extends('layouts.master')

@section('meta')
    <title>Dieter Stinglhamber</title>
    <meta name="description" content="I'm a {{ $age }} years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.">

    <meta property="og:url" content="https://dieterstinglhamber.me/">

    <meta property="og:title" content="Dieter Stinglhamber">
    <meta property="og:image" content="{{ asset('media/me.jpg') }}">
    <meta property="og:description" content="I'm a {{ $age }} years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.">
    <meta property="og:site_name" content="Dieter Stinglhamber">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="Dieter Stinglhamber">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elhebert">
    <meta name="twitter:creator" content="@elhebert">
    <meta name="twitter:url" content="https://dieterstinglhamber.me/">
    <meta name="twitter:title" content="Dieter Stinglhamber">
    <meta name="twitter:description" content="I'm a {{ $age }} years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.">
    <meta name="twitter:image" content="{{ asset('media/me.jpg') }}">
@endsection

@section('content')
    @include('_partials.nav')

    <div class="flex flex-col xl:flex-row h-screen w-full| bg-blue-light">
        <div class="w-full xl:w-1/2 xl:px-24 py-8 xl:py-12">
            @include('_partials.sidebar')
        </div>

        <main class="xl:relative flex flex-col justify-center | h-full w-full xl:w-1/2 px-12 xl:px-24 py-12 | bg-white">
            <div class="flex-grow | flex flex-col justify-center">
                @foreach($posts as $post)
                    {{ $post }}
                @endforeach
            </div>

            @include('_partials.pagination', ['elements' => $posts])
        </main>
    </div>
@endsection
