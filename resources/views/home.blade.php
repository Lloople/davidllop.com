@extends('layouts.master')

@section('meta')
    <title>{{ config('info.name') }}</title>
    <meta name="description" content="{{ config('info.description') }}">
    
    <meta property="og:url" content="{{ config('info.url') }}">
    
    <meta property="og:title" content="{{ config('info.name') }}">
    <meta property="og:image" content="{{ asset('media/me.jpg') }}">
    <meta property="og:description" content="{{ config('info.description') }}">
    <meta property="og:site_name" content="{{ config('info.name') }}">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="{{ config('info.name') }}">
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ config('info.social.twitter.username') }}">
    <meta name="twitter:creator" content="{{ config('info.social.twitter.username') }}">
    <meta name="twitter:url" content="{{ config('info.url') }}">
    <meta name="twitter:title" content="{{ config('info.name') }}">
    <meta name="twitter:description" content="{{ config('info.description') }}">
    <meta name="twitter:image" content="{{ asset('media/me.jpg') }}">
@endsection

@section('content')
    @include('_partials.nav')
    
    <div class="xl:flex xl:flex-row xl:h-screen w-full bg-orange-light">
        
        @include('_partials.sidebar')
        
        <main class="xl:relative | w-full xl:w-3/4 xl:px-24 py-12 h-full | xl:overflow-auto | bg-white">
            
            <div class="flex-grow | flex flex-col justify-center">
                <div class="my-6 mx-2 xl:mx-24">
                    @foreach($posts as $post)
                        {{ $post }}
                    @endforeach
                </div>
            </div>
            
            @include('_partials.pagination', ['elements' => $posts])
            
        </main>
    </div>
@endsection
