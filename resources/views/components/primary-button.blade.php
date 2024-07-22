<div class="flex flex-row items-center justify-start gap-4">
    <button
        {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-2xl bg-red-600 px-4 py-2 font-bold leading-none text-slate-50']) }}>
        {{ $slot }}
    </button>
</div>
