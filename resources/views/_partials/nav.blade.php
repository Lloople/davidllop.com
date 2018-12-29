<nav class="absolute pin-t pin-r | z-10">
    <ul class="list-reset flex | text-xl xl:text-2xl">
        <li class="px-2 xl:px-4 py-3">
            <a href="{{ route('home') }}"
               class="font-dos uppercase {{ request()->routeIs('home') ? 'text-green font-bold underline' : 'text-purple-lighter no-underline' }}"
            >
                Home
            </a>
        </li>
        <li class="px-2 pr-8 xl:pr-6 xl:pl-4 py-3">
            <a href="{{ route('about') }}"
               class="font-dos uppercase {{ request()->routeIs('about') ? 'text-green font-bold underline' : 'text-purple-lighter no-underline' }}"
            >
                About
            </a>
        </li><li class="px-2 pr-8 xl:pr-6 xl:pl-4 py-3">
            <a href="{{ route('uses') }}"
               class="font-dos uppercase {{ request()->routeIs('uses') ? 'text-green font-bold underline' : 'text-purple-lighter no-underline' }}"
            >
                Uses
            </a>
        </li>
    </ul>
</nav>
