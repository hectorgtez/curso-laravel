<form action="" method="" class="md:w-1/2 space-y-5">
    <!-- Titulo de vacante -->
    <div>
        <x-input-label for="titulo" :value="__('Título de vacante')" />
        <x-text-input
            id="titulo"
            class="block mt-1 w-full"
            type="text"
            name="titulo"
            :value="old('titulo')"
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <!-- Salario -->
    <div>
        <x-input-label for="salario" :value="__('Salario mensual')" />
        <select
            name="salario"
            id="salario"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
        >
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <!-- Categoria -->
    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select
            name="categoria"
            id="categoria"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
        >
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <!-- Nombre de la empresa -->
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input
            id="empresa"
            class="block mt-1 w-full"
            type="text"
            name="empresa"
            :value="old('empresa')"
        />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    <!-- Ultimo dia para postularse -->
    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input
            id="ultimo_dia"
            class="block mt-1 w-full"
            type="date"
            name="ultimo_dia"
            :value="old('ultimo_dia')"
        />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <!-- Descripcion -->
    <div>
        <x-input-label for="descripcion" :value="__('Descripción de vacante')" />
        <textarea
            id="descripcion"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
            type="date"
            name="descripcion"
            :value="old('descripcion')"
        ></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <!-- Imagen -->
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input
            id="imagen"
            class="block mt-1 w-full"
            type="file"
            name="imagen"
        />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>

    <!-- Boton -->
    <x-primary-button>Crear vacante</x-primary-button>
</form>
