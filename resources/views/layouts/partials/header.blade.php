<header class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="header-left" class="flex items-center">
        <div class="text-gray-800 font-semibold">
            <span class="text-[#1D8C87] text-xl">
                <a href="/">
                    Task Manager
                </a>
            </span>
        </div>
    </div>
    <div id="header-right" class="flex items-center md:space-x-6">
        @guest
            @include('layouts.partials.header-right-guest')
        @endguest

        @auth
            @include('layouts.partials.header-right-auth')
        @endauth
    </div>
</header>
