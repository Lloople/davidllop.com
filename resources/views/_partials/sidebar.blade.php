<div class="w-full xl:w-1/4 px-12 py-12 bg-orange-lighter flex content-center justify-center flex-col">
    <a href="{{ route('home') }}">
        <img src="/media/me.jpg"
             style="max-width: 200px; border-radius: 50%; text-alig: center; margin: 0 auto;"
             alt="{{ config('info.name') }}"
             class="handsome-guy hidden xl:block"
        >
    </a>
    
    <div class="text-center | mt-2 mb-4 xl:mb-8">
        <a class="no-underline" href="{{ route('home') }}">
            <h1 class="text-blue-dark font-bold text-4xl">
                {{ config('info.name') }}
            </h1>
        </a>
        <h2 class="text-blue-dark font-normal text-3xl">
            {{ config('info.job_position') }}
        </h2>
        
        @include('_partials.social')
        
        <p class="mt-8 text-blue text-2xl | pb-8 | hidden xl:block">
            {{ config('info.description') }}
        </p>
        
        <p class="text-blue text-2xl | pb-8 | hidden xl:block">
            I'm always asking <br><strong>how does this work?</strong>
        </p>
        
        <p class="text-blue text-2xl | pb-8 | hidden xl:block">
            I'm always saying <br><strong>never stop learning</strong>.
        </p>
    </div>
</div>