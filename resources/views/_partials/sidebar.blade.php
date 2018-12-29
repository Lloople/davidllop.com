<div class="w-full xl:w-1/4 px-12 py-12 flex content-center justify-center flex-col text-purple-lighter font-dos relative bg-pattern">
    <a href="{{ route('home') }}" class="no-underline">
        <img src="{{ url($sidebarImage ?? 'media/me.png') }}"
             alt="{{ config('info.name') }}"
             class="handsome-guy hidden xl:block bg-transparent-white mb-4 opacity-75"
        >
    </a>
    <div class="text-center | mt-2 mb-4 xl:mb-8 z-10">
        <a class="no-underline" href="{{ route('home') }}">
            <h1 class="text-green font-bold font-amiga uppercase text-2xl mb-4">
                {{ config('info.name') }}
            </h1>
        </a>
        <h2 class="text-white font-normal font-amiga uppercase text-xl mb-4">
            {{ config('info.job_position') }}
        </h2>
        
        @include('_partials.social')
        
        <p class="mt-8 text-white text-2xl | pb-8 | hidden xl:block mb-4">
            {{ config('info.description') }}
        </p>
    </div>
</div>