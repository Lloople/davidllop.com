<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @if (app()->env === 'production')
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('analytics.id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ config('analytics.id') }}');
    </script>
    @endif

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')

    <link rel="preconnect" href="https://fonts.gstatic.com/">

    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link
        href="{{ mix('css/app.css') }}"
        rel="stylesheet"
    >

    <title>Dieter Stinglhamber</title>
</head>
<body class="font-sans">
    <div class="absolute pin-t pin-r m-2 flex flex-items-center">
        @if (request()->route()->named('post'))
        <span class="border-r border-grey-darker pr-4 mr-4">
            <a href="{{ route('home') }}" class="no-underline hover:underline align-super text-black font-bold text-xl">
                Home
            </a>
        </span>
        @endif
        <a href="https://twitter.com/elhebert" class="text-blue-light no-underline mr-1 hover:text-blue">
            @svg('twitter')
        </a>
        <a href="https://github.com/Elhebert" class="text-grey-darker no-underline ml-1 hover:text-black">
            @svg('github')
        </a>
    </div>
    @yield('content')
</body>
</html>
