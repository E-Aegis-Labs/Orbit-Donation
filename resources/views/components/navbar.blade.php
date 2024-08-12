  <!-- ====== Navbar Section Start -->
  <nav>
      <div id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-transform duration-300 ease-in-out">
          <div class="grid xl:grid-cols-1 grid-cols-1">
              <div class="p-2">
                  <div
                      class="py-1 px-1 rounded-xl border w-full bg-gradient-to-r from-emerald-500 via-violet-600 to-emerald-900 header">
                      <!-- Your existing navbar content goes here -->
                      <div class="grid xl:grid-cols-1 grid-cols-1">
                          <div class="p-5">
                              <div
                                  class="py-3 px-3 rounded-xl border w-full bg-gradient-to-r from-emerald-500 via-violet-600 to-emerald-900 header">
                                  <div class="flex justify-between items-center">
                                      <div class="flex justify-items-center items-center gap-2">
                                          <div class="lg:hidden">
                                              <button
                                                  class="navbar-burger flex items-center text-violet-600 dark:text-gray-100 p-1"
                                                  id="navbar_burger">
                                                  <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <title>Hamberger menu</title>
                                                      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                                                  </svg>
                                              </button>
                                          </div>


                                          <div class="flex justify-center">
                                              <img src="{{ asset('assets/images/logo/front-logo.png') }}" alt="Logo"
                                                  class="w-40 max-w-xs mx-auto">
                                          </div>


                                          <div style="position: relative;">
                                              <input
                                                  class="rounded-3xl py-3 px-3 outline-none text-xs w-[350px] pr-10 hidden lg:block md:block"
                                                  placeholder="Search for Grocery, Stores, Vegetable, or Meat">
                                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                  stroke-width="1.5" stroke="currentColor"
                                                  class="w-5 h-5 text-green-900 absolute right-3 top-1/2 transform -translate-y-1/2 hidden lg:block md:block">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                              </svg>
                                          </div>

                                      </div>
                                      <ul
                                          class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">

                                          <li>

                                          </li>
                                      </ul>


                                      <div class="hidden lg:flex">

                                          <button id="theme-toggle" type="button"
                                              class="hidden lg:inline-block lg:ml-auto py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700">
                                              <svg id="theme-toggle-dark-icon" class="w-5 h-6 hidden"
                                                  fill="currentColor" viewBox="0 0 20 20"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                                  </path>
                                              </svg>
                                              <svg id="theme-toggle-light-icon" class="w-5 h-6 hidden"
                                                  fill="currentColor" viewBox="0 0 20 20"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                      fill-rule="evenodd" clip-rule="evenodd"></path>
                                              </svg>
                                          </button>

                                          <!-- Settings Dropdown -->
                                          @if (Route::has('login'))
                                              <nav class="-mx-3 flex flex-1 justify-end">
                                                  @auth
                                                      <a href="{{ Auth::check()
                                                          ? (Auth::user()->role === 'admin'
                                                              ? route('Shield.dashboard', ['prefix' => config('app.shield_route_prefix')])
                                                              : (Auth::user()->role === 'volunteer'
                                                                  ? route('User.dashboard', ['prefix' => config('app.user_route_prefix')])
                                                                  : '#'))
                                                          : '#' }}"
                                                          class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                          Dashboard
                                                      </a>
                                                  @else
                                                      <a href="{{ route('login') }}"
                                                          class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                          Log in
                                                      </a>

                                                      @if (Route::has('register'))
                                                          <a href="{{ route('register') }}"
                                                              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                              Register
                                                          </a>
                                                      @endif
                                                  @endauth
                                              </nav>
                                          @endif



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
  </nav>
  <!-- ====== Navbar Section End -->


  <!-- mobile navbar -->
  <div class="navbar-menu relative z-50 hidden">
      <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-50"></div>
      <nav
          class="fixed bg-white dark:bg-gray-600 top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 border-r overflow-y-auto">

          <div class="flex items-center mb-8">
       

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
                  class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none dark:placeholder-gray-200 dark:bg-gray-500 dark:border-gray-50"
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
                      class=" py-2.5 w-[97.6%] mb-3 rounded-xl flex justify-center align-middle py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700">
                      <svg id="theme-toggle-dark-icon-2" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                      </svg>
                      <svg id="theme-toggle-light-icon-2" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                              fill-rule="evenodd" clip-rule="evenodd"></path>
                      </svg>
                  </button>
{{-- 
         sigin in & login buttons  --}}

              </div>
              <p class="my-4 text-xs text-center text-gray-400">
                  <span>TailwindFlex Copyright © 2023</span>
              </p>
          </div>
      </nav>
  </div>





  <script>
      if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
              '(prefers-color-scheme: dark)').matches)) {
          document.documentElement.classList.add('dark');
      } else {
          document.documentElement.classList.remove('dark');
      }


      var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
      var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

      var themeToggleDarkIcon_2 = document.getElementById('theme-toggle-dark-icon-2');
      var themeToggleLightIcon_2 = document.getElementById('theme-toggle-light-icon-2');

      // Change the icons inside the button based on previous settings
      if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
              '(prefers-color-scheme: dark)').matches)) {
          themeToggleLightIcon.classList.remove('hidden');
          if (themeToggleDarkIcon_2) {
              themeToggleLightIcon_2.classList.remove('hidden');
          }
      } else {
          themeToggleDarkIcon.classList.remove('hidden');
          if (themeToggleDarkIcon_2) {
              themeToggleDarkIcon_2.classList.remove('hidden');
          }
      }


      var themeToggleBtn_2 = document.getElementById('theme-toggle-2');
      if (themeToggleBtn_2) {

          themeToggleBtn_2.addEventListener('click', function() {

              // toggle icons inside button
              themeToggleDarkIcon_2.classList.toggle('hidden');
              themeToggleLightIcon_2.classList.toggle('hidden');

              sync_theme()

          });
      }


      var themeToggleBtn = document.getElementById('theme-toggle');

      themeToggleBtn.addEventListener('click', function() {

          // toggle icons inside button
          themeToggleDarkIcon.classList.toggle('hidden');
          themeToggleLightIcon.classList.toggle('hidden');

          sync_theme()


      });


      function sync_theme() {
          // if set via local storage previously
          if (localStorage.getItem('color-theme')) {
              if (localStorage.getItem('color-theme') === 'light') {
                  document.documentElement.classList.add('dark');
                  localStorage.setItem('color-theme', 'dark');
              } else {
                  document.documentElement.classList.remove('dark');
                  localStorage.setItem('color-theme', 'light');
              }
              // if NOT set via local storage previously
          } else {
              if (document.documentElement.classList.contains('dark')) {
                  document.documentElement.classList.remove('dark');
                  localStorage.setItem('color-theme', 'light');
              } else {
                  document.documentElement.classList.add('dark');
                  localStorage.setItem('color-theme', 'dark');
              }
          }

      }



      document.addEventListener('DOMContentLoaded', function() {
          // open
          const burger = document.querySelectorAll('.navbar-burger');
          const menu = document.querySelectorAll('.navbar-menu');

          if (burger.length && menu.length) {
              for (var i = 0; i < burger.length; i++) {
                  burger[i].addEventListener('click', function() {
                      for (var j = 0; j < menu.length; j++) {
                          menu[j].classList.toggle('hidden');
                      }
                  });
              }
          }

          // close
          const close = document.querySelectorAll('.navbar-close');
          const backdrop = document.querySelectorAll('.navbar-backdrop');

          if (close.length) {
              for (var i = 0; i < close.length; i++) {
                  close[i].addEventListener('click', function() {
                      for (var j = 0; j < menu.length; j++) {
                          menu[j].classList.toggle('hidden');
                      }
                  });
              }
          }


          if (backdrop.length) {
              for (var i = 0; i < backdrop.length; i++) {
                  backdrop[i].addEventListener('click', function() {
                      for (var j = 0; j < menu.length; j++) {
                          menu[j].classList.toggle('hidden');
                      }
                  });
              }
          }
      });
  </script>