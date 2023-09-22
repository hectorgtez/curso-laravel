<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Candidatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold text-center my-10">
                        Candidatos para vacante: {{ $vacante->titulo }}
                    </h1>
                    <div class="md:flex md:justify-center p-5">
                        <ul class="divide-y divide-gray-200 w-full">
                            @forelse ($vacante->candidatos as $candidato)
                                <li class="p-3 flex items-center border-b border-gray-500">
                                    <div class="flex-1">
                                        <p class="text-xl font-medium text-gray-300">{{ $candidato->user->name }}</p>
                                        <p class="text-sm text-gray-400">{{ $candidato->user->email }}</p>
                                        <p class="text-sm text-gray-400">{{ $candidato->created_at->diffForHumans() }}</p>
                                    </div>
                                    <div>
                                        <a
                                            href="{{ asset('storage/cv/' . $candidato->cv) }}"
                                            target="_blank"
                                            rel="noreferrer noopener"
                                            class="inline-flex items-center shadow-sm px-3 py-1 border border-gray-300 text-xs leading-5 font-bold rounded-full text-gray-700 bg-white hover:bg-gray-50 transition ease-in-out duration-150"
                                        >
                                            Ver CV
                                        </a>
                                    </div>
                                </li>
                            @empty
                                <p class="p-3 text-center text-sm text-gray-400">Aún no hay candidatos para esta vacante...</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
