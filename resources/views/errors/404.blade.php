@extends('layouts.master')

@section('content')

    <p class="retro-title-4 w-3/4 mx-auto">File not found. Choose one of the following</p>
    <div class="flex flex-col w-3/4 mx-auto">
        <div class="window-border">
            <div class="window">
                <div class="bg-window-bar w-full h-6 cursor-default p-0 flex flex-row center-content justify-center">
                    <span class="button w-6 h-6 cursor-pointer bg-window-button text-center text-black">&#8212;</span>
                    <span class="flex-1 text-center font-dos text-white">Pages</span>
                    <span class="button w-6 h-6 cursor-pointer bg-window-button text-black pl-1">&#9650;</span>
                    <span class="button w-6 h-6 cursor-pointer bg-window-button text-black text-xs pl-1 pt-1">&#9660;</span>
                </div>
                <div class="border-t border-black w-full font-dos p-4 content-center flex flex-row flex-wrap scrolling-auto">
                    <a class="p-2 md:p-8 no-underline flex flex-col float-left" href="{{ route('home') }}">
                        <img src="/media/icons/blog.png" class="w-16" alt="">
                        <span class="font-dos text-black mx-auto py-1">BLOG</span>
                    </a>
                    <a class="p-2 md:p-8 no-underline flex flex-col float-left" href="{{ route('about') }}">
                        <img src="/media/icons/about.png" class="w-16" alt="">
                        <span class="font-dos text-black mx-auto py-1">ABOUT</span>
                    </a>
                    <a class="p-2 md:p-8 no-underline flex flex-col float-left" href="{{ route('uses') }}">
                        <img src="/media/icons/uses.png" class="w-16" alt="">
                        <span class="font-dos text-black mx-auto py-1">USES</span>
                    </a>
                    <a class="p-2 md:p-8 no-underline flex flex-col float-left" href="{{ route('simon') }}">
                        <img src="/media/icons/cd.png" class="w-16" alt="">
                        <span class="font-dos text-black mx-auto py-1">SIMON</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('afterContent')
    <!-- Disable sorcerers in 404 page -->
@endsection