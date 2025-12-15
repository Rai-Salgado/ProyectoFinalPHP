<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Bienvenido :D") }}
                    <img 
                        src="{{ asset('images/1749059587_new_2025-06-0413-41-33-ezgif.com-crop.gif') }}"
                        alt="Gif de bienvenida"
                        class="w-full h-full object-cover transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6"
                    >
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
