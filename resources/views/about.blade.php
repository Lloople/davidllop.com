@extends('layouts.master')

@section('meta')
    <title>About - {{ config('info.name') }}</title>
    <meta name="description" content="{{ config('info.description.who') }}">

    <meta property="og:url" content="{{route('about')}}">

    <meta property="og:title" content="{{ config('info.name') }}">
    <meta property="og:image" content="{{ asset('media/me.jpg') }}">
    <meta property="og:description" content="{{ config('info.description.who') }}">
    <meta property="og:site_name" content="{{ config('info.name') }}">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="{{ config('info.name') }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ config('info.social.twitter.username') }}">
    <meta name="twitter:creator" content="{{ config('info.social.twitter.username') }}">
    <meta name="twitter:url" content="{{ route('about') }}">
    <meta name="twitter:title" content="{{ config('info.name') }}">
    <meta name="twitter:description" content="{{ config('info.description.who') }}">
    <meta name="twitter:image" content="{{ asset('media/me.jpg') }}">
@endsection

@section('content')
    @include('_partials.nav')

    <div class="flex h-full w-full about flex-col">
        <div class="max-w-xl mx-auto | px-8 xl:px-24 py-12 xl:py-12">
            <img src="{{ url('media/me.jpg') }}" class="rounded-b-full mx-auto text-center xl:float-right p-8 clearfix flex" width="200">
    
            <span class="about-me-icon">👋</span>
            <p><strong class="text-xl">Hi! </strong> I'm a backend developer from <strong>Girona, Catalonia</strong>.</p>
    
            <br>
            <span class="about-me-icon">💻</span>
            <p>I'm working at <a href="https://gnahs.com/en">GNA Hotel Solutions</a> to provide our clients the best backend code I can. I'm a developer for {{ Illuminate\Support\Carbon::now()->diffInYears(Illuminate\Support\Carbon::parse('2013-10-04')) }} years now. I started to learn with ASP.NET and Django, but I felt in love with Laravel at the first line of code and never looked back.</p>
    
            <br>
            <span class="about-me-icon">🎓</span>
            <p>I'm constantly learning new stuff about programming styles and patterns. Mostly focused on the PHP world, but I'm doing some steps into the frontend too. I bought a few courses from <a href="https://twitter.com/adamwathan">Adam Wathan</a> and <a href="https://twitter.com/wesbos">Wes Bos</a> in the last year. Finally I bought a lifetime <a href="https://laracasts.com">Laracasts</a> subscription the last december and can't be happier with all the content it has.</p>
    
            <br>
            <span class="about-me-icon">❤️</span>
            <p>I enjoy building web apps with Laravel and Vue.js. I used to develop API's at my previous job and totally loved it, but now I'm more into console commands and backends too.</p>
    
            <br>
            <span class="about-me-icon">🌐</span>
            <p>I'm starting contributing to the Open Source Community. The code of this blog is my first contribution, followed by a few small packages focused to a Laravel application.</p>
    
            <br>
            <span class="about-me-icon">📺</span>
            <p>I'm following <strong>Game of Thrones</strong> (like everyone else), but also <strong>The Man in The High Castle</strong>, <strong>Startup</strong> and <strong>Electric Dreams</strong> from Prime Video.</p>
    
            <br>
            <span class="about-me-icon">📚</span>
            <p>I read <strong>Artemis</strong> and <strong>The Martian</strong> by <a href="https://twitter.com/andyweirauthor">Andy Weir</a> which I consider a masterpiece.</p>
            <p>I've also read <strong>Game of Thrones</strong> and all the stories about <strong>Sherlock Holmes</strong> (but I can't remember the half of them, time to re-read 😉)</p>
            <p>I'm planning to read <strong>The Man In The High Castle</strong>, since I enjoyed the TV show a lot. I'm a fan of <strong>The Name of The Wind</strong> by Patrick Rothfuss I read <strong>Harry Potter</strong> books a tons of times and enjoyed  <strong>Tales from Earthsea</strong> a lot.</p>
    
            <br>
            <span class="about-me-icon">🕒</span>
            <p>I'm still searching a project to try <a href="https://laravel.com/docs/5.5/horizon">Laravel Horizon</a> but no luck for me 😅</p>
            
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .about-me-icon {
            margin: 0 auto;
            font-size: 40px;
            padding-right: 10px;
        }
    </style>
@endsection