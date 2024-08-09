<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    @include('frontend.components.meta')
    <!-- All CSS -->
    @include('frontend.layouts.styles')
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
    @include('frontend.layouts.nav')


    @yield('main_content')


    <!-- ====== Footer Section Start -->
    @include('frontend.layouts.footer')
    <!-- ====== Footer Section End -->

        <!-- ====== Back To Top Start -->
        <a
        href="javascript:void(0)"
        class="back-to-top fixed bottom-8 left-auto right-8 z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-lime-700 text-green-600 shadow-md transition duration-300 ease-in-out hover:bg-green">
        <span
          class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-pink-200"
        ></span>
      </a>
      <!-- ====== Back To Top End -->
  
      <!-- ====== Made With Button Start -->
      <a
        target="_blank"
        rel="nofollow noopener"
        class="fixed bottom-8 left-4 z-[999] inline-flex items-center gap-[10px] rounded-lg  px-[14px] py-2 shadow-2 dark:bg-dark-2 sm:left-9"
        href="https://codecanyon.net/user/daveinc022">
        <span class="text-base font-medium text-dark-3 dark:text-dark-6">
          OrbitScripts
        </span>
        <span class="block h-4 w-px bg-stroke dark:bg-dark-3"></span>
        <span class="block w-full max-w-[88px]">
          <img
            src="./assets/images/brands/orbitlogo.svg"
            alt=""
            class="dark:hidden"
          />
          <img
            src="./assets/images/brands/orbitlogo.svg"
            alt=""
            class="hidden dark:block"
          />
        </span>
      </a>
      <!-- ====== Made With Button End -->

    <!-- All Javascripts -->
    @include('frontend.layouts.scripts')

</body>
</html>
