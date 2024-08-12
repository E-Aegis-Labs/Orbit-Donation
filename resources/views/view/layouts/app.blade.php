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
    <a target="_blank" rel="nofollow noopener"
        class="fixed bottom-8 left-4 z-[999] inline-flex items-center gap-[10px] rounded-lg  px-[14px] py-2 shadow-2 dark:bg-dark-2 sm:left-9"
        href="https://codecanyon.net/user/daveinc022">
        <span class="text-base font-medium text-dark-3 dark:text-dark-6">
            OrbitScripts
        </span>
        <span class="block h-4 w-px bg-stroke dark:bg-dark-3"></span>
        <span class="block w-full max-w-[88px]">
            <img src="./assets/images/brands/orbitlogo.svg" alt="" class="dark:hidden" />
            <img src="./assets/images/brands/orbitlogo.svg" alt="" class="hidden dark:block" />
        </span>
    </a>
    <!-- ====== Made With Button End -->

    <!-- All Javascripts -->
    @include('view.layouts.scripts')

    <!-- Start of OpenWidget (www.openwidget.com) code -->
    <script>
        window.__ow = window.__ow || {};
        window.__ow.organizationId = "52eb2888-332d-47e0-8baa-6b6b8bc7740f";
        window.__ow.integration_name = "manual_settings";
        window.__ow.product_name = "openwidget";;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[OpenWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src =
                        "https://cdn.openwidget.com/openwidget.js", t.head.appendChild(n)
                }
            };
            !n.__ow.asyncInit && e.init(), n.OpenWidget = n.OpenWidget || e
        }(window, document, [].slice))
    </script>
    <noscript>You need to <a href="https://www.openwidget.com/enable-javascript" rel="noopener nofollow">enable
            JavaScript</a> to use the communication tool powered by <a href="https://www.openwidget.com/"
            rel="noopener nofollow" target="_blank">OpenWidget</a></noscript>
    <!-- End of OpenWidget code -->

</body>

</html>
