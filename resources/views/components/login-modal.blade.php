<!-- resources/views/components/login-modal.blade.php -->
<div x-data="{ open: false }">
    <!-- Modal -->
    <div x-show="open" role="dialog" aria-modal="true" x-id="['modal-title']" aria-labelledby="modal-title-1"
        :aria-labelledby="$id('modal-title')" x-on:keydown.escape.prevent.stop="open = false"
        class="fixed inset-0 z-50 w-screen overflow-y-hidden" style="display: none;">
        <!-- Overlay -->
        <div x-show="open" x-transition.opacity="" class="fixed inset-0 bg-gray-500 bg-opacity-50"
            style="display: none;"></div>
        <!-- Panel -->
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
                    <form class="mt-12">
                        <!-- Form contents... -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>