<header class="sticky top-0 z-999 flex w-ful">
    <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
        <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
            <!-- Hamburger Toggle BTN -->
            <button
                class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden"
                @click.stop="sidebarToggle = !sidebarToggle">
                <span class="relative block h-5.5 w-5.5 cursor-pointer">
                    <span class="du-block absolute right-0 h-full w-full">
                        <span
                            class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white"
                            :class="{ '!w-full delay-300': !sidebarToggle }"></span>
                        <span
                            class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white"
                            :class="{ '!w-full delay-400': !sidebarToggle }"></span>
                        <span
                            class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white"
                            :class="{ '!w-full delay-500': !sidebarToggle }"></span>
                    </span>
                    <span class="du-block absolute right-0 h-full w-full rotate-45">
                        <span
                            class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white"
                            :class="{ '!h-0 delay-[0]': !sidebarToggle }"></span>
                        <span
                            class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white"
                            :class="{ '!h-0 dealy-200': !sidebarToggle }"></span>
                    </span>
                </span>
            </button>
            <!-- Hamburger Toggle BTN -->
            <a class="block flex-shrink-0 lg:hidden" href="#">
                <img src="{{ asset('assets/images/logo/front-logo.png') }}" alt="OrbitLogo" class="w-40 max-w-xs mx-auto" >
            </a>
            
        </div>
        <div class="hidden sm:block">

        </div>

        <div class="flex items-center gap-3 2xsm:gap-7">
            <ul class="flex items-center gap-2 2xsm:gap-4">
                <li>
                    <!-- Dark Mode Toggler -->
                    <label :class="darkMode ? 'bg-primary' : 'bg-stroke'"
                        class="relative m-0 block h-7.5 w-14 rounded-full">
                        <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode"
                            class="absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0" />
                        <span :class="darkMode && '!right-1 !translate-x-full'"
                            class="absolute left-1 top-1/2 flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear">
                            <span class="dark:hidden">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.99992 12.6666C10.5772 12.6666 12.6666 10.5772 12.6666 7.99992C12.6666 5.42259 10.5772 3.33325 7.99992 3.33325C5.42259 3.33325 3.33325 5.42259 3.33325 7.99992C3.33325 10.5772 5.42259 12.6666 7.99992 12.6666Z"
                                        fill="#969AA1" />
                                    <path
                                        d="M8.00008 15.3067C7.63341 15.3067 7.33342 15.0334 7.33342 14.6667V14.6134C7.33342 14.2467 7.63341 13.9467 8.00008 13.9467C8.36675 13.9467 8.66675 14.2467 8.66675 14.6134C8.66675 14.9801 8.36675 15.3067 8.00008 15.3067ZM12.7601 13.4267C12.5867 13.4267 12.4201 13.3601 12.2867 13.2334L12.2001 13.1467C11.9401 12.8867 11.9401 12.4667 12.2001 12.2067C12.4601 11.9467 12.8801 11.9467 13.1401 12.2067L13.2267 12.2934C13.4867 12.5534 13.4867 12.9734 13.2267 13.2334C13.1001 13.3601 12.9334 13.4267 12.7601 13.4267ZM3.24008 13.4267C3.06675 13.4267 2.90008 13.3601 2.76675 13.2334C2.50675 12.9734 2.50675 12.5534 2.76675 12.2934L2.85342 12.2067C3.11342 11.9467 3.53341 11.9467 3.79341 12.2067C4.05341 12.4667 4.05341 12.8867 3.79341 13.1467L3.70675 13.2334C3.58008 13.3601 3.40675 13.4267 3.24008 13.4267ZM14.6667 8.66675H14.6134C14.2467 8.66675 13.9467 8.36675 13.9467 8.00008C13.9467 7.63341 14.2467 7.33342 14.6134 7.33342C14.9801 7.33342 15.3067 7.63341 15.3067 8.00008C15.3067 8.36675 15.0334 8.66675 14.6667 8.66675ZM1.38675 8.66675H1.33341C0.966748 8.66675 0.666748 8.36675 0.666748 8.00008C0.666748 7.63341 0.966748 7.33342 1.33341 7.33342C1.70008 7.33342 2.02675 7.63341 2.02675 8.00008C2.02675 8.36675 1.75341 8.66675 1.38675 8.66675ZM12.6734 3.99341C12.5001 3.99341 12.3334 3.92675 12.2001 3.80008C11.9401 3.54008 11.9401 3.12008 12.2001 2.86008L12.2867 2.77341C12.5467 2.51341 12.9667 2.51341 13.2267 2.77341C13.4867 3.03341 13.4867 3.45341 13.2267 3.71341L13.1401 3.80008C13.0134 3.92675 12.8467 3.99341 12.6734 3.99341ZM3.32675 3.99341C3.15341 3.99341 2.98675 3.92675 2.85342 3.80008L2.76675 3.70675C2.50675 3.44675 2.50675 3.02675 2.76675 2.76675C3.02675 2.50675 3.44675 2.50675 3.70675 2.76675L3.79341 2.85342C4.05341 3.11342 4.05341 3.53341 3.79341 3.79341C3.66675 3.92675 3.49341 3.99341 3.32675 3.99341ZM8.00008 2.02675C7.63341 2.02675 7.33342 1.75341 7.33342 1.38675V1.33341C7.33342 0.966748 7.63341 0.666748 8.00008 0.666748C8.36675 0.666748 8.66675 0.966748 8.66675 1.33341C8.66675 1.70008 8.36675 2.02675 8.00008 2.02675Z"
                                        fill="#969AA1" />
                                </svg>
                            </span>
                            <span class="hidden dark:inline-block">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.3533 10.62C14.2466 10.44 13.9466 10.16 13.1999 10.2933C12.7866 10.3667 12.3666 10.4 11.9466 10.38C10.3933 10.3133 8.98659 9.6 8.00659 8.5C7.13993 7.53333 6.60659 6.27333 6.59993 4.91333C6.59993 4.15333 6.74659 3.42 7.04659 2.72666C7.33993 2.05333 7.13326 1.7 6.98659 1.55333C6.83326 1.4 6.47326 1.18666 5.76659 1.48C3.03993 2.62666 1.35326 5.36 1.55326 8.28666C1.75326 11.04 3.68659 13.3933 6.24659 14.28C6.85993 14.4933 7.50659 14.62 8.17326 14.6467C8.27993 14.6533 8.38659 14.66 8.49326 14.66C10.7266 14.66 12.8199 13.6067 14.1399 11.8133C14.5866 11.1933 14.4666 10.8 14.3533 10.62Z"
                                        fill="#969AA1" />
                                </svg>
                            </span>
                        </span>
                    </label>
                    <!-- Dark Mode Toggler -->
                </li>

                <!-- Notification Menu Area -->
                <li class="relative" x-data="{ dropdownOpen: false, notifying: true }" @click.outside="dropdownOpen = false">
                    <a class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
                        href="#" @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false">
                        <span :class="!notifying && 'hidden'"
                            class="absolute -top-0.5 right-0 z-1 h-2 w-2 rounded-full bg-meta-1">
                            <span
                                class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-meta-1 opacity-75"></span>
                        </span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#04ff00" d="M12 18.5q.625 0 1.063-.437T13.5 17h-3q0 .625.438 1.063T12 18.5m0 3.5q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m-4-6h8q.425 0 .713-.288T17 15t-.288-.712T16 14v-2.6q0-1.525-.788-2.787T13 7v-.5q0-.425-.288-.712T12 5.5t-.712.288T11 6.5V7q-1.425.35-2.212 1.613T8 11.4V14q-.425 0-.712.288T7 15t.288.713T8 16"/></svg>
                    </a>

                    <!-- Dropdown Start -->
                    <div x-show="dropdownOpen"
                        class="absolute -right-27 mt-2.5 flex h-90 w-75 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80">
                        <div class="px-4.5 py-3">
                            <h5 class="text-sm font-medium text-bodydark2">Notification</h5>
                        </div>

                        <ul class="flex h-auto flex-col overflow-y-auto">
                            <li>
                                <a class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                    href="#">
                                    <p class="text-sm">
                                        <span class="text-black dark:text-white">Edit your information in a
                                            swipe</span>
                                        Sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim.
                                    </p>

                                    <p class="text-xs">12 May, 2025</p>
                                </a>
                            </li>
                            <li>
                                <a class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                    href="#">
                                    <p class="text-sm">
                                        <span class="text-black dark:text-white">It is a long established fact</span>
                                        that a reader will be distracted by the readable.
                                    </p>

                                    <p class="text-xs">24 Feb, 2025</p>
                                </a>
                            </li>
                            <li>
                                <a class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                    href="#">
                                    <p class="text-sm">
                                        <span class="text-black dark:text-white">There are many variations</span>
                                        of passages of Lorem Ipsum available, but the majority have
                                        suffered
                                    </p>

                                    <p class="text-xs">04 Jan, 2025</p>
                                </a>
                            </li>
                            <li>
                                <a class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                    href="#">
                                    <p class="text-sm">
                                        <span class="text-black dark:text-white">There are many variations</span>
                                        of passages of Lorem Ipsum available, but the majority have
                                        suffered
                                    </p>

                                    <p class="text-xs">01 Dec, 2024</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Dropdown End -->
                </li>
                <!-- Notification Menu Area -->

                <!-- Chat Notification Area -->
                <li class="relative" x-data="{ dropdownOpen: false, notifying: true }" @click.outside="dropdownOpen = false">
                    <a class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
                        href="#" @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false">
                        <span :class="!notifying && 'hidden'"
                            class="absolute -right-0.5 -top-0.5 z-1 h-2 w-2 rounded-full bg-meta-1">
                            <span
                                class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-meta-1 opacity-75"></span>
                        </span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><path fill="#04ff00" d="M6 6a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 6m.5 1.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zM8 1a6 6 0 0 0-5.27 8.872l-.71 2.49a.5.5 0 0 0 .638.612l2.338-.779A6 6 0 1 0 8 1M3 7a5 5 0 1 1 2.325 4.225a.5.5 0 0 0-.426-.052l-1.658.553l.51-1.781a.5.5 0 0 0-.052-.393A5 5 0 0 1 3 7m9.276 7.947l-2.402-1.2q.662-.185 1.263-.488l1.363.682l4.5-2.25V11a1 1 0 0 0-1-1h-1.674q.23-.481.384-1H16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2v-2.07q.49.07 1 .07v2a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1v-3.191l-4.276 2.138a.5.5 0 0 1-.448 0"/></svg>
                    </a>

                    <!-- Dropdown Start -->
                    <div x-show="dropdownOpen"
                        class="absolute -right-16 mt-2.5 flex h-90 w-75 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80">
                        <div class="px-4.5 py-3">
                            <h5 class="text-sm font-medium text-bodydark2">Messages</h5>
                        </div>

                        <ul class="flex h-auto flex-col overflow-y-auto">
                            <li>
                                <a class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                    href="messages.html">
                                    <div class="h-12.5 w-12.5 rounded-full">
                                        <img src="./images/user/user-02.png" alt="User" />
                                    </div>

                                    <div>
                                        <h6 class="text-sm font-medium text-black dark:text-white">
                                            Mariya Desoja
                                        </h6>
                                        <p class="text-sm">I like your confidence 💪</p>
                                        <p class="text-xs">2min ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                    href="messages.html">
                                    <div class="h-12.5 w-12.5 rounded-full">
                                        <img src="./images/user/user-01.png" alt="User" />
                                    </div>

                                    <div>
                                        <h6 class="text-sm font-medium text-black dark:text-white">
                                            Robert Jhon
                                        </h6>
                                        <p class="text-sm">Can you share your offer?</p>
                                        <p class="text-xs">10min ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                    href="messages.html">
                                    <div class="h-12.5 w-12.5 rounded-full">
                                        <img src="./images/user/user-03.png" alt="User" />
                                    </div>

                                    <div>
                                        <h6 class="text-sm font-medium text-black dark:text-white">
                                            Henry Dholi
                                        </h6>
                                        <p class="text-sm">I cam across your profile and...</p>
                                        <p class="text-xs">1day ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                    href="messages.html">
                                    <div class="h-12.5 w-12.5 rounded-full">
                                        <img src="./images/user/user-04.png" alt="User" />
                                    </div>

                                    <div>
                                        <h6 class="text-sm font-medium text-black dark:text-white">
                                            Cody Fisher
                                        </h6>
                                        <p class="text-sm">I’m waiting for you response!</p>
                                        <p class="text-xs">5days ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                                    href="messages.html">
                                    <div class="h-12.5 w-12.5 rounded-full">
                                        <img src="./images/user/user-02.png" alt="User" />
                                    </div>

                                    <div>
                                        <h6 class="text-sm font-medium text-black dark:text-white">
                                            Mariya Desoja
                                        </h6>
                                        <p class="text-sm">I like your confidence 💪</p>
                                        <p class="text-xs">2min ago</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Dropdown End -->
                </li>
                <!-- Chat Notification Area -->
            </ul>

            <!-- User Area -->
            <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
                <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                    <span class="hidden text-right lg:block">
                        <span class="block text-sm font-medium text-black dark:text-white">{{ Auth::user()->name }}</span>
                    </span>

                    <figcaption class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1632910121591-29e2484c0259?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxjb2RlcnxlbnwwfDB8fHwxNzEwMTY0NjIzfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="" class="flex-none w-10 h-10 rounded-full object-cover" loading="lazy" decoding="async">
                    </figcaption>
                </a>

                <!-- Dropdown Start -->
                <div x-show="dropdownOpen"
                    class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <ul class="flex flex-col gap-5 border-b border-stroke px-6 py-7.5 dark:border-strokedark">


                        <li>
                            <a href="{{ url(config('app.shield_route_prefix') . '/profile') }}"
                                class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 48 48">
                                    <g fill="none">
                                        <path d="M0 0h48v48H0z" />
                                        <path fill="#04ff00" d="M32 20a8 8 0 1 1-16 0a8 8 0 0 1 16 0" />
                                        <path fill="#04ff00" fill-rule="evenodd"
                                            d="M23.184 43.984C12.517 43.556 4 34.772 4 24C4 12.954 12.954 4 24 4s20 8.954 20 20s-8.954 20-20 20h-.274q-.272 0-.542-.016M11.166 36.62a3.028 3.028 0 0 1 2.523-4.005c7.796-.863 12.874-.785 20.632.018a2.99 2.99 0 0 1 2.498 4.002A17.94 17.94 0 0 0 42 24c0-9.941-8.059-18-18-18S6 14.059 6 24c0 4.916 1.971 9.373 5.166 12.621"
                                            clip-rule="evenodd" />
                                    </g>
                                </svg>
                                My Profile
                            </a>
                        </li>

                        <li>
                            <a href="settings.html"
                                class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 48 48">
                                    <path fill="#11ff00"
                                        d="M39.6 27.2c.1-.7.2-1.4.2-2.2s-.1-1.5-.2-2.2l4.5-3.2c.4-.3.6-.9.3-1.4L40 10.8c-.3-.5-.8-.7-1.3-.4l-5 2.3c-1.2-.9-2.4-1.6-3.8-2.2L29.4 5c-.1-.5-.5-.9-1-.9h-8.6c-.5 0-1 .4-1 .9l-.5 5.5c-1.4.6-2.7 1.3-3.8 2.2l-5-2.3c-.5-.2-1.1 0-1.3.4l-4.3 7.4c-.3.5-.1 1.1.3 1.4l4.5 3.2c-.1.7-.2 1.4-.2 2.2s.1 1.5.2 2.2L4 30.4c-.4.3-.6.9-.3 1.4L8 39.2c.3.5.8.7 1.3.4l5-2.3c1.2.9 2.4 1.6 3.8 2.2l.5 5.5c.1.5.5.9 1 .9h8.6c.5 0 1-.4 1-.9l.5-5.5c1.4-.6 2.7-1.3 3.8-2.2l5 2.3c.5.2 1.1 0 1.3-.4l4.3-7.4c.3-.5.1-1.1-.3-1.4zM24 35c-5.5 0-10-4.5-10-10s4.5-10 10-10s10 4.5 10 10s-4.5 10-10 10" />
                                    <path fill="white"
                                        d="M24 13c-6.6 0-12 5.4-12 12s5.4 12 12 12s12-5.4 12-12s-5.4-12-12-12m0 17c-2.8 0-5-2.2-5-5s2.2-5 5-5s5 2.2 5 5s-2.2 5-5 5" />
                                </svg>
                                Account Settings
                            </a>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                   class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#04ff00" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M7.023 5.5a9 9 0 1 0 9.953 0M12 2v8" color="#04ff00" />
                                    </svg>
                                    Logout
                                </a>
                            </form>
                        </li>


                    </ul>


                </div>
                <!-- Dropdown End -->
            </div>
            <!-- User Area -->
        </div>
    </div>
</header>
