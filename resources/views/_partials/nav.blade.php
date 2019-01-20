<nav class="absolute pin-t pin-r | z-10">
    <ul class="list-reset flex | text-xl xl:text-2xl">
        <li class="px-2 xl:px-4 py-3">
            <a href="{{ route('home') }}"
               class="font-dos uppercase no-underline {{ request()->routeIs('home', 'post*') ? 'text-green shadow-green-sm' : 'text-purple-lighter shadow-white-sm' }}"
            >
                Blog
            </a>
        </li>
        <li class="px-2 xl:pl-4 py-3">
            <a href="{{ route('about') }}"
               class="font-dos uppercase no-underline {{ request()->routeIs('about') ? 'text-green shadow-green-sm' : 'text-purple-lighter shadow-white-sm' }}"
            >
                About
            </a>
        </li>
        <li class="px-2 xl:pr-6 xl:pl-4 py-3">
            <a href="{{ route('uses') }}"
               class="font-dos uppercase no-underline {{ request()->routeIs('uses') ? 'text-green shadow-green-sm' : 'text-purple-lighter shadow-white-sm' }}"
            >
                Uses
            </a>
        </li>
    </ul>
</nav>
