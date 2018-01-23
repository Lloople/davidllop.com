<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Dieter Stinglhamber</title>
</head>
<body class="font-sans">
    @yield('content')
</body>
</html>
