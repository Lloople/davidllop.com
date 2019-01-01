@extends('layouts.master')

@section('meta')
    <title>About - {{ config('info.name') }}</title>
    <meta name="description" content="{{ config('info.description') }}">

    <meta property="og:url" content="{{route('about')}}">

    <meta property="og:title" content="{{ config('info.name') }}">
    <meta property="og:image" content="{{ asset('media/me.png') }}">
    <meta property="og:description" content="{{ config('info.description') }}">
    <meta property="og:site_name" content="{{ config('info.name') }}">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="{{ config('info.name') }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ config('info.social.twitter.username') }}">
    <meta name="twitter:creator" content="{{ config('info.social.twitter.username') }}">
    <meta name="twitter:url" content="{{ route('about') }}">
    <meta name="twitter:title" content="{{ config('info.name') }}">
    <meta name="twitter:description" content="{{ config('info.description') }}">
    <meta name="twitter:image" content="{{ asset('media/me.png') }}">
@endsection

@section('content')
    <div class="flex h-full w-full flex-col font-dos">
        <div class="max-w-xl mx-auto | px-8 xl:px-24 pb-24 xl:py-6">
            <p><strong class="text-4xl">Hi!</strong> I'm a backend developer from <a href="https://www.google.com/maps/place/Girona/@41.7393927,2.4370537,9.76z/data=!4m5!3m4!1s0x12bae72798c8fdab:0xaf3845b6a5296a6f!8m2!3d41.9794005!4d2.8214264">Girona, Catalonia</a>.
            </p>

            <h2 class="retro-title-4">C:\Work></h2>
            <p>I'm working at <a href="https://gnahs.com/en">GNA Hotel Solutions</a> to provide our clients the best
                backend code I can. I'm a developer
                for {{ Illuminate\Support\Carbon::now()->diffInYears(Illuminate\Support\Carbon::parse('2013-10-04')) }}
                years now. I started to learn with ASP.NET and Django, but I felt in love with Laravel at the first
                line of code and never looked back.</p>

            <h2 class="retro-title-4">C:\Studying></h2>
            <p>I'm constantly learning new stuff about programming styles and patterns. Mostly focused on the PHP
                world, but I'm doing some steps into the frontend too. I bought a few courses from <a
                        href="https://twitter.com/adamwathan">Adam Wathan</a> and <a
                        href="https://twitter.com/wesbos">Wes Bos</a> in the last year. Finally I bought a lifetime
                <a href="https://laracasts.com">Laracasts</a> subscription the last december and can't be happier
                with all the content it has.</p>

            <h2 class="retro-title-4">C:\On the side></h2>
            <p>I enjoy building web apps with Laravel and Vue.js. I used to develop API's at my previous job and
                totally loved it, but now I'm more into console commands and backends too.</p>

            <h2 class="retro-title-4">C:\Open Source></h2>
            <p>I'm starting contributing to the Open Source Community. I write a blog management system as my first
                contribution followed by a few small packages focused to a Laravel application. I'm also proud of a
                very small contributions into the Laravel framework itself.</p>

            <h2 class="retro-title-4">C:\Chatbots></h2>
            <p>I discovered the world of chatbots a while ago and I'm building them with <a
                        href="https://botman.io">botman.io</a>. I already have a <a
                        href="https://github.com/Lloople?utf8=✓&tab=repositories&q=bot-&type=&language=php">few
                    projects on my GitHub</a>. I think it's a topic with a lot of potential for both private and
                commercial use. </p>

            <h2 class="retro-title-4">C:\Watching></h2>
            <p>I'm following <strong>Game of Thrones</strong> (like everyone else), but also <strong>The Man in The
                    High Castle</strong>, <strong>Startup</strong> and <strong>Electric Dreams</strong> from Prime
                Video.</p>
            <p>Recently I've discovered Lost. Everybody tells me that the ending is one of the worst ever made but the rest of
            the show was great. Even with that I decided to give it a shot.</p>
            <h2 class="retro-title-4">C:\Books></h2>
            <p>I read <strong>Artemis</strong> and <strong>The Martian</strong> by <a
                        href="https://twitter.com/andyweirauthor">Andy Weir</a> which I consider a masterpiece.</p>
            <p>I've also read <strong>Song of Ice and Fire</strong> and all the stories about <strong>Sherlock
                    Holmes</strong></p>
            <p>I'm planning to read <strong>The Man In The High Castle</strong>, since I enjoyed the TV show a lot.
                I'm a fan of <strong>The Name of The Wind</strong> by Patrick Rothfuss. I've also read <strong>Harry
                    Potter</strong> books a tons of times and enjoyed <strong>Tales from Earthsea</strong> a lot.
            </p>
            <p>I'm starting to read the <strong>Dune</strong> books.</p>
            <p>I'm finishing Armada, wrote by Ernest Cline, the guy who wrote Ready Player One.</p>

            <h2 class="retro-title-4">C:\Fitness></h2>
            <p>I'm subscribed to a gym near work since October 2018. I'm going every single day in the morning
                (unless I'm traveling or something big happened). That's
                about {{ $gymDays }} days!</p>
            <p>I'm starting to feel great with myself and it's helping me with my back pain and mental health. In my
                opinion I think it's very important for all of us to do some exercise. Specially in our profession
                in which we spend almost 12 hours a day sitting down.</p>

            <h2 class="retro-title-4">C:\Waiting List></h2>
            <p>New tools are released quicker than I find projects to try them on. This is my current list of
                things I want to try but can't find the time / project for it 😅:</p>
            <ul class="mt-16">
                <li><a href="https://laravel.com/docs/5.7/horizon">Laravel Horizon</a></li>
                <li><a href="https://nova.laravel.com">Laravel Nova</a></li>
                <li><a href="https://larecipe.binarytorch.com.my/docs/1.2/overview">LaRecipe</a></li>
                <li><a href="https://vuepress.vuejs.org">VuePress</a></li>
                <li><a href="https://sailsjs.com">Sails Framework</a></li>
                <li>
                    <del><a href="https://github.com/laravel/telescope">Laravel Telescope</a></del>
                </li>
            </ul>
        </div>

        @include('_partials.sorcerers')
    </div>
@endsection
