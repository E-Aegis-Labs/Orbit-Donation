<div class="justify-center col-span-full flex items-center  h-10 px-4 py-2 text-base font-semibold text-white transition-all duration-200 rounded-full bg-gradient-to-b from-blue-500 to-indigo-600 hover:to-indigo-700 shadow-button shadow-blue-600/50 focus:ring-2 focus:ring-blue-950 focus:ring-offset-2 ring-offset-gray-200 hover:shadow-none">
    <button
        {{ $attributes->merge(['type' => 'submit', 'class' => '']) }}>
        {{ $slot }}
    </button>
</div>
