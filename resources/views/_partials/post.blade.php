<div class="mb-24">
    <span class="text-green shadow-green-sm text-lg font-semibold font-dos | block">
        <time>{{ $post->date->format('M d, Y') }}</time>
    </span>
    <a href="{{ route('post', [$post->slug]) }}" class="no-underline">
        <h3 class="article-title text-2xl mb-1">{{ $post->title }}</h3>
    </a>
    <p class="text-purple-lighter font-mono">
        {{ $post->summary }}
    </p>
</div>
