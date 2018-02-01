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
        {{ Sri::html('css/app.css') }}
    >

    <title>Dieter Stinglhamber</title>
</head>
<body class="font-sans">
    @yield('content')
</body>
</html>
