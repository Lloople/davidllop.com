<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="me" href="https://dieterstinglhamber.me" type="text/html">
        <link rel="me" href="mailto:dieter.stinglhamber@gmail.com">

        <meta name="robots" content="index,follow,noodp">
        <meta name="googlebot" content="index,follow">

        <meta name="google" content="notranslate">

        <meta name="rating" content="General">
        <meta name="referrer" content="no-referrer">

        @if (app()->env === 'production')
            <base href="https://dieterstinglhamber.me">
            <link rel="index" href="https://dieterstinglhamber.me">

            @include('feed::links')
        @endif

        @yield('meta')

        <link rel="stylesheet" href="{{ mix('css/font.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/hljs.css') }}">

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-serif">
        @yield('content')
    </body>
</html>
