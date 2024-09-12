<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden duration-300 ease-linear  lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false">

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">

        <!-- Logo -->
        <div class="flex justify-center mt-8">
            <img src="{{ asset('assets/images/logo/front-logo.png') }}" alt="Logo" class="w-40 max-w-xs mx-auto">
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6" x-data="{ selected: $persist('Dashboard') }">
            <!-- Menu Group -->
            <aside id="cta-button-sidebar"
                class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
                aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">

                    <!-- Spacing before the unordered list -->
                    <div class="mt-18"></div>

                    <ul class="space-y-2 font-medium">

                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-blue-900 hover:bg-gray-100 dark:hover:bg-gray-700 group">

                                <span class="flex-1 ms-3 whitespace-nowrap"></span>

                            </a>
                        </li>



                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-blue-900 hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#00ff1e" d="M13.45 2.533a2.25 2.25 0 0 0-2.9 0L3.8 8.228a2.25 2.25 0 0 0-.8 1.72v9.305c0 .966.784 1.75 1.75 1.75h8.617l-2.063-2.136c-1.48-1.532-1.696-3.857-.668-5.62a4.57 4.57 0 0 1 1.924-1.8a4.4 4.4 0 0 1 4.44.337a4.4 4.4 0 0 1 4-.523V9.947a2.25 2.25 0 0 0-.8-1.72zm8.527 15.64c1.364-1.412 1.364-3.702 0-5.114a3.6 3.6 0 0 0-.476-.413a3.406 3.406 0 0 0-4.465.413h-.072A3.41 3.41 0 0 0 13 12.346a3.57 3.57 0 0 0-1.5 1.404c-.81 1.39-.636 3.223.523 4.423l4.442 4.598a.74.74 0 0 0 1.07 0z"/></svg>
                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-blue-900 hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#00ff1e" d="M13.45 2.533a2.25 2.25 0 0 0-2.9 0L3.8 8.228a2.25 2.25 0 0 0-.8 1.72v9.305c0 .966.784 1.75 1.75 1.75h8.617l-2.063-2.136c-1.48-1.532-1.696-3.857-.668-5.62a4.57 4.57 0 0 1 1.924-1.8a4.4 4.4 0 0 1 4.44.337a4.4 4.4 0 0 1 4-.523V9.947a2.25 2.25 0 0 0-.8-1.72zm8.527 15.64c1.364-1.412 1.364-3.702 0-5.114a3.6 3.6 0 0 0-.476-.413a3.406 3.406 0 0 0-4.465.413h-.072A3.41 3.41 0 0 0 13 12.346a3.57 3.57 0 0 0-1.5 1.404c-.81 1.39-.636 3.223.523 4.423l4.442 4.598a.74.74 0 0 0 1.07 0z"/></svg>
                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-blue-900 hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#00ff1e" d="M13.45 2.533a2.25 2.25 0 0 0-2.9 0L3.8 8.228a2.25 2.25 0 0 0-.8 1.72v9.305c0 .966.784 1.75 1.75 1.75h8.617l-2.063-2.136c-1.48-1.532-1.696-3.857-.668-5.62a4.57 4.57 0 0 1 1.924-1.8a4.4 4.4 0 0 1 4.44.337a4.4 4.4 0 0 1 4-.523V9.947a2.25 2.25 0 0 0-.8-1.72zm8.527 15.64c1.364-1.412 1.364-3.702 0-5.114a3.6 3.6 0 0 0-.476-.413a3.406 3.406 0 0 0-4.465.413h-.072A3.41 3.41 0 0 0 13 12.346a3.57 3.57 0 0 0-1.5 1.404c-.81 1.39-.636 3.223.523 4.423l4.442 4.598a.74.74 0 0 0 1.07 0z"/></svg>
                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-blue-900 dark:hover:bg-gray-700"
                                aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#00ff1e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M12.29 20.977c-.818.132-1.724-.3-1.965-1.294a1.724 1.724 0 0 0-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066-2.573c-.94-1.543.826-3.31 2.37-2.37c1 .608 2.296.07 2.572-1.065c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c.983.238 1.416 1.126 1.298 1.937M16 19a3 3 0 1 0 6 0a3 3 0 1 0-6 0m1 2l4-4"/><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0-6 0"/></g></svg>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Settings</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24"><path fill="#00ff1e" d="m7 10l5 5l5-5z"/></svg>
                            </button>
                            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{ url(config('app.shield_route_prefix') . '/slider') }}"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-blue-900 dark:hover:bg-gray-700">

                                        Featured
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 1200 1200">
                                            <path fill="#1eff00"
                                                d="M381.64 1200C135.779 1061.434 71.049 930.278 108.057 751.148c27.321-132.271 116.782-239.886 125.36-371.903c38.215 69.544 54.183 119.691 58.453 192.364C413.413 422.695 493.731 216.546 498.487 0c0 0 316.575 186.01 337.348 466.98c27.253-57.913 40.972-149.892 13.719-209.504c81.757 59.615 560.293 588.838-64.818 942.524c117.527-228.838 30.32-537.611-173.739-680.218c13.628 61.319-10.265 290.021-100.542 390.515c25.014-167.916-23.8-238.918-23.8-238.918s-16.754 94.054-81.758 189.065c-59.36 86.762-100.49 178.847-23.257 339.556" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-blue-900 dark:hover:bg-gray-700">Billing</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-blue-900 dark:hover:bg-gray-700">Invoice</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-blue-900 hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#00ff1e" d="M13.45 2.533a2.25 2.25 0 0 0-2.9 0L3.8 8.228a2.25 2.25 0 0 0-.8 1.72v9.305c0 .966.784 1.75 1.75 1.75h8.617l-2.063-2.136c-1.48-1.532-1.696-3.857-.668-5.62a4.57 4.57 0 0 1 1.924-1.8a4.4 4.4 0 0 1 4.44.337a4.4 4.4 0 0 1 4-.523V9.947a2.25 2.25 0 0 0-.8-1.72zm8.527 15.64c1.364-1.412 1.364-3.702 0-5.114a3.6 3.6 0 0 0-.476-.413a3.406 3.406 0 0 0-4.465.413h-.072A3.41 3.41 0 0 0 13 12.346a3.57 3.57 0 0 0-1.5 1.404c-.81 1.39-.636 3.223.523 4.423l4.442 4.598a.74.74 0 0 0 1.07 0z"/></svg>
                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>
                        
                    </ul>
                    <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-blue-50 dark:bg-blue-900" role="alert">
                        <div class="flex items-center mb-3">
                            <span
                                class="bg-orange-100 text-orange-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Updates</span>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 inline-flex justify-center items-center w-6 h-6 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800"
                                data-dismiss-target="#dropdown-cta" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 32 32"><path fill="#00ff1e" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13S23.168 3 16 3m0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16S9.913 5 16 5m-3.78 5.78l-1.44 1.44L14.564 16l-3.782 3.78l1.44 1.44L16 17.437l3.78 3.78l1.44-1.437L17.437 16l3.78-3.78l-1.437-1.44L16 14.564l-3.78-3.782z"/></svg>
                            </button>
                        </div>
                        <p class="mb-3 text-sm text-blue-800 dark:text-blue-400">
                            We've implemented several updates:
                            Thank you for your continued support and generosity!
                        </p>
                        <a class="text-sm text-blue-800 underline font-medium hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300"
                            href="#">Documentation v-1.1.0</a>
                    </div>
                </div>
            </aside>



        </nav>
        <!-- Sidebar Menu -->


    </div>
</aside>
