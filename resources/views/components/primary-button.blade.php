<div class="rounded-2xl bg-green-600 px-4 py-2 font-bold leading-none text-white">
    <button
        {{ $attributes->merge(['type' => 'submit', 'class' => '']) }}>
        {{ $slot }}
    </button>
</div>
