<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante)
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="#" class="text-xl font-bold">{{ $vacante->titulo }}</a>
                    <p class="text-sm text-gray-400 font-bold">{{ $vacante->empresa }}</p>
                    <p class="text-sm text-gray-500">Último día: {{ $vacante->ultimo_dia->format("d/m/Y") }}</p>
                </div>
                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a
                        href="#"
                        class="text-center items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    >
                        Candidatos
                    </a>
                    <a
                        href="#"
                        class="text-center items-center px-4 py-2 bg-blue-800 dark:bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-blue-700 dark:hover:bg-blue-700 focus:bg-blue-700 dark:focus:bg-blue-700 active:bg-blue-900 dark:active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    >
                        Editar
                    </a>
                    <a
                        href="#"
                        class="text-center items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    >
                        Eliminar
                    </a>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-400">No hay vacantes que mostrar...</p>
        @endforelse
    </div>
    <div class="mt-10">
        {{ $vacantes->links("pagination::tailwind") }}
    </div>
</div>
