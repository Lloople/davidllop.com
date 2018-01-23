@extends('layouts.master')

@section('content')
<div class="flex w-screen h-screen relative flex-row">
    <div class="relative overflow-hidden w-1/2 flex justify-center">
        <div class="a-very-handsome-fellow flex items-end p-8 justify-center h-full w-full bg-center text-white">
        </div>
    </div>
    <div class="bg-grey-lightest relative overflow-hidden w-1/2 h-full flex-col justify-center flex p-10">
        <div class="p-8">
            <h1 class="mb-8 block text-sh text-shadow">Trust me, I'm a developer</h1>
            <p class="my-4 text-xl block text-shadow">
                I'm a 25 years old nerd, passionate by web development, rpg, fantasy books, belgian beers and computers.
            </p>
            <p class="my-4 text-xl block text-shadow">
                I write in Javascript, PHP, Python, HTML and CSS. I can talk to databases and make servers do stuff.
            </p>
        </div>
    </div>
</div>
@endsection
