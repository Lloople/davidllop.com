<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="me" href="{{ url('') }}" type="text/html">
    <link rel="me" href="mailto:{{ config('info.email') }}">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

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
            <script async
                    src="https://www.googletagmanager.com/gtag/js?id={{ config('info.google_analytics') }}"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }

                gtag('js', new Date());

                gtag('config', '{{ config('info.google_analytics') }}');
            </script>
        @endif
    @endif

    @yield('meta')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('styles')

    <script src="{{ mix('js/app.js') }}" defer></script>

    @yield('scripts')
</head>
<body class="bg-purple-darkest text-purple-lighter text-xl">

<div credit="Image by Lorenzo Herrera on Unsplash" 
     credit-url="https://unsplash.com/@lorenzoherrera?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText"
    class="bg-image"></div>

<div class="xl:flex xl:flex-row xl:h-screen w-full bg-purple-darkest">

    <main class="xl:relative | w-full xl:px-24 pt-12 h-full | xl:overflow-auto">
        @include('_partials.nav')
        @include('_partials.social')

        <div class="mt-32 mx-2 xl:mx-24 | text-purple-lighter font-mono overflow-hidden pb-12 xl:pb-0 mb-24">

            @yield('content')
        </div>
        @hasSection('afterContent')
            @yield('afterContent')
        @else
            @include('_partials.sorcerers')
        @endif

    </main>

</div>

</body>
</html>