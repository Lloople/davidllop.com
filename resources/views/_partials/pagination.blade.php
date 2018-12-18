<ul class="flex justify-around | mb-12 | list-reset">
    <li class="px-1">
        @if($elements->currentPage() !== 1)
            <a href="{{ route('home', ['page' => $elements->currentPage() - 1]) }}"
               class="text-xl text-green no-underline font-amiga">
                << previous
            </a>
        @endif
    </li>
    
    <li class="px-1">
        @if($elements->currentPage() !== $elements->lastPage())
            <a href="{{ route('home', ['page' => $elements->currentPage() + 1]) }}"
               class="text-xl text-green no-underline font-amiga">
                next >>
            </a>
        @endif
    </li>
</ul>
