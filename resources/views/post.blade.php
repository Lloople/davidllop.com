@extends('layouts.master')

@section('meta')
@endsection

@section('content')
    <article class="container mx-auto px-4 py-8 text-2xl font-serif">
        <header class="block my-8">
            <h1 class="text-5xl block font-bold text-black mb-0">{{ $post->title }}</h1>
            <time
                class="font-bold font-sans mb-8 block text-grey-darker"
                datetime="{{ $post->date }}"
            >
                {{ $post->date->toFormattedDateString() }}
            </time>

            <div>
                {!! $post->summary !!}
            </div>
        </header>

        {!! $post->content !!}
    </article>

    <script src="{{ mix('js/app.js') }}"></script>
@endsection
