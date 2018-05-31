<nav class="absolute pin-t pin-r | z-10">
    <ul class="list-reset flex | text-xl xl:text-2xl">
        <li class="px-2 xl:px-4 py-3">
            <a
                href="{{ route('home') }}"
                class="text-blue{{ request()->routeIs('home') ? '-dark font-bold underline' : ' no-underline' }}"
            >
                Home
            </a>
        </li>
        <li class="px-2 pr-8 xl:px-4 py-3">
            <a
                href="{{ route('about') }}"
                class="text-blue{{ request()->routeIs('about') ? '-dark font-bold underline' : ' no-underline' }}"
            >
                About
            </a>
        </li>
    </ul>
</nav>
