<ul class="flex justify-around | mb-12 | list-reset">
    <li class="px-1">
        @if($elements->currentPage() !== 1)
            <a href="{{ route('home', ['page' => $elements->currentPage() - 1]) }}"
               class="text-2xl text-orange no-underline">
                👈 previous
            </a>
        @endif
    </li>
    
    <li class="px-1">
        @if($elements->currentPage() !== $elements->lastPage())
            <a href="{{ route('home', ['page' => $elements->currentPage() + 1]) }}"
               class="text-2xl text-orange no-underline">
                next 👉
            </a>
        @endif
    </li>
</ul>
