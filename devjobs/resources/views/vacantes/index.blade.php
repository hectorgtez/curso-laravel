<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has("mensaje"))
                <div class="border border-green-600 bg-green-100 text-green-600 rounded-md font-bold px-2 py-1 my-3 text-sm">
                    {{ session("mensaje") }}
                </div>
            @endif
            <livewire:mostrar-vacantes/>
        </div>
    </div>
</x-app-layout>
