<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold text-center my-10">Mis notificaciones</h1>
                    @forelse ($notificaciones as $notificacion)
                        <div class="md:flex md:justify-between md:items-center p-5 border-b border-gray-500 bg-gray-700 text-gray-100">
                            <div>
                                <p>
                                    Tienes un nuevo candidato en:
                                    <span class="font-bold">{{ $notificacion->data['nombre_vacante'] }}</span>
                                </p>
                                <p class="text-xs text-gray-400">
                                    {{ $notificacion->created_at->diffForHumans() }}
                                </p>
                            </div>
                            <div class="mt-5 mb-1 md:mt-0 md:mb-0">
                                <a
                                    href="#"
                                    class="text-center items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                                >
                                    Candidatos
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="p-3 text-center text-sm text-gray-400">No hay notificaciones nuevas...</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
