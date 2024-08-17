<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <x-profile :email="$user->email" :timeJoined="$user->created_at" :username="$user->name" />


    <x-footer />
</x-app-layout>
