@extends('layouts.master')

@section('meta')
    <title>About - Dieter Stinglhamber</title>
    <meta name="description" content="I'm a {{ $age }} years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.">

    <meta property="og:url" content="https://dieterstinglhamber.me/about">

    <meta property="og:title" content="Dieter Stinglhamber">
    <meta property="og:image" content="{{ asset('media/me.jpg') }}">
    <meta property="og:description" content="I'm a {{ $age }} years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.">
    <meta property="og:site_name" content="Dieter Stinglhamber">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="Dieter Stinglhamber">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@elhebert">
    <meta name="twitter:creator" content="@elhebert">
    <meta name="twitter:url" content="https://dieterstinglhamber.me/about">
    <meta name="twitter:title" content="Dieter Stinglhamber">
    <meta name="twitter:description" content="I'm a {{ $age }} years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.">
    <meta name="twitter:image" content="{{ asset('media/me.jpg') }}">
@endsection

@section('content')
    @include('_partials.nav')

    <div class="flex h-full w-full | bg-blue-light">
        <div class="max-w-xl mx-auto | px-8 xl:px-24 py-12 xl:py-12">
            @include('_partials.sidebar')

            <h3 class="article-title | relative | text-blue-dark text-2xl xl:text-4xl font-bold | mb-6">
                Education
            </h3>

            <p class="text-blue text-xl md:text-2xl | mb-8">
                I have a <strong>Bachelor Degree in System and network administration</strong> and a <strong>Bachelor Degree in Computer Engineering</strong>.
            </p>

            <p class="text-blue text-xl md:text-2xl | mb-24">
                The former was achieve in a Belgian university in 2015, where the later was the result of a year in <strong>Ireland (in Athlone)</strong> with the Erasmus program.
            </p>

            <h3 class="article-title | relative | text-blue-dark text-2xl xl:text-4xl font-bold | mb-6">
                Experience
            </h3>

            <p class="text-blue text-xl md:text-2xl | mb-8">
                My first job was as a <strong>Cloud Backend Engineer</strong>, which is just a fancy title to hide the fact that I was a Fullstack Developer. I worked for a telecom company that specialized in Unified Communication.
            </p>

            <p class="text-blue text-xl md:text-2xl | mb-8">
                I learned <strong>AngularJS</strong> (1.4) and worked on their <strong>legacy PHP</strong> (5.3 with custom framework).
            </p>

            <p class="text-blue text-xl md:text-2xl | mb-8">
                After a year I quit to join a small startup as a <strong>Web Developer</strong>. I worked on their SaaS solution, a task management tool. We build it using <strong>Laravel</strong> and <strong>VueJS</strong>. When my contract ended, I decided not to continue working their due to difference of opinion with the CEO.
            </p>

            <p class="text-blue text-xl md:text-2xl | mb-8">
                I finally join Altavia Act* as a <strong>Back-end Developer</strong>. I've been working there for over a year now (I joined in March 2017). In addition to being the only back-end developer, I'm also handling the Ops side of our work (deploiments and server maintenance) and I am Code Owner for all new projects.
            </p>

            <p class="text-blue text-xl md:text-2xl | mb-24">
                My responsabilities are mainly to deliver clean, optimized, tested and functionnal <strong>Laravel</strong> based products. As Code Owner I review all commits and ensure that the code we deliver is matching our standards.
            </p>

            <h3 class="article-title | relative | text-blue-dark text-2xl xl:text-4xl font-bold | mb-6">
                Outside of work
            </h3>

            <p class="text-blue text-xl md:text-2xl | mb-8">
                In my personal time I like to read (mostly Heroic Fantasy books) and play video games. I also enjoy table tob RPGs (both as player and dungeon master).
            </p>

            <p class="text-blue text-xl md:text-2xl | mb-24">
                In 2017 I challenged myself to run 365km during the whole year. I started seriously to run around July, and in 4 month I achieved that goal. In October 2017 I ran the <em>Brussels Half-Marathon</em> and the <em>20km des Ardennes</em> and I'm currently training (lazely) for the <em>2018 Brussels Marathon</em>.
            </p>
        </div>
    </div>
@endsection
