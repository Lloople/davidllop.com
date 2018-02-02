@extends('layouts.master')

@section('meta')
@endsection

@section('content')
    <article class="container mx-auto px-4 text-xl font-serif">
        <h1 class="text-5xl block font-bold text-black mb-0">{{ $post->title }}</h1>
        <time
            class="font-bold font-sans mb-8 block text-grey-darker"
            datetime="{{ $post->date }}"
        >
            {{ $post->date->toFormattedDateString() }}
        </time>

        {!! $post->content !!}
    </article>

    <script src="{{ mix('js/app.js') }}"></script>
@endsection
