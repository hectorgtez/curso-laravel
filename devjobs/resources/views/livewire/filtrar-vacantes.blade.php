<div class="bg-gray-900 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-300 text-center font-extrabold my-5">Buscar y filtrar vacantes</h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent="leerDatosFormulario">
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <label
                        class="block mb-1 text-sm text-gray-400 font-bold "
                        for="termino">Término de búsqueda
                    </label>
                    <input
                        id="termino"
                        type="text"
                        placeholder="Buscar por término: ej. Laravel"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="termino"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-400 font-bold">Categoría</label>
                    <select wire:model="categoria" class="border-gray-300 p-2 w-full rounded-md">
                        <option value="">-- Seleccione --</option>

                        @foreach ($categorias as $categoria )
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-400 font-bold">Salario mensual</label>
                    <select wire:model="salario" class="border-gray-300 p-2 w-full rounded-md">
                        <option value="">-- Seleccione --</option>
                        @foreach ($salarios as $salario)
                            <option value="{{ $salario->id }}">{{$salario->salario}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input
                    type="submit"
                    class="inline-flex items-center px-8 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>
