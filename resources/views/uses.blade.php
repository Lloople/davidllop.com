@extends('layouts.master')

@section('meta')
    <title>Uses - {{ config('info.name') }}</title>
    <meta name="description" content="This is my current working setup.">
    
    <meta property="og:url" content="{{route('uses')}}">
    
    <meta property="og:title" content="{{ config('info.name') }}">
    <meta property="og:image" content="{{ asset('media/me.png') }}">
    <meta property="og:description" content="This is my current working setup.">
    <meta property="og:site_name" content="{{ config('info.name') }}">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="{{ config('info.name') }}">
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ config('info.social.twitter.username') }}">
    <meta name="twitter:creator" content="{{ config('info.social.twitter.username') }}">
    <meta name="twitter:url" content="{{ route('about') }}">
    <meta name="twitter:title" content="{{ config('info.name') }}">
    <meta name="twitter:description" content="This is my current working setup.">
    <meta name="twitter:image" content="{{ asset('media/me.png') }}">
@endsection

@section('content')
    <div class="flex h-full w-full flex-col font-dos">
        <div class="max-w-xl mx-auto | elements-breath-10 px-8 xl:px-24 pb-24 xl:py-6">
            <h4 class="retro-title">C:\Editor></h4>
            <p>
                I tried almost every IDE and Code Editor out there but I always come back to <a href="https://www.jetbrains.com/phpstorm">PhpStorm</a>. I have it conigured
                to display just the code hiding tabs, toolbars, sidebars, breadcrumbs... Most of the time I have the IDE window at the center of the screen in a
                small size. This helps me to stay focused in a few lines at a time.
            </p>
            <img class="mx-auto text-center" src="/media/uses/ide_setup.jpg" alt="My desktop with IDE at the center">
            <p>
                <strong>THEME:></strong> I'll always go to the dark side on this matter. For now I'm using the default's IDE configuration: Darcula.
            </p>
            <p>
                <strong>COLOR SCHEME:></strong> Currently I'm using <a href="https://rainglow.io/preview/#lavender">Lavender</a>. I've always used dark color schemes and I chosed this one
                because of it's <a href="https://www.youtube.com/playlist?list=PLtD0K2KQF24tC5slodfxK6z7eMo01VHS0">Retrowave</a> feeling.
                <br>
                This theme is included in <a href="https://twitter.com/daylerees">Dayle Rees</a>'s collection <a href="https://rainglow.io">Rainglow</a>. As easy as install a plugin in your
                IDE or Editor of choice and choose the colors that best suits you.
            </p>
            <h4 class="retro-title">C:\Window Management></h4>
            <p>
                Since I moved from Windows back in the day I missed some way to arrange the windows on the screen. I'm using <a href="https://www.spectacleapp.com">Spectacle</a>.
                It works with keyboard shortcuts instead of moving windows to the edge. I always modify the keystrokes for the four corners to match <code>cmd+opt+ctrl+[1,2,3,4]</code>.
            </p>
            <h4 class="retro-title">C:\Browser></h4>
            <p>
                I use Safari as my personal browser because of all the features it has regarding syncing with the iPhone. I also like to check the websites I made with it since I think
                that currently it's the "less standard" browser out there. For develop purposes I prefer Google Chrome for request inspection and console tasks.
            </p>
            <h4 class="retro-title">C:\Environment></h4>
            <p>
                I use <a href="https://laravel.com/docs/5.7/valet">Valet</a> for local development. Previously I've used <a href="https://laravel.com/docs/5.7/homestead">Homestead</a> with
                great results, but now I'm focusing on newer sites without backwards compatibility, so I'm fine with just one version of PHP installed in my machine.
            </p>
            <h4 class="retro-title">C:\Database></h4>
            <p>
                <a href="http://sequelpro.com">Sequel Pro</a>. That's it. It's the best MySQL manager out there for free,
                it's <a href="https://github.com/sequelpro/sequelpro">open source and currently maintained</a>.
            </p>
            <h4 class="retro-title">C:\Console></h4>
            <p>
                Currently I'm using the MacOSX Terminal App. I always wanted to try all that stuff out there, <a href="https://iterm2.com">iTerm2</a>, <a href="https://ohmyz.sh">Oh My ZSH</a>...
                But never felt the necessity neither found the time.
            </p>
            <h4 class="retro-title">C:\Writing></h4>
            <p>
                When I have to write something I chose <a href="https://macdown.uranusjr.com">MacDown</a>. It's easy to use and can see a live preview of the result. For writing emojis
                I use <a href="https://matthewpalmer.net/rocket/">Rocket</a>.
            </p>
            <h4 class="retro-title">C:\Other Apps></h4>
            <p>For Email, Calendar, Reminders and Notes I use the Apple's default apps.</p>
            <p>For music I use Spotify and honestly I can't live without it.</p>

            <h4 class="retro-title">C:\Desktop Setup></h4>
            <p>I own a Macbook Pro 13" with TouchBar 2017 and I'm very happy with it. The keyboard feels weird at first but I got used to it and can't use the previous version anymore.</p>
            <h6 class="retro-title">C:\Desktop Setup\Output></h6>
            <p>At home I have a <a href="https://www.amazon.com/Dell-UltraSharp-27-Inch-LED-Lit-Monitor/dp/B00P0EQD1Q">Dell UltraSharp U2715H</a> monitor for work (MacBook)
                and Gaming (Windows, SNES Mini and NES Mini. <del>PlayStation Classic soon...</del>).</p>
            <p>I use this <a href="https://www.amazon.com/Laptop-Bestand-Macbook-Cooling-Patented/dp/B079N75V58">Laptop Stand Bestand</a> to put my Macbook side by side with the
                monitor and have two screens.</p>
            <p>My headphones are Sennheiser HD50. They're no longer in production but mine still holds the day. The audio is awesome and I have them for almost 15 years now. They were pretty
                cheap for the good quality. For work I'm currently using <a href="https://buy.mi.com/es/item/3182200018">Xiaomi Mi Headphones Comfort</a> (can't find the link in english). They
                were pretty cheap and the sound is awesome. Also they have a good ambient noise reduction which is pretty helpful at the office.</p>
            <h6 class="retro-title">C:\Desktop Setup\Input></h6>
            <p>I type using a <a href="https://www.amazon.com/CORSAIR-K70-Mechanical-Gaming-Keyboard/dp/B01ER4B8S2">Corsair K70 Lux</a> Mechanical Keyboard. I've switched
            the Windows and Alt keys to match the Mac layout.</p>
            <p>I point with a <a href="https://www.amazon.com/CORSAIR-M65-Pro-RGB-Adjustable/dp/B01D63UU52">Corsair M65 Pro</a> mouse. The back / forward buttons on the side doesn't work
                with the MacOSX and I haven't found any solution for this, but it's not really bothering me. The mouse feeling is awesome and I also use it when gaming on Windows.</p>
            <p>Under the keyboard and the mouse I have a <a href="https://www.amazon.com/CORSAIR-MM300-Anti-Fray-High-Performance-CH-9000108-WW/dp/B01798VS4C">Corsair MM 300 Extended</a> Mouse Pad.
            I bought it in an offer along with the mouse and the keyboard but didn't regret it. The feel is so premium and it has boat sails on it!</p>
            <p>Desktop table is nothing important by now. It was here when we moved in and can't get rid of it. Chair is not listed yet, I'm waiting for
                <a href="https://twitter.com/christophrumpel/status/1078374544870658050">Christoph Rumpel's decision</a> before buying my own :)</p>
            <p>I have a lava lamp on the corner. Can't remember where I bought it but it's just awesome to have it there while coding.</p>
        </div>

        @include('_partials.sorcerers')
    </div>
@endsection
