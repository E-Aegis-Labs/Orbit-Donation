@extends('frontend.layouts.app')

@section('main_content')
    <section class="bg-white">
        <div
            class="max-w-screen-xl 2xl:max-w-screen-2xl px-8 md:px-12 mx-auto py-12 lg:py-24 space-y-24 flex flex-col justify-center lg:h-screen">
            <!-- Starts component -->
            <div class="flex justify-center" x-data="{ open: false }">
                <!-- Trigger --> 
                <span x-on:click="open = true"> <button type="button"
                        class="flex items-center 2xl:text-xl 2xl:h-12 justify-center h-10 px-4 py-2 text-base font-semibold text-white transition-all duration-200 rounded-full bg-gradient-to-b from-blue-500 to-indigo-600 hover:to-indigo-700 shadow-button shadow-blue-600/50 focus:ring-2 focus:ring-blue-950 focus:ring-offset-2 ring-offset-gray-200 hover:shadow-none">
                        Log in
                    </button> </span> 
                    <!-- Modal -->
                <div x-show="open" role="dialog" aria-modal="true" x-id="['modal-title']" aria-labelledby="modal-title-1"
                    :aria-labelledby="$id('modal-title')" x-on:keydown.escape.prevent.stop="open = false"
                    class="fixed inset-0 z-50 w-screen overflow-y-hidden" style="display: none;">
                    <!-- Overlay -->
                    <div x-show="open" x-transition.opacity="" class="fixed inset-0 bg-gray-500 bg-opacity-50"
                        style="display: none;"></div> <!-- Panel -->
                    <div x-show="open" x-on:click="open = false" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="transform opacity-0 translate-y-full"
                        x-transition:enter-end="transform opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="transform opacity-100 translate-y-0"
                        x-transition:leave-end="transform opacity-0 translate-y-full"
                        class="relative flex min-h-screen items-center justify-center p-4" style="display: none;">
                        <div x-on:click.stop="" x-trap.noscroll.inert="open"
                            class="relative w-full max-w-sm overflow-y-auto shadow-2xl bg-white ring-1 ring-gray-200 rounded-3xl p-10">
                            <div class="relative">
                                <div class="flex flex-col text-center">
                                    <p class="text-lg font-medium text-gray-500 lg:text-xl">
                                        Log in to your account
                                    </p>
                                </div>
                                <form class="mt-12"> <input name="hidden" autocomplete="false" style="display:none">
                                    <input name="_redirect" type="hidden" value="#">
                                    <div class="space-y-3">
                                        <div class=""> <label for="name"
                                                class="block mb-3 text-sm font-medium text-black sr-only">
                                                First name
                                            </label> <input id="name" name="text" type="text"
                                                placeholder="Your name" aria-placeholder="Your name"
                                                class="block w-full h-12 px-4 py-3 placeholder-gray-500 bg-gray-100 border-0 rounded-lg appearance-none text-blue-500 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-blue-500 focus:ring-inset text-xs">
                                        </div>
                                        <div class="col-span-full"> <label for="password"
                                                class="block mb-3 text-sm font-medium text-black sr-only">Password</label>
                                            <input id="password" name="password" type="password"
                                                placeholder="Type password here..." aria-placeholder="Type password here..."
                                                class="block w-full h-12 px-4 py-3 placeholder-gray-500 bg-gray-100 border-0 rounded-lg appearance-none text-blue-500 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-blue-500 focus:ring-inset text-xs">
                                        </div>
                                        <div class="flex items-center justify-between py-4">
                                            <div class="flex items-center"> <input id="remember-me" type="checkbox"
                                                    name="remember-me"
                                                    class="w-4 h-4 text-indigo-600 bg-vulcan-900 rounded focus:ring-white focus:border-white">
                                                <label class="block ml-2 text-sm font-medium leading-tight text-gray-500"
                                                    for="remember-me">Remember me</label> </div>
                                            <div class="text-sm"> <a class="font-medium text-gray-500 hover:text-indigo-500"
                                                    href="#">Forgot your password?</a> </div>
                                        </div>
                                        <div class="col-span-full"> <a
                                                class="flex items-center justify-center h-10 px-4 py-2 text-base font-semibold text-white transition-all duration-200 rounded-full bg-gradient-to-b from-blue-500 to-indigo-600 hover:to-indigo-700 shadow-button shadow-blue-600/50 focus:ring-2 focus:ring-blue-950 focus:ring-offset-2 ring-offset-gray-200 hover:shadow-none"
                                                href="#">Log in
                                            </a> </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="mx-auto text-sm font-medium leading-tight text-center text-black">
                                            Not a have a password yet? <a class="ml-3 text-indigo-600 hover:text-black"
                                                href="/signup">Sign up now</a> </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ends component -->

    </section>
    {{-- <x-guest-layout>
   <form method="POST" action="{{ route('register') }}">
       @csrf


       <div>
           <label for="" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Select Role</label>
           <select name="role" id="">
               <option value="volunteer">Volunteer</option>
            </select>
       </div>


       <!-- Name -->
       <div>
           <x-input-label for="name" :value="__('Name')" />
           <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
           <x-input-error :messages="$errors->get('name')" class="mt-2" />
       </div>

       <!-- Email Address -->
       <div class="mt-4">
           <x-input-label for="email" :value="__('Email')" />
           <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
           <x-input-error :messages="$errors->get('email')" class="mt-2" />
       </div>

       <!-- Password -->
       <div class="mt-4">
           <x-input-label for="password" :value="__('Password')" />

           <x-text-input id="password" class="block mt-1 w-full"
                           type="password"
                           name="password"
                           required autocomplete="new-password" />

           <x-input-error :messages="$errors->get('password')" class="mt-2" />
       </div>

       <!-- Confirm Password -->
       <div class="mt-4">
           <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

           <x-text-input id="password_confirmation" class="block mt-1 w-full"
                           type="password"
                           name="password_confirmation" required autocomplete="new-password" />

           <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
       </div>

       <div class="flex items-center justify-end mt-4">
           <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
               {{ __('Already registered?') }}
           </a>

           <x-primary-button class="ms-4">
               {{ __('Register') }}
           </x-primary-button>
       </div>
   </form>
</x-guest-layout> --}}
@endsection
