<a href="{{ route('post', [$post->slug]) }}" class="block no-underline text-black">
    <div class="card animated my-4">
        <p class="text-3xl mb-8 block font-bold text-black">
            {{ $post->title }}
        </p>
        <div class="text-xl">
            {!! $post->summary !!}
        </div>
        <p class="mt-8 text-grey-dark font-bold">
            On {{ $post->date->format('F jS Y') }}
        </p>
    </div>
</a>
