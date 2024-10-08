<nav class="relative px-4 py-2 flex justify-between items-center  dark:bg-gray-800 border-b-2 dark:border-gray-600">

    <a class="flex justify-center text-2xl font-bold text-violet-600 dark:text-white" href="#">
        <img src="{{ asset('assets/images/logo/front-logo.png') }}" alt="OrbitLogo" class="w-40 max-w-xs mx-auto">
    </a>

    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-violet-600 dark:text-gray-100 p-1" id="navbar_burger">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                <g fill="currentColor">
                    <path
                        d="M8 6.983a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2zM7 12a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1m1 3.017a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2z" />
                    <path fill-rule="evenodd"
                        d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10m-2 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0"
                        clip-rule="evenodd" />
                </g>
            </svg>
        </button>
    </div>

    <ul
        class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">

        <li>
            <div class=" relative mx-auto text-gray-600">
                <input
                    class="border border-gray-300 placeholder-current h-10 px-5 pr-16  rounded-lg text-sm focus:outline-none dark:bg-gray-500 dark:border-gray-50 dark:text-gray-200 "
                    type="search" name="search" placeholder="Search">

                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class="text-gray-600 dark:text-gray-200 h-4 w-4 fill-current"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>

            </div>
        </li>
    </ul>


    <div class="hidden lg:flex">
        <label id="theme-toggle" class="hidden lg:inline-block lg:ml-auto py-1.5 px-3 m-1 text-center">
            <svg id="theme-toggle-dark-icon" class="w-5 h-6 hidden" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 15 15">
                <path fill="#000000"
                    d="M7.707.003a.5.5 0 0 0-.375.846a6 6 0 0 1-5.569 10.024a.5.5 0 0 0-.519.765A7.5 7.5 0 1 0 7.707.003" />
            </svg>
            <svg id="theme-toggle-light-icon" class="w-5 h-6 hidden"xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24">
                <g stroke="#ffdd00" stroke-linecap="round" stroke-width="2">
                    <circle cx="12" cy="32" r="5" fill="#ffdd00" fill-opacity="0.3">
                        <animate fill="freeze" attributeName="cy" dur="0.6s" values="32;12" />
                    </circle>
                    <g fill="none" stroke-dasharray="2" stroke-dashoffset="2">
                        <path d="M0 0">
                            <animate fill="freeze" attributeName="d" begin="0.7s" dur="0.2s"
                                values="M12 19v1M19 12h1M12 5v-1M5 12h-1;M12 21v1M21 12h1M12 3v-1M3 12h-1" />
                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s"
                                values="2;0" />
                        </path>
                        <path d="M0 0">
                            <animate fill="freeze" attributeName="d" begin="0.9s" dur="0.2s"
                                values="M17 17l0.5 0.5M17 7l0.5 -0.5M7 7l-0.5 -0.5M7 17l-0.5 0.5;M18.5 18.5l0.5 0.5M18.5 5.5l0.5 -0.5M5.5 5.5l-0.5 -0.5M5.5 18.5l-0.5 0.5" />
                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.9s" dur="0.2s"
                                values="2;0" />
                        </path>
                        <animateTransform attributeName="transform" dur="30s" repeatCount="indefinite"
                            type="rotate" values="0 12 12;360 12 12" />
                    </g>
                </g>
            </svg>
        </label>


        <!-- Settings Dropdown -->
        @if (Route::has('login'))
            @auth
                <a
                    href="{{ Auth::check()
                        ? (Auth::user()->role === 'admin'
                            ? route('Shield.dashboard', ['prefix' => config('app.shield_route_prefix')])
                            : (Auth::user()->role === 'volunteer'
                                ? route('User.dashboard', ['prefix' => config('app.user_route_prefix')])
                                : '#'))
                        : '#' }}">   </a>
                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
            @else
                <a href="{{ route('login') }}">
                    <button
                        class=" py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 dark:text-gray-200 dark:bg-violet-700 hidden lg:block">
                        Log in
                    </button>
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">
                        <button
                            class=" py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 dark:text-gray-200 dark:bg-violet-700 hidden lg:block">
                            Register
                        </button>
                    </a>
                @endif
            @endauth

        @endif


    </div>
</nav>



<!-- mobile navbar -->
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-50"></div>
    <nav
        class="fixed  dark:bg-gray-600 top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 border-r overflow-y-auto">

        <div class="flex items-center mb-8">
            <a class="mr-auto text-2xl font-bold text-black dark:text-gray-100" href="#">
                <img src="{{ asset('assets/images/logo/front-logo.png') }}" alt="OrbitLogo"
                    class="w-40 max-w-xs mx-auto">
            </a>

            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div class=" relative mx-auto text-gray-600">
            <input
                class="border-2 border-gray-300 whitebg- h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none dark:placeholder-gray-200 dark:bg-gray-500 dark:border-gray-50"
                type="search" name="search" placeholder="Search">

            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                <svg class="text-gray-600 dark:text-gray-200 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>

        </div>

        <div class="mt-auto">

            <div class="pt-6">
                <button id="theme-toggle-2" type="button"
                    class=" py-2.5 w-[97.6%] mb-3 rounded-xl flex justify-center align-middle px-3 m-1 text-center bg-gray-100 border border-gray-300 text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg id="theme-toggle-dark-icon-2" class="w-6 h-6 hidden" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon-2" class="w-6 h-6 hidden" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <a class="block py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 mb-3 text-sm font-semibold"
                    href="/login">
                    Sign in
                </a>
            </div>
        </div>
    </nav>
</div>
