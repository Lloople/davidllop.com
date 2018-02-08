<div class="absolute pin-t pin-r m-2 z-10 flex flex-items-center">
    @if (request()->route()->named('post'))
    <span class="border-r border-grey-darker pr-4 mr-4">
        <a href="{{ route('home') }}" class="no-underline hover:underline align-super text-black font-bold text-xl">
            Home
        </a>
    </span>
    @endif
    <a href="https://twitter.com/elhebert" class="text-blue-light no-underline mr-1 hover:text-blue">
        @svg('twitter')
    </a>
    <a href="https://github.com/Elhebert" class="text-grey-darker no-underline ml-1 hover:text-black">
        @svg('github')
    </a>
</div>
