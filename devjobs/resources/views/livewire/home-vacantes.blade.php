<div>
    <livewire:filtrar-vacantes/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-300 mb-12 ml-3">Vacantes disponibles</h3>
            <div class="bg-gray-800 shadow-sm rounded-lg p-6 divide-y divide-gray-500">
                @forelse ($vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1">
                            <a
                                href="{{ route('vacantes.show', $vacante->id) }}"
                                class="cursor-pointer text-gray-300 hover:text-gray-200 text-xl font-bold transition ease-in-out duration-150"
                            >
                                {{ $vacante->titulo }}
                            </a>
                            <p class="text-gray-400 text-base mb-1">{{ $vacante->empresa }}</p>
                            <p class="text-gray-400 text-base mb-1">{{ $vacante->categoria->categoria }}</p>
                            <p class="text-gray-400 text-base mb-1">{{ $vacante->salario->salario }}</p>
                            <p class="font-bold text-sm text-gray-400">
                                Último día para postularse:
                                <span class="font-normal">{{ $vacante->ultimo_dia->format('d/m/Y') }}</span>
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a
                                href="{{ route('vacantes.show', $vacante->id) }}"
                                class="text-center items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 block"
                            >
                                Ver más...
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-400">No hay vacantes disponibles...</p>
                @endforelse
            </div>
            <div class="mt-10">
                {{ $vacantes->links("pagination::tailwind") }}
            </div>
        </div>
    </div>
</div>
