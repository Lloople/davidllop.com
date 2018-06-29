<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="me" href="{{ url('') }}" type="text/html">
        <link rel="me" href="mailto:{{ config('info.email') }}">

        <meta name="robots" content="index,follow,noodp">
        <meta name="googlebot" content="index,follow">

        <meta name="google" content="notranslate">

        <meta name="rating" content="General">
        <meta name="referrer" content="no-referrer">

        @if (app()->environment('production'))
            <base href="{{ url('')  }}">
            <link rel="index" href="{{ url('') }}">

            @include('feed::links')
        
            @if(config('info.google_analytics') !== '')
            <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('info.google_analytics') }}"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());

                    gtag('config', '{{ config('info.google_analytics') }}');
                </script>
            @endif
        @endif

        @yield('meta')

        <link rel="stylesheet" href="{{ mix('css/font.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/hljs.css') }}">
        
        @yield('styles')

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-serif">
        @yield('content')
    </body>
</html>
