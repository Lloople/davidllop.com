<ul class="flex justify-center | mb-12 | list-reset">
    <li class="px-1">
        @if($elements->currentPage() === 1)
            <span class="text-2xl text-blue-light">
                &lt; previous
            </span>
        @else
            <a
                href="{{ route('home', ['page' => $elements->currentPage() - 1]) }}"
                class="text-2xl text-blue no-underline"
            >
                &lt; previous
            </a>
        @endif
    </li>

    <li class="px-1">
        @if($elements->currentPage() === $elements->lastPage())
            <span class="text-2xl text-blue-light">
                next &gt;
            </span>
        @else
            <a
                href="{{ route('home', ['page' => $elements->currentPage() + 1]) }}"
                class="text-2xl text-blue no-underline"
            >
                next &gt;
            </a>
        @endif
    </li>
</ul>
