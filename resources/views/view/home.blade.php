@extends('view.layouts.app')


@section('main_content')
    {{-- -- ====== Hero Section Start  --}}


    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-70 overflow-hidden rounded-lg md:h-96">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <section class="relative bg-gradient-to-br from-blue-900 to-indigo-800 text-white overflow-hidden">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute inset-0 bg-cover bg-center"
                        style="background-image: url('https://telegra.ph/file/bbd5287058f5c07707ab4.jpg');"></div>
            
                    <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
                        <div class="flex flex-col md:flex-row items-center justify-between">
                            <!-- Left Side: Company Info -->
                            <div class="w-full md:w-1/2 mb-12 md:mb-0">
                                <h3 class="text-2xl sm:text-2xl font-bold mb-2 leading-tight">
                                    Innovate.<br>Transform.<br>Succeed.
                                </h3>
                                <p class="text-xl mb-8 text-gray-300">Empowering businesses with .</p>
                                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                                    <a href="#"
                                        class="bg-gradient-to-r from-purple-500 to-purple-900 text-blue-900 font-semibold px-8 py-3 rounded-full hover:bg-blue-100 transition duration-300 text-center">Get
                                        Started</a>
                                    <a href="#"
                                        class="bg-gradient-to-tr from-emerald-500 to-emerald-900 text-green-900 font-semibold px-8 py-3 rounded-full hover:bg-blue-100 transition duration-300 text-center">Start
                                        Today</a>
                                </div>
                            </div>
            
                            <!-- Right Side: Features -->
                            <div class="w-full md:w-1/2 md:pl-12">
                                <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-8 shadow-2xl">
                                    <h2 class="text-2xl font-semibold mb-6">Why MyCompany?</h2>
                                    <ul class="space-y-4">
                                        <li class="flex items-center">
                                            <svg class="w-6 h-6 mr-3 text-yellow-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                            </svg>
                                            <span>Lightning-fast Performance</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-6 h-6 mr-3 text-green-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                                </path>
                                            </svg>
                                            <span>Bank-grade Security</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-6 h-6 mr-3 text-purple-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                                                </path>
                                            </svg>
                                            <span>AI-powered Insights</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Decorative Element -->
                    <div class="absolute bottom-0 left-0 right-0">
                        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                                fill="green" />
                        </svg>
                    </div>
                </section>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <section class="relative bg-gradient-to-br from-blue-900 to-indigo-800 text-white overflow-hidden">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute inset-0 bg-cover bg-center"
                        style="background-image: url('https://telegra.ph/file/bbd5287058f5c07707ab4.jpg');"></div>
            
                    <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
                        <div class="flex flex-col md:flex-row items-center justify-between">
                            <!-- Left Side: Company Info -->
                            <div class="w-full md:w-1/2 mb-12 md:mb-0">
                                <h3 class="text-2xl sm:text-2xl font-bold mb-2 leading-tight">
                                    Innovate.<br>Transform.<br>Succeed.
                                </h3>
                                <p class="text-xl mb-8 text-gray-300">Empowering businesses </p>
                                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                                    <a href="#"
                                        class="bg-gradient-to-r from-purple-500 to-purple-900 text-blue-900 font-semibold px-8 py-3 rounded-full hover:bg-blue-100 transition duration-300 text-center">Get
                                        Started</a>
                                    <a href="#"
                                        class="bg-gradient-to-tr from-emerald-500 to-emerald-900 text-green-900 font-semibold px-8 py-3 rounded-full hover:bg-blue-100 transition duration-300 text-center">Start
                                        Today</a>
                                </div>
                            </div>
            
                            <!-- Right Side: Features -->
                            <div class="w-full md:w-1/2 md:pl-12">
                                <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-8 shadow-2xl">
                                    <h2 class="text-2xl font-semibold mb-6">Why MyCompany?</h2>
                                    <ul class="space-y-4">
                                        <li class="flex items-center">
                                            <svg class="w-6 h-6 mr-3 text-yellow-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                            </svg>
                                            <span>Lightning-fast Performance</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-6 h-6 mr-3 text-green-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                                </path>
                                            </svg>
                                            <span>Bank-grade Security</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-6 h-6 mr-3 text-purple-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                                                </path>
                                            </svg>
                                            <span>AI-powered Insights</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Decorative Element -->
                    <div class="absolute bottom-0 left-0 right-0">
                        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                                fill="green" />
                        </svg>
                    </div>
                </section>
            </div>

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    
    {{-- -- ====== Hero Section End  --}}

    {{-- ====== Features Section Start  --}}
    <section class="pb-8 pt-20 dark:bg-dark lg:pb-[70px] lg:pt-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Our features
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[20px] md:leading-[1.2]">
                            We believe we can save more life with you
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            Be the Difference Today: Click Donate and Transform Lives with Orbit Foundation..
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12" data-wow-delay=".1s">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span
                                class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.5801 8.30514H27.9926C28.6113 7.85514 29.1176 7.34889 29.3426 6.73014C29.6801 5.88639 29.6801 4.48014 27.9363 2.84889C26.0801 1.04889 24.3926 1.04889 23.3238 1.33014C20.9051 1.94889 19.2738 4.76139 18.3738 6.78639C17.4738 4.76139 15.8426 2.00514 13.4238 1.33014C12.3551 1.04889 10.6676 1.10514 8.81133 2.84889C7.06758 4.53639 7.12383 5.88639 7.40508 6.73014C7.63008 7.34889 8.13633 7.85514 8.75508 8.30514H5.71758C4.08633 8.30514 2.73633 9.65514 2.73633 11.2864V14.9989C2.73633 16.5739 4.03008 17.8676 5.60508 17.9239V31.6489C5.60508 33.5614 7.18008 35.1926 9.14883 35.1926H27.5426C29.4551 35.1926 31.0863 33.6176 31.0863 31.6489V17.8676C32.4926 17.6426 33.5613 16.4051 33.5613 14.9426V11.2301C33.5613 9.59889 32.2113 8.30514 30.5801 8.30514ZM23.9426 3.69264C23.9988 3.69264 24.1676 3.63639 24.3363 3.63639C24.7301 3.63639 25.3488 3.80514 26.1926 4.59264C26.8676 5.21139 27.0363 5.66139 26.9801 5.77389C26.6988 6.56139 23.8863 7.40514 20.6801 7.74264C21.4676 5.99889 22.6488 4.03014 23.9426 3.69264ZM10.4988 4.64889C11.3426 3.86139 11.9613 3.69264 12.3551 3.69264C12.5238 3.69264 12.6363 3.74889 12.7488 3.74889C14.0426 4.08639 15.2801 5.99889 16.0676 7.79889C12.8613 7.46139 10.0488 6.61764 9.76758 5.83014C9.71133 5.66139 9.88008 5.26764 10.4988 4.64889ZM5.26758 14.9426V11.2301C5.26758 11.0051 5.43633 10.7801 5.71758 10.7801H30.5801C30.8051 10.7801 31.0301 10.9489 31.0301 11.2301V14.9426C31.0301 15.1676 30.8613 15.3926 30.5801 15.3926H5.71758C5.49258 15.3926 5.26758 15.2239 5.26758 14.9426ZM27.5426 32.6614H9.14883C8.58633 32.6614 8.13633 32.2114 8.13633 31.6489V17.9239H28.4988V31.6489C28.5551 32.2114 28.1051 32.6614 27.5426 32.6614Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                            Transparent
                        </h4>
                        <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                            Donations and distributions can be seen transparently
                        </p>
                        <a href="javascript:void(0)"
                            class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12" data-wow-delay=".15s">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span
                                class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.5998 1.01245H5.39981C2.98105 1.01245 0.956055 2.9812 0.956055 5.4562V30.6562C0.956055 33.075 2.9248 35.0437 5.39981 35.0437H30.5998C33.0186 35.0437 34.9873 33.075 34.9873 30.6562V5.39995C34.9873 2.9812 33.0186 1.01245 30.5998 1.01245ZM5.39981 3.48745H30.5998C31.6123 3.48745 32.4561 4.3312 32.4561 5.39995V11.1937H3.4873V5.39995C3.4873 4.38745 4.38731 3.48745 5.39981 3.48745ZM3.4873 30.6V13.725H23.0623V32.5125H5.39981C4.38731 32.5125 3.4873 31.6125 3.4873 30.6ZM30.5998 32.5125H25.5373V13.725H32.4561V30.6C32.5123 31.6125 31.6123 32.5125 30.5998 32.5125Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                            Quick Fundraise
                        </h4>
                        <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                            The simple and quickest way to make a donation
                        </p>
                        <a href="javascript:void(0)"
                            class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12" data-wow-delay=".2s">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span
                                class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M33.5613 21.4677L31.3675 20.1177C30.805 19.7239 30.0175 19.9489 29.6238 20.5114C29.23 21.1302 29.455 21.8614 30.0175 22.2552L31.48 23.2114L18.1488 31.5927L4.76127 23.2114L6.22377 22.2552C6.84252 21.8614 7.01127 21.0739 6.61752 20.5114C6.22377 19.8927 5.43627 19.7239 4.87377 20.1177L2.68002 21.4677C2.11752 21.8614 1.72377 22.4802 1.72377 23.1552C1.72377 23.8302 2.06127 24.5052 2.68002 24.8427L17.08 33.8989C17.4175 34.1239 17.755 34.1802 18.1488 34.1802C18.5425 34.1802 18.88 34.0677 19.2175 33.8989L33.5613 24.8989C34.1238 24.5052 34.5175 23.8864 34.5175 23.2114C34.5175 22.5364 34.18 21.8614 33.5613 21.4677Z"
                                    fill="white" />
                                <path
                                    d="M20.1175 20.4552L18.1488 21.6364L16.18 20.3989C15.5613 20.0052 14.83 20.2302 14.4363 20.7927C14.0425 21.4114 14.2675 22.1427 14.83 22.5364L17.4738 24.1677C17.6988 24.2802 17.9238 24.3364 18.1488 24.3364C18.3738 24.3364 18.5988 24.2802 18.8238 24.1677L21.4675 22.5364C22.0863 22.1427 22.255 21.3552 21.8613 20.7927C21.4675 20.2302 20.68 20.0614 20.1175 20.4552Z"
                                    fill="white" />
                                <path
                                    d="M7.74252 18.0927L11.455 20.4552C11.68 20.5677 11.905 20.6239 12.13 20.6239C12.5238 20.6239 12.9738 20.3989 13.1988 20.0052C13.5925 19.3864 13.3675 18.6552 12.805 18.2614L9.09252 15.8989C8.47377 15.5052 7.74252 15.7302 7.34877 16.2927C6.95502 16.9677 7.12377 17.7552 7.74252 18.0927Z"
                                    fill="white" />
                                <path
                                    d="M5.04252 16.1802C5.43627 16.1802 5.88627 15.9552 6.11127 15.5614C6.50502 14.9427 6.28002 14.2114 5.71752 13.8177L4.81752 13.2552L5.71752 12.6927C6.33627 12.2989 6.50502 11.5114 6.11127 10.9489C5.71752 10.3302 4.93002 10.1614 4.36752 10.5552L1.72377 12.1864C1.33002 12.4114 1.10502 12.8052 1.10502 13.2552C1.10502 13.7052 1.33002 14.0989 1.72377 14.3239L4.36752 15.9552C4.53627 16.1239 4.76127 16.1802 5.04252 16.1802Z"
                                    fill="white" />
                                <path
                                    d="M8.41752 10.7239C8.64252 10.7239 8.86752 10.6677 9.09252 10.5552L12.805 8.1927C13.4238 7.79895 13.5925 7.01145 13.1988 6.44895C12.805 5.8302 12.0175 5.66145 11.455 6.0552L7.74252 8.4177C7.12377 8.81145 6.95502 9.59895 7.34877 10.1614C7.57377 10.4989 7.96752 10.7239 8.41752 10.7239Z"
                                    fill="white" />
                                <path
                                    d="M16.18 6.05522L18.1488 4.81772L20.1175 6.05522C20.3425 6.16772 20.5675 6.22397 20.7925 6.22397C21.1863 6.22397 21.6363 5.99897 21.8613 5.60522C22.255 4.98647 22.03 4.25522 21.4675 3.86147L18.8238 2.23022C18.43 1.94897 17.8675 1.94897 17.4738 2.23022L14.83 3.86147C14.2113 4.25522 14.0425 5.04272 14.4363 5.60522C14.83 6.16772 15.6175 6.44897 16.18 6.05522Z"
                                    fill="white" />
                                <path
                                    d="M23.4925 8.19267L27.205 10.5552C27.43 10.6677 27.655 10.7239 27.88 10.7239C28.2738 10.7239 28.7238 10.4989 28.9488 10.1052C29.3425 9.48642 29.1175 8.75517 28.555 8.36142L24.8425 5.99892C24.28 5.60517 23.4925 5.83017 23.0988 6.39267C22.705 7.01142 22.8738 7.79892 23.4925 8.19267Z"
                                    fill="white" />
                                <path
                                    d="M34.5738 12.1864L31.93 10.5552C31.3675 10.1614 30.58 10.3864 30.1863 10.9489C29.7925 11.5677 30.0175 12.2989 30.58 12.6927L31.48 13.2552L30.58 13.8177C29.9613 14.2114 29.7925 14.9989 30.1863 15.5614C30.4113 15.9552 30.8613 16.1802 31.255 16.1802C31.48 16.1802 31.705 16.1239 31.93 16.0114L34.5738 14.3802C34.9675 14.1552 35.1925 13.7614 35.1925 13.3114C35.1925 12.8614 34.9675 12.4114 34.5738 12.1864Z"
                                    fill="white" />
                                <path
                                    d="M24.1675 20.624C24.3925 20.624 24.6175 20.5677 24.8425 20.4552L28.555 18.0927C29.1738 17.699 29.3425 16.9115 28.9488 16.349C28.555 15.7302 27.7675 15.5615 27.205 15.9552L23.4925 18.3177C22.8738 18.7115 22.705 19.499 23.0988 20.0615C23.3238 20.4552 23.7175 20.624 24.1675 20.624Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                            Real Time
                        </h4>
                        <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                            Reports related to donations and distribution are updated directly
                        </p>
                        <a href="javascript:void(0)"
                            class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12" data-wow-delay=".25s">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span
                                class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.355 2.0614H5.21129C3.29879 2.0614 1.72379 3.6364 1.72379 5.5489V12.6927C1.72379 14.6052 3.29879 16.1802 5.21129 16.1802H12.355C14.2675 16.1802 15.8425 14.6052 15.8425 12.6927V5.60515C15.8988 3.6364 14.3238 2.0614 12.355 2.0614ZM13.3675 12.7489C13.3675 13.3114 12.9175 13.7614 12.355 13.7614H5.21129C4.64879 13.7614 4.19879 13.3114 4.19879 12.7489V5.60515C4.19879 5.04265 4.64879 4.59265 5.21129 4.59265H12.355C12.9175 4.59265 13.3675 5.04265 13.3675 5.60515V12.7489Z"
                                    fill="white" />
                                <path
                                    d="M31.0863 2.0614H23.9425C22.03 2.0614 20.455 3.6364 20.455 5.5489V12.6927C20.455 14.6052 22.03 16.1802 23.9425 16.1802H31.0863C32.9988 16.1802 34.5738 14.6052 34.5738 12.6927V5.60515C34.5738 3.6364 32.9988 2.0614 31.0863 2.0614ZM32.0988 12.7489C32.0988 13.3114 31.6488 13.7614 31.0863 13.7614H23.9425C23.38 13.7614 22.93 13.3114 22.93 12.7489V5.60515C22.93 5.04265 23.38 4.59265 23.9425 4.59265H31.0863C31.6488 4.59265 32.0988 5.04265 32.0988 5.60515V12.7489Z"
                                    fill="white" />
                                <path
                                    d="M12.355 20.0051H5.21129C3.29879 20.0051 1.72379 21.5801 1.72379 23.4926V30.6364C1.72379 32.5489 3.29879 34.1239 5.21129 34.1239H12.355C14.2675 34.1239 15.8425 32.5489 15.8425 30.6364V23.5489C15.8988 21.5801 14.3238 20.0051 12.355 20.0051ZM13.3675 30.6926C13.3675 31.2551 12.9175 31.7051 12.355 31.7051H5.21129C4.64879 31.7051 4.19879 31.2551 4.19879 30.6926V23.5489C4.19879 22.9864 4.64879 22.5364 5.21129 22.5364H12.355C12.9175 22.5364 13.3675 22.9864 13.3675 23.5489V30.6926Z"
                                    fill="white" />
                                <path
                                    d="M31.0863 20.0051H23.9425C22.03 20.0051 20.455 21.5801 20.455 23.4926V30.6364C20.455 32.5489 22.03 34.1239 23.9425 34.1239H31.0863C32.9988 34.1239 34.5738 32.5489 34.5738 30.6364V23.5489C34.5738 21.5801 32.9988 20.0051 31.0863 20.0051ZM32.0988 30.6926C32.0988 31.2551 31.6488 31.7051 31.0863 31.7051H23.9425C23.38 31.7051 22.93 31.2551 22.93 30.6926V23.5489C22.93 22.9864 23.38 22.5364 23.9425 22.5364H31.0863C31.6488 22.5364 32.0988 22.9864 32.0988 23.5489V30.6926Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                            Education
                        </h4>
                        <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                            Illuminating Minds, Igniting Futures: Orbit Foundation's Education Empowerment.
                        </p>
                        <a href="javascript:void(0)"
                            class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ====== Features Section End  --}}

    {{-- donation section  --}}
    <section class="dark:bg-dark py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center mb-16">Latest to donate</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="https://telegra.ph/file/10de92fcc7e777fe4e74b.jpg" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Help flood victims in <br> Indonesia
                    </h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Help flood victims in Indonesia
                        by <br> donating sincerely, regardless of the...</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$25000</span></h6>

                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$21000</span></h6>
                    </div>

                    <div class="hidden md:block lg:flex items-center justify-between mb-8">
                        <div>
                            <div class="w-72 h-2 bg-violet-950 opacity-10 rounded-lg absolute"></div>

                            <div class="w-56 h-2 bg-violet-950 rounded-lg relative"></div>
                        </div>

                        <p class="font-light text-green-500 text-md">84%</p>
                    </div>

                    <button
                        class="w-full py-4 bg-violet-950 font-semibold text-white text-lg rounded-xl hover:bg-purple-800 transition ease-in-out duration-500">Donate</button>
                </div>

                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="https://telegra.ph/file/10de92fcc7e777fe4e74b.jpg" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Donation for COVID-19 in <br>
                        Indonesia</h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Donation for COVID-19 in
                        Indonesia by <br> donating sincerely, regardless of the...</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$24000</span></h6>

                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$19000</span></h6>
                    </div>

                    <div class="hidden md:block lg:flex items-center justify-between mb-8">
                        <div>
                            <div class="w-72 h-2 bg-violet-950 opacity-10 rounded-lg absolute"></div>

                            <div class="w-52 h-2 bg-violet-950 rounded-lg relative"></div>
                        </div>

                        <p class="font-light text-gray-900 text-md">80%</p>
                    </div>

                    <button
                        class="w-full py-4 bg-violet-950 font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                </div>

                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="https://telegra.ph/file/10de92fcc7e777fe4e74b.jpg" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Help homeless cat to find <br> home
                    </h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Help homeless cat and the
                        oether <br> animals by donating sincerely regar...</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$15000</span></h6>

                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$13000</span></h6>
                    </div>

                    <div class="hidden md:block lg:flex items-center justify-between mb-8">
                        <div>
                            <div class="w-72 h-2 bg-violet-950 opacity-10 rounded-lg absolute"></div>

                            <div class="w-60 h-2 bg-violet-950 rounded-lg relative"></div>
                        </div>

                        <p class="font-light text-gray-900 text-md">86%</p>
                    </div>

                    <button
                        class="w-full py-4 bg-violet-950 font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                </div>

                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="https://telegra.ph/file/10de92fcc7e777fe4e74b.jpg" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Help save poor children in <br>
                        Pakistan</h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Help save poor children in
                        Pakistas by <br> donating sincerely, regardless of the...</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$75000</span></h6>

                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$50000</span></h6>
                    </div>

                    <div class="hidden md:block lg:flex items-center justify-between mb-8">
                        <div>
                            <div class="w-72 h-2 bg-violet-950 opacity-10 rounded-lg absolute"></div>

                            <div class="w-48 h-2 bg-violet-950 rounded-lg relative"></div>
                        </div>

                        <p class="font-light text-gray-900 text-md">66%</p>
                    </div>

                    <button
                        class="w-full py-4 bg-violet-950 font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                </div>

                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="https://telegra.ph/file/10de92fcc7e777fe4e74b.jpg" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Lifeskills for children in <br> South
                        Africa</h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Donating for children in South
                        Africa <br> by donating sincerely, regardless of...</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$45000</span></h6>

                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$22500</span></h6>
                    </div>

                    <div class="hidden md:block lg:flex items-center justify-between mb-8">
                        <div>
                            <div class="w-72 h-2 bg-violet-950 opacity-10 rounded-lg absolute"></div>

                            <div class="w-36 h-2 bg-violet-950 rounded-lg relative"></div>
                        </div>

                        <p class="font-light text-gray-900 text-md">50%</p>
                    </div>

                    <button
                        class="w-full py-4 bg-violet-950 font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                </div>

                <div class="px-6 py-6 w-full border-2 border-gray-200 rounded-3xl">
                    <img src="https://telegra.ph/file/10de92fcc7e777fe4e74b.jpg" alt="Image"
                        class="mb-6 hover:opacity-75 transition ease-in-out duration-500">

                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl mb-6">Help donate for children <br> with
                        cancer</h4>

                    <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">Help donate for the children
                        with <br> cancer by donating sincerely, regar...</p>

                    <div class="flex items-center justify-between mb-8">
                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Goals : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$50000</span></h6>

                        <h6 class="font-light text-gray-400 text-sm md:text-lg">Raised : <span
                                class="font-semibold text-gray-900 text-md md:text-lg">$13000</span></h6>
                    </div>

                    <div class="hidden md:block lg:flex items-center justify-between mb-8">
                        <div>
                            <div class="w-72 h-2 bg-violet-950 opacity-10 rounded-lg absolute"></div>

                            <div class="w-20 h-2 bg-violet-950 rounded-lg relative"></div>
                        </div>

                        <p class="font-light text-gray-900 text-md">26%</p>
                    </div>

                    <button
                        class="w-full py-4 bg-violet-950 font-semibold text-white text-lg rounded-xl hover:bg-blue-800 transition ease-in-out duration-500">Donate</button>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <button
                    class="px-7 py-5 font-semibold bg-gray-100 text-gray-900 rounded-2xl hover:bg-gray-300 hover:text-gray-600 transition ease-in-out duration-500">More
                    to donate</button>
            </div>

        </div>

    </section>
    {{-- donation section end  --}}

    {{-- ====== FAQ Section Start  --}}
    <section class="relative z-20 overflow-hidden  pb-8 pt-20 dark:bg-dark lg:pb-[50px] lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[520px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            FAQ
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                            Any Questions? Look Here
                        </h2>
                        <p class="mx-auto max-w-[485px] text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute left-4 top-4 -z-[1]">
                <svg width="48" height="134" viewBox="0 0 48 134" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="73.3335" r="1.66667" transform="rotate(180 45.6673 73.3335)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="132" r="1.66667" transform="rotate(180 31.0013 132)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="117.333" r="1.66667" transform="rotate(180 31.0013 117.333)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="102.667" r="1.66667" transform="rotate(180 31.0013 102.667)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="88.0001" r="1.66667" transform="rotate(180 31.0013 88.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="73.3335" r="1.66667" transform="rotate(180 31.0013 73.3335)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="45.0001" r="1.66667" transform="rotate(180 31.0013 45.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="16.0001" r="1.66667" transform="rotate(180 31.0013 16.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="59.0001" r="1.66667" transform="rotate(180 31.0013 59.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="30.6668" r="1.66667" transform="rotate(180 31.0013 30.6668)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="1.66683" r="1.66667" transform="rotate(180 31.0013 1.66683)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="132" r="1.66667" transform="rotate(180 16.3333 132)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="117.333" r="1.66667" transform="rotate(180 16.3333 117.333)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="102.667" r="1.66667" transform="rotate(180 16.3333 102.667)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="88.0001" r="1.66667" transform="rotate(180 16.3333 88.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="73.3335" r="1.66667" transform="rotate(180 16.3333 73.3335)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="45.0001" r="1.66667" transform="rotate(180 16.3333 45.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="16.0001" r="1.66667" transform="rotate(180 16.3333 16.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="59.0001" r="1.66667" transform="rotate(180 16.3333 59.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="30.6668" r="1.66667" transform="rotate(180 16.3333 30.6668)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(180 16.3333 1.66683)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="73.3335" r="1.66667" transform="rotate(180 1.66732 73.3335)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)"
                        fill="#13C296" />
                </svg>
            </span>
            <span class="absolute bottom-4 right-4 -z-[1]">
                <svg width="48" height="134" viewBox="0 0 48 134" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="73.3333" r="1.66667" transform="rotate(180 45.6673 73.3333)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="132" r="1.66667" transform="rotate(180 31.0006 132)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="117.333" r="1.66667" transform="rotate(180 31.0006 117.333)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="102.667" r="1.66667" transform="rotate(180 31.0006 102.667)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="88.0001" r="1.66667" transform="rotate(180 31.0006 88.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="73.3333" r="1.66667" transform="rotate(180 31.0008 73.3333)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="45.0001" r="1.66667" transform="rotate(180 31.0008 45.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="16.0001" r="1.66667" transform="rotate(180 31.0008 16.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="59.0001" r="1.66667" transform="rotate(180 31.0008 59.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="30.6668" r="1.66667" transform="rotate(180 31.0008 30.6668)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="1.66683" r="1.66667" transform="rotate(180 31.0008 1.66683)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="132" r="1.66667" transform="rotate(180 16.3341 132)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="117.333" r="1.66667" transform="rotate(180 16.3341 117.333)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="102.667" r="1.66667" transform="rotate(180 16.3341 102.667)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="88.0001" r="1.66667" transform="rotate(180 16.3341 88.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="73.3333" r="1.66667" transform="rotate(180 16.3338 73.3333)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="45.0001" r="1.66667" transform="rotate(180 16.3338 45.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="16.0001" r="1.66667" transform="rotate(180 16.3338 16.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="59.0001" r="1.66667" transform="rotate(180 16.3338 59.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="30.6668" r="1.66667" transform="rotate(180 16.3338 30.6668)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="1.66683" r="1.66667" transform="rotate(180 16.3338 1.66683)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="73.3333" r="1.66667" transform="rotate(180 1.66732 73.3333)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)"
                        fill="#3758F9" />
                </svg>
            </span>
        </div>
    </section>
    {{-- ====== FAQ Section End  --}}

    {{-- ====== Team Section Start  --}}
    <section id="team" class="overflow-hidden bg-gray-1 pb-12 pt-20 dark:bg-dark-2 lg:pb-[90px] lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Our Team Members
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                            Our Creative Team
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div class="group mb-8 rounded-xl  px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="./assets/images/team/team-01.png" alt="team image"
                                class="h-[120px] w-[120px] rounded-full" />
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <svg width="55" height="53" viewBox="0 0 55 53" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 3.1009C13.3681 3.1009 14.0622 2.40674 14.0622 1.55045C14.0622 0.69416 13.3681 0 12.5118 0C11.6555 0 10.9613 0.69416 10.9613 1.55045C10.9613 2.40674 11.6555 3.1009 12.5118 3.1009Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 3.1009C23.3601 3.1009 24.0543 2.40674 24.0543 1.55045C24.0543 0.69416 23.3601 0 22.5038 0C21.6475 0 20.9534 0.69416 20.9534 1.55045C20.9534 2.40674 21.6475 3.1009 22.5038 3.1009Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 3.1009C33.3521 3.1009 34.0463 2.40674 34.0463 1.55045C34.0463 0.69416 33.3521 0 32.4958 0C31.6395 0 30.9454 0.69416 30.9454 1.55045C30.9454 2.40674 31.6395 3.1009 32.4958 3.1009Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 3.1009C43.3438 3.1009 44.038 2.40674 44.038 1.55045C44.038 0.69416 43.3438 0 42.4875 0C41.6312 0 40.9371 0.69416 40.9371 1.55045C40.9371 2.40674 41.6312 3.1009 42.4875 3.1009Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 3.1009C53.3358 3.1009 54.03 2.40674 54.03 1.55045C54.03 0.69416 53.3358 0 52.4795 0C51.6233 0 50.9291 0.69416 50.9291 1.55045C50.9291 2.40674 51.6233 3.1009 52.4795 3.1009Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.52045 13.0804C3.37674 13.0804 4.0709 12.3862 4.0709 11.5299C4.0709 10.6737 3.37674 9.97949 2.52045 9.97949C1.66416 9.97949 0.970001 10.6737 0.970001 11.5299C0.970001 12.3862 1.66416 13.0804 2.52045 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 13.0804C13.3681 13.0804 14.0622 12.3862 14.0622 11.5299C14.0622 10.6737 13.3681 9.97949 12.5118 9.97949C11.6555 9.97949 10.9613 10.6737 10.9613 11.5299C10.9613 12.3862 11.6555 13.0804 12.5118 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 13.0804C23.3601 13.0804 24.0543 12.3862 24.0543 11.5299C24.0543 10.6737 23.3601 9.97949 22.5038 9.97949C21.6475 9.97949 20.9534 10.6737 20.9534 11.5299C20.9534 12.3862 21.6475 13.0804 22.5038 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 13.0804C33.3521 13.0804 34.0463 12.3862 34.0463 11.5299C34.0463 10.6737 33.3521 9.97949 32.4958 9.97949C31.6395 9.97949 30.9454 10.6737 30.9454 11.5299C30.9454 12.3862 31.6395 13.0804 32.4958 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 13.0804C43.3438 13.0804 44.038 12.3862 44.038 11.5299C44.038 10.6737 43.3438 9.97949 42.4875 9.97949C41.6312 9.97949 40.9371 10.6737 40.9371 11.5299C40.9371 12.3862 41.6312 13.0804 42.4875 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 13.0804C53.3358 13.0804 54.03 12.3862 54.03 11.5299C54.03 10.6737 53.3358 9.97949 52.4795 9.97949C51.6233 9.97949 50.9291 10.6737 50.9291 11.5299C50.9291 12.3862 51.6233 13.0804 52.4795 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.52045 23.0604C3.37674 23.0604 4.0709 22.3662 4.0709 21.5099C4.0709 20.6536 3.37674 19.9595 2.52045 19.9595C1.66416 19.9595 0.970001 20.6536 0.970001 21.5099C0.970001 22.3662 1.66416 23.0604 2.52045 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 23.0604C13.3681 23.0604 14.0622 22.3662 14.0622 21.5099C14.0622 20.6536 13.3681 19.9595 12.5118 19.9595C11.6555 19.9595 10.9613 20.6536 10.9613 21.5099C10.9613 22.3662 11.6555 23.0604 12.5118 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 23.0604C23.3601 23.0604 24.0543 22.3662 24.0543 21.5099C24.0543 20.6536 23.3601 19.9595 22.5038 19.9595C21.6475 19.9595 20.9534 20.6536 20.9534 21.5099C20.9534 22.3662 21.6475 23.0604 22.5038 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 23.0604C33.3521 23.0604 34.0463 22.3662 34.0463 21.5099C34.0463 20.6536 33.3521 19.9595 32.4958 19.9595C31.6395 19.9595 30.9454 20.6536 30.9454 21.5099C30.9454 22.3662 31.6395 23.0604 32.4958 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 23.0604C43.3438 23.0604 44.038 22.3662 44.038 21.5099C44.038 20.6536 43.3438 19.9595 42.4875 19.9595C41.6312 19.9595 40.9371 20.6536 40.9371 21.5099C40.9371 22.3662 41.6312 23.0604 42.4875 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 23.0604C53.3358 23.0604 54.03 22.3662 54.03 21.5099C54.03 20.6536 53.3358 19.9595 52.4795 19.9595C51.6233 19.9595 50.9291 20.6536 50.9291 21.5099C50.9291 22.3662 51.6233 23.0604 52.4795 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.52045 33.0404C3.37674 33.0404 4.0709 32.3462 4.0709 31.4899C4.0709 30.6336 3.37674 29.9395 2.52045 29.9395C1.66416 29.9395 0.970001 30.6336 0.970001 31.4899C0.970001 32.3462 1.66416 33.0404 2.52045 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 33.0404C13.3681 33.0404 14.0622 32.3462 14.0622 31.4899C14.0622 30.6336 13.3681 29.9395 12.5118 29.9395C11.6555 29.9395 10.9613 30.6336 10.9613 31.4899C10.9613 32.3462 11.6555 33.0404 12.5118 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 33.0404C23.3601 33.0404 24.0543 32.3462 24.0543 31.4899C24.0543 30.6336 23.3601 29.9395 22.5038 29.9395C21.6475 29.9395 20.9534 30.6336 20.9534 31.4899C20.9534 32.3462 21.6475 33.0404 22.5038 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 33.0404C33.3521 33.0404 34.0463 32.3462 34.0463 31.4899C34.0463 30.6336 33.3521 29.9395 32.4958 29.9395C31.6395 29.9395 30.9454 30.6336 30.9454 31.4899C30.9454 32.3462 31.6395 33.0404 32.4958 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 33.0404C43.3438 33.0404 44.038 32.3462 44.038 31.4899C44.038 30.6336 43.3438 29.9395 42.4875 29.9395C41.6312 29.9395 40.9371 30.6336 40.9371 31.4899C40.9371 32.3462 41.6312 33.0404 42.4875 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 33.0404C53.3358 33.0404 54.03 32.3462 54.03 31.4899C54.03 30.6336 53.3358 29.9395 52.4795 29.9395C51.6233 29.9395 50.9291 30.6336 50.9291 31.4899C50.9291 32.3462 51.6233 33.0404 52.4795 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.52045 43.0203C3.37674 43.0203 4.0709 42.3262 4.0709 41.4699C4.0709 40.6136 3.37674 39.9194 2.52045 39.9194C1.66416 39.9194 0.970001 40.6136 0.970001 41.4699C0.970001 42.3262 1.66416 43.0203 2.52045 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 43.0203C13.3681 43.0203 14.0622 42.3262 14.0622 41.4699C14.0622 40.6136 13.3681 39.9194 12.5118 39.9194C11.6555 39.9194 10.9613 40.6136 10.9613 41.4699C10.9613 42.3262 11.6555 43.0203 12.5118 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 43.0203C23.3601 43.0203 24.0543 42.3262 24.0543 41.4699C24.0543 40.6136 23.3601 39.9194 22.5038 39.9194C21.6475 39.9194 20.9534 40.6136 20.9534 41.4699C20.9534 42.3262 21.6475 43.0203 22.5038 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 43.0203C33.3521 43.0203 34.0463 42.3262 34.0463 41.4699C34.0463 40.6136 33.3521 39.9194 32.4958 39.9194C31.6395 39.9194 30.9454 40.6136 30.9454 41.4699C30.9454 42.3262 31.6395 43.0203 32.4958 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 43.0203C43.3438 43.0203 44.038 42.3262 44.038 41.4699C44.038 40.6136 43.3438 39.9194 42.4875 39.9194C41.6312 39.9194 40.9371 40.6136 40.9371 41.4699C40.9371 42.3262 41.6312 43.0203 42.4875 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 43.0203C53.3358 43.0203 54.03 42.3262 54.03 41.4699C54.03 40.6136 53.3358 39.9194 52.4795 39.9194C51.6233 39.9194 50.9291 40.6136 50.9291 41.4699C50.9291 42.3262 51.6233 43.0203 52.4795 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.52045 53.0001C3.37674 53.0001 4.0709 52.3059 4.0709 51.4496C4.0709 50.5933 3.37674 49.8992 2.52045 49.8992C1.66416 49.8992 0.970001 50.5933 0.970001 51.4496C0.970001 52.3059 1.66416 53.0001 2.52045 53.0001Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 53.0001C13.3681 53.0001 14.0622 52.3059 14.0622 51.4496C14.0622 50.5933 13.3681 49.8992 12.5118 49.8992C11.6555 49.8992 10.9613 50.5933 10.9613 51.4496C10.9613 52.3059 11.6555 53.0001 12.5118 53.0001Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 53.0001C23.3601 53.0001 24.0543 52.3059 24.0543 51.4496C24.0543 50.5933 23.3601 49.8992 22.5038 49.8992C21.6475 49.8992 20.9534 50.5933 20.9534 51.4496C20.9534 52.3059 21.6475 53.0001 22.5038 53.0001Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 53.0001C33.3521 53.0001 34.0463 52.3059 34.0463 51.4496C34.0463 50.5933 33.3521 49.8992 32.4958 49.8992C31.6395 49.8992 30.9454 50.5933 30.9454 51.4496C30.9454 52.3059 31.6395 53.0001 32.4958 53.0001Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 53.0001C43.3438 53.0001 44.038 52.3059 44.038 51.4496C44.038 50.5933 43.3438 49.8992 42.4875 49.8992C41.6312 49.8992 40.9371 50.5933 40.9371 51.4496C40.9371 52.3059 41.6312 53.0001 42.4875 53.0001Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 53.0001C53.3358 53.0001 54.03 52.3059 54.03 51.4496C54.03 50.5933 53.3358 49.8992 52.4795 49.8992C51.6233 49.8992 50.9291 50.5933 50.9291 51.4496C50.9291 52.3059 51.6233 53.0001 52.4795 53.0001Z"
                                        fill="#3758F9" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                Melissa Tatcher
                            </h4>
                            <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                Marketing Expert
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill="" />
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill="" />
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill="" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div class="group mb-8 rounded-xl  px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/image-02.png"
                                alt="team image" class="h-[120px] w-[120px] rounded-full" />
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <svg width="45" height="53" viewBox="0 0 45 53" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                        fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                Stuard Ferrel
                            </h4>
                            <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                Digital Marketer
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill="" />
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill="" />
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill="" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div class="group mb-8 rounded-xl  px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/image-03.png"
                                alt="team image" class="h-[120px] w-[120px] rounded-full" />
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <svg width="45" height="53" viewBox="0 0 45 53" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                        fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                Eva Hudson
                            </h4>
                            <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                Creative Designer
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill="" />
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill="" />
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill="" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div class="group mb-8 rounded-xl  px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/image-04.png"
                                alt="team image" class="h-[120px] w-[120px] rounded-full" />
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <svg width="45" height="53" viewBox="0 0 45 53" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                        fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                Jackie Sanders
                            </h4>
                            <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                SEO Expert
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill="" />
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill="" />
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill="" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ====== Team Section End  --}}

    {{-- ====== Blog Section Start  --}}
    <section class="  dark:bg-dark ">
        <div class="relative pt-2 lg:pt-2 min-h-screen">

            <div class="bg-cover w-full flex justify-center items-center"
                style="background-image: url('/images/mybackground.jpeg');">
                <div class="w-full  p-5  bg-opacity-40 backdrop-filter backdrop-blur-lg">
                    <div class="w-12/12 mx-auto rounded-2xl  p-5 bg-opacity-40 backdrop-filter backdrop-blur-lg">

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 text-center px-2 mx-auto">

                            <article
                                class="  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                                <a target="_self" href="/blog/slug"
                                    class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                                <div class="relative mb-4 rounded-2xl">
                                    <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"
                                        src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                        alt="">
                                    <div
                                        class="absolute bottom-3 left-3 inline-flex items-center rounded-lg  p-2 shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="h-5 w-5 text-red-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                        <span class="ml-1 text-sm text-slate-400">2</span>

                                    </div>

                                    <a class="flex justify-center items-center bg-gray-400 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"
                                        href="/blog/slug" target="_self" rel="noopener noreferrer">
                                        Read article
                                        <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex justify-between items-center w-full pb-4 mb-auto">
                                    <div class="flex items-center">
                                        <div class="pr-3">
                                            <img class="h-12 w-12 rounded-full object-cover"
                                                src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="">
                                        </div>
                                        <div class="flex flex-1">
                                            <div class="">
                                                <p class="text-sm font-semibold ">Morris Muthigani</p>
                                                <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end">
                                        <div class="text-sm flex items-center text-gray-500 ">
                                            2 Days ago
                                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="font-medium text-xl leading-8">
                                    <a href="/blog/slug"
                                        class="block relative group-hover:text-red-700 transition-colors duration-200 ">
                                        Instant Help at Your Fingertips
                                    </a>
                                </h3>
                                <div>
                                </div>
                            </article>

                            <article
                                class="  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                                <a target="_self" href="/blog/slug"
                                    class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                                <div class="relative mb-4 rounded-2xl">
                                    <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"
                                        src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                        alt="">
                                    <div
                                        class="absolute bottom-3 left-3 inline-flex items-center rounded-lg  p-2 shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="h-5 w-5 text-red-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                        <span class="ml-1 text-sm text-slate-400">2</span>

                                    </div>

                                    <a class="flex justify-center items-center bg-gray-400 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"
                                        href="/blog/slug" target="_self" rel="noopener noreferrer">
                                        Read article
                                        <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex justify-between items-center w-full pb-4 mb-auto">
                                    <div class="flex items-center">
                                        <div class="pr-3">
                                            <img class="h-12 w-12 rounded-full object-cover"
                                                src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="">
                                        </div>
                                        <div class="flex flex-1">
                                            <div class="">
                                                <p class="text-sm font-semibold ">Morris Muthigani</p>
                                                <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end">
                                        <div class="text-sm flex items-center text-gray-500 ">
                                            2 Days ago
                                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="font-medium text-xl leading-8">
                                    <a href="/blog/slug"
                                        class="block relative group-hover:text-red-700 transition-colors duration-200 ">
                                        Instant Help at Your Fingertips
                                    </a>
                                </h3>
                                <div>
                                </div>
                            </article>

                            <article
                                class="  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                                <a target="_self" href="/blog/slug"
                                    class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                                <div class="relative mb-4 rounded-2xl">
                                    <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"
                                        src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                        alt="">
                                    <div
                                        class="absolute bottom-3 left-3 inline-flex items-center rounded-lg  p-2 shadow-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="h-5 w-5 text-red-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                        <span class="ml-1 text-sm text-slate-400">2</span>

                                    </div>

                                    <a class="flex justify-center items-center bg-gray-400 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"
                                        href="/blog/slug" target="_self" rel="noopener noreferrer">
                                        Read article
                                        <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex justify-between items-center w-full pb-4 mb-auto">
                                    <div class="flex items-center">
                                        <div class="pr-3">
                                            <img class="h-12 w-12 rounded-full object-cover"
                                                src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="">
                                        </div>
                                        <div class="flex flex-1">
                                            <div class="">
                                                <p class="text-sm font-semibold ">Morris Muthigani</p>
                                                <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end">
                                        <div class="text-sm flex items-center text-gray-500 ">
                                            2 Days ago
                                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="font-medium text-xl leading-8">
                                    <a href="/blog/slug"
                                        class="block relative group-hover:text-red-700 transition-colors duration-200 ">
                                        Instant Help at Your Fingertips
                                    </a>
                                </h3>
                                <div>
                                </div>
                            </article>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ====== Blog Section End  --}}


    {{-- Testimonials Section start --}}
    <section class="py-4 dark:bg-dark">
        <div class="container">


            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Testimonials
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                            What our Clients Say
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <div id="swiper_Two" class="swiper">

                    <div class="swiper-wrapper mb-20">
                        <div class="swiper-slide">
                            <div class="rounded-xl  px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-01.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark dark:text-white">
                                            Sabo Masties
                                        </h3>
                                        <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl  px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-02.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark dark:text-white">
                                            Musharof Chowdhury
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Ayro UI
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl  px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-03.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark dark:text-white">
                                            William Smith
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Trorex
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl  px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-01.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark dark:text-white">
                                            Sabo Masties
                                        </h3>
                                        <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl  px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-02.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark dark:text-white">
                                            Musharof Chowdhury
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Ayro UI
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl  px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-03.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark dark:text-white">
                                            William Smith
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Trorex
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>

                </div>
            </div>


        </div>
    </section>
    {{-- Testimonials Section start --}}


    {{-- Brands Section Start --}}
    <div class=" dark:bg-dark relative flex overflow-x-hidden">
        <div class="py-12 animate-marquee whitespace-nowrap">
            <span class="text-4xl mx-4">Marquee Item 1</span>
            <span class="text-4xl mx-4">Marquee Item 2</span>
            <span class="text-4xl mx-4">Marquee Item 3</span>
            <span class="text-4xl mx-4">Marquee Item 4</span>
            <span class="text-4xl mx-4">Marquee Item 5</span>
        </div>

        <div class="absolute top-0 py-12 animate-marquee2 whitespace-nowrap">
            <span class="text-4xl mx-4">Marquee Item 1</span>
            <span class="text-4xl mx-4">Marquee Item 2</span>
            <span class="text-4xl mx-4">Marquee Item 3</span>
            <span class="text-4xl mx-4">Marquee Item 4</span>
            <span class="text-4xl mx-4">Marquee Item 5</span>
        </div>
    </div>
    {{-- Brands Section End --}}
@endsection
