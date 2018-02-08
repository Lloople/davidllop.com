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

    <link rel="me" href="https://dieterstinglhamber.me" type="text/html">
    <link rel="me" href="mailto:dieter.stinglhamber@gmail.com">

    <meta name="robots" content="index,follow,noodp">
    <meta name="googlebot" content="index,follow">

    <meta name="google" content="nositelinkssearchbox">
    <meta name="google" content="notranslate">

    <meta name="rating" content="General">
    <meta name="referrer" content="no-referrer">

    @if (app()->env === 'production')
        <base href="https://dieterstinglhamber.me">
        <link rel="index" href="https://dieterstinglhamber.me">
    @endif

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
    @include('layouts._partials.navigation')
    @yield('content')
</body>
</html>
