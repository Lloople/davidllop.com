<div class="my-6">
    <span class="text-blue-dark text-lg font-semibold | block">
        Written on <time>{{ $post->date->format('M d, Y') }}</time>
    </span>
    <a href="{{ route('post', [$post->slug]) }}" class="no-underline">
        <h3 class="article-title | relative | text-blue-dark text-3xl xl:text-4xl font-bold | mb-6">
            {{ $post->title }}
        </h3>
    </a>
    <p class="text-blue text-2xl">
        {{ $post->summary }}
    </p>
</div>
