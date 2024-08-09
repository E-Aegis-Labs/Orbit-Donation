    <!-- ====== Navbar Section Start -->
    <div id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-transform duration-300 ease-in-out">
        <div class="grid xl:grid-cols-1 grid-cols-1">
            <div class="p-2">
                <div class="py-1 px-1 rounded-xl border w-full bg-gradient-to-r from-emerald-500 via-violet-600 to-emerald-900 header">
                    <!-- Your existing navbar content goes here -->
                    <div class="grid xl:grid-cols-1 grid-cols-1">
                        <div class="p-5">
                            <div class="py-3 px-3 rounded-xl border w-full bg-gradient-to-r from-emerald-500 via-violet-600 to-emerald-900 header">
                                <div class="flex justify-between items-center">
                                    <div class="flex justify-items-center items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-6 h-6 text-white ">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                                        </svg>
                                        <p class=" font-semibold text-white">LOGO</p>
                                        <div style="position: relative;">
                                            <input
                                                class="rounded-3xl py-3 px-3 outline-none text-xs w-[350px] pr-10 hidden lg:block md:block"
                                                placeholder="Search for Grocery, Stores, Vegetable, or Meat">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor"
                                                class="w-5 h-5 text-green-900 absolute right-3 top-1/2 transform -translate-y-1/2 hidden lg:block md:block">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-items-center items-center gap-2 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5 text-yellow-300 hidden lg:block md:block">
                                            <path fill-rule="evenodd"
                                                d="M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-sm text-white hidden lg:block md:block">Order now and get it within <span
                                                class="text-yellow-300">15 mint!</span></p>
                                        <div id="navbarToggler">
                                            <div class="flex items-center justify-end pr-16 lg:pr-0">
                                                <label for="themeSwitcher" class="inline-flex cursor-pointer items-center"
                                                    aria-label="themeSwitcher" name="themeSwitcher">
                                                    <input type="checkbox" name="themeSwitcher" id="themeSwitcher" class="sr-only" />
                                                    <span class="block text-white dark:hidden">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                            viewBox="0 0 30 30">
                                                            <path fill="white"
                                                                d="M3.74 14.44c0-1.52.3-2.98.89-4.37s1.4-2.58 2.4-3.59s2.2-1.81 3.59-2.4s2.84-.89 4.37-.89s2.98.3 4.37.89s2.59 1.4 3.6 2.4s1.81 2.2 2.4 3.59s.89 2.84.89 4.37s-.3 2.98-.89 4.37s-1.4 2.59-2.4 3.6s-2.2 1.81-3.6 2.4s-2.85.89-4.37.89s-2.98-.3-4.37-.89s-2.58-1.4-3.59-2.4s-1.81-2.2-2.4-3.6s-.89-2.84-.89-4.37m1.2 0c0 1.37.27 2.67.8 3.91s1.25 2.31 2.15 3.21s1.97 1.61 3.21 2.15s2.54.8 3.9.8h.21V4.39H15c-1.36 0-2.66.27-3.9.8S8.79 6.44 7.89 7.34s-1.61 1.97-2.15 3.21s-.8 2.54-.8 3.89" />
                                                        </svg>
                                                    </span>
                                                    <span class="hidden text-white dark:block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                            viewBox="0 0 512 512">
                                                            <defs>
                                                                <linearGradient id="meteoconsSunsetFill0" x1="150" x2="234"
                                                                    y1="119.2" y2="264.8" gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0" stop-color="#fbbf24" />
                                                                    <stop offset=".5" stop-color="#fbbf24" />
                                                                    <stop offset="1" stop-color="#f59e0b" />
                                                                </linearGradient>
                                                                <clipPath id="meteoconsSunsetFill1">
                                                                    <path fill="none"
                                                                        d="M512 306H296a21.5 21.5 0 0 0-14 5.3L256 334l-26-22.7a21.5 21.5 0 0 0-14-5.3H0V0h512Z" />
                                                                </clipPath>
                                                                <symbol id="meteoconsSunsetFill2" viewBox="0 0 384 384">
                                                                    <circle cx="192" cy="192" r="84"
                                                                        fill="url(#meteoconsSunsetFill0)" stroke="#f8af18"
                                                                        stroke-miterlimit="10" stroke-width="6" />
                                                                    <path fill="none" stroke="#fbbf24" stroke-linecap="round"
                                                                        stroke-miterlimit="10" stroke-width="24"
                                                                        d="M192 61.7V12m0 360v-49.7m92.2-222.5l35-35M64.8 319.2l35.1-35.1m0-184.4l-35-35m254.5 254.5l-35.1-35.1M61.7 192H12m360 0h-49.7">
                                                                        <animateTransform additive="sum" attributeName="transform"
                                                                            dur="6s" repeatCount="indefinite" type="rotate"
                                                                            values="0 192 192; 45 192 192" />
                                                                    </path>
                                                                </symbol>
                                                            </defs>
                                                            <g clip-path="url(#meteoconsSunsetFill1)">
                                                                <use width="384" height="384" href="#meteoconsSunsetFill2"
                                                                    transform="translate(64 100)" />
                                                            </g>
                                                            <path fill="none" stroke="#374151" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="18" d="M128 332h88l40 36l40-36h88" />
                                                        </svg>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                    
                                        <img class="inline-block w-8 h-8 rounded-full ring-2 ring-white"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ... -->
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Navbar Section End -->



