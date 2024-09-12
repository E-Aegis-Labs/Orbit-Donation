<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    @include('view.components.meta')
    <!-- All CSS -->
    @include('view.layouts.styles')
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- ==== WOW JS ==== -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <script>
        new WOW().init();
    </script>

</head>

<body>



    <!-- Header Section Start -->
    <x-navbar>

    </x-navbar>



    @yield('main_content')


    <!-- ====== Footer Section Start -->
    <x-footer />
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a href="javascript:void(0)"
        class="back-to-top fixed bottom-8 left-auto right-8 z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-lime-700 text-green-600 shadow-md transition duration-300 ease-in-out hover:bg-green">
        <span class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-pink-200"></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== Made With Button Start -->

    <!-- ====== Made With Button End -->

    <!-- All Javascripts -->
    @include('view.layouts.scripts')

</body>

</html>
