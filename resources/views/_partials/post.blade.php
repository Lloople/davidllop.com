<div class="my-6">
    <span class="text-purple-light text-lg font-semibold font-dos | block">
        <time>{{ $post->date->format('M d, Y') }}</time>
    </span>
    <a href="{{ route('post', [$post->slug]) }}" class="no-underline">
        <h3 class="article-title | relative | text-pink text-xl xl:text-xl font-bold font-amiga uppercase | mb-6">
            > {{ $post->title }}
        </h3>
    </a>
    <p class="text-purple-lighter font-dos text-xl">
        {{ $post->summary }}
    </p>
</div>
