@extends('view.layouts.app')

@section('main_content')
    <section>
        <div class="w-full mx-auto max-w-xl flex flex-col justify-center py-24 relative p-8">

                <!--  Starts component -->
                <div x-data="{ registerName: '', registerEmail: '', registerPassword: '', passwordPattern: /^(?=.*[A-Z])(?=.*\W).+$/, showPassword: false }">
                    <form method="POST" action="{{ route('register') }}" class="w-full divide-neutral-200 rounded-3xl bg-white shadow-2xl border p-8 lg:p-10">
                        @csrf
                        <div>
                            <label for="role" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Select Role</label>
                            <div>
                                <input type="radio" id="volunteer" name="role" value="volunteer" checked>
                                <label for="volunteer" class="text-gray-700 dark:text-gray-300">volunteer</label>
                            </div>
                        </div>
                        
                        
                        {{-- Name --}}
                        <div class="py-2 space-y-3">
                            <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" x-model="registerName"
                                class="block w-full h-12 px-4 py-3 placeholder-gray-500 bg-gray-100 border-0 rounded-lg appearance-none text-blue-500 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-blue-500 focus:ring-inset focus:ring-2 text-xs"
                                placeholder="Enter your name">
                            <p x-show="!registerName" class="text-red-500 text-xs mt-1">
                                Name is required
                            </p>
                        </div>
                        {{-- Email --}}
                        <div class="py-2 space-y-3">
                            <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" x-model="registerEmail"
                                class="block w-full h-12 px-4 py-3 placeholder-gray-500 bg-gray-100 border-0 rounded-lg appearance-none text-blue-500 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-blue-500 focus:ring-inset focus:ring-2 text-xs"
                                placeholder="Enter your email">
                            <p x-show="!registerEmail" class="text-red-500 text-xs mt-1">
                                Email is required
                            </p>
                        </div>
                        {{-- Password --}}
                        <div class="py-2 space-y-3">
                            <label for="password" class="block text-sm text-gray-700">Password</label>
                            <div class="relative">
                                <input :type="showPassword ? 'text' : 'password'" id="password" name="password" required autocomplete="new-password" x-model="registerPassword"
                                    class="block w-full h-12 px-4 py-3 placeholder-gray-500 bg-gray-100 border-0 rounded-lg appearance-none text-blue-500 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-blue-500 focus:ring-2 focus:ring-inset text-xs"
                                    placeholder="Enter your password">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-xs text-gray-400 cursor-pointer"
                                    x-text="showPassword ? 'Hide' : 'Show'"
                                    @click="showPassword = !showPassword"></span>
                            </div>
                            <p class="text-gray-500 text-xs mt-1">
                                Password must contain at least one capital letter and a special character.
                            </p>
                            <p x-show="registerPassword && !passwordPattern.test(registerPassword)"
                                class="text-red-500 mt-1 text-xs">
                                Password does not meet requirements
                            </p>
                        </div>
                        {{-- Confirm Password --}}
                        <div class="py-2 space-y-3">
                            <label for="password_confirmation" class="block text-sm text-gray-700">Confirm Password</label>
                            <div class="relative">
                                <input :type="showPassword ? 'text' : 'password'" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" x-model="registerPassword"
                                    class="block w-full h-12 px-4 py-3 placeholder-gray-500 bg-gray-100 border-0 rounded-lg appearance-none text-blue-500 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-blue-500 focus:ring-2 focus:ring-inset text-xs"
                                    placeholder="Confirm your password">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-xs text-gray-400 cursor-pointer"
                                    x-text="showPassword ? 'Hide' : 'Show'"
                                    @click="showPassword = !showPassword"></span>
                            </div>
                            <p class="text-gray-500 text-xs mt-1">
                                Password must contain at least one capital letter and a special character.
                            </p>
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    Forgot your password?
                                </a>
                            @endif
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="rounded-full bg-blue-600 px-8 py-2 h-12 text-sm font-semibold text-white hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 w-full">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
                <!--  Ends component -->

        </div>
    </section>
@endsection
