@extends('layouts.master')

@php
    $sidebarImage = '/media/me_404.png';
@endphp
@section('content')
    <div class="flex flex-col w-full content-center justify-center text-center">
            <h1 class="title-404 text-pink font-dos">404</h1>
            <h3 class="article-title text-gray font-dos">Check out this astonishing magic performance by the greatest wizard
                ever while you're lost :)</h3>
            <img class="simon-performance mx-auto" src="/media/simon-performance.gif"
                 alt="Simon doing magic inside an old computer">
    </div>
@endsection