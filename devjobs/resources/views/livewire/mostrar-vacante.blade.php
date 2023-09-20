<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-300 my-3">{{ $vacante->titulo }}</h3>

        <div class="md:grid md:grid-cols-2 rounded-lg bg-gray-700 p-4 my-10">
            <p class="font-bold text-sm text-gray-300 my-3">
                Empresa:
                <span class="font-normal">{{ $vacante->empresa }}</span>
            </p>
            <p class="font-bold text-sm text-gray-300 my-3">
                Último día para postularse:
                <span class="font-normal">{{ $vacante->ultimo_dia->toFormattedDateString() }}</span>
            </p>
            <p class="font-bold text-sm text-gray-300 my-3">
                Categoría:
                <span class="font-normal">{{ $vacante->categoria->categoria }}</span>
            </p>
            <p class="font-bold text-sm text-gray-300 my-3">
                Salario:
                <span class="font-normal">{{ $vacante->salario->salario }}</span>
            </p>
        </div>
    </div>

    <div class="md:grid md:grid-cols-6 md:gap-10">
        <div class="md:col-span-2">
            <img
                src="{{ asset('storage/vacantes/' . $vacante->imagen) }}"
                alt="{{ 'Imagen de vacante ' . $vacante->titulo }}"
                class="rounded-lg"
            >
        </div>
        <div class="mt-7 md:col-span-4 md:mt-0">
            <h2 class="text-2xl text-gray-300 font-bold mb-5">Descripción de la vacante:</h2>
            <p class="text-gray-300">{{ $vacante->descripcion }}</p>
        </div>
    </div>

    @guest
        <div class="mt-7 bg-gray-700 text-gray-300 rounded-lg border border-dashed p-5 text-center">
            <p>
                ¿Deseas aplicar a esta vacante?
                <a href="{{ route('register') }}" class="font-bold underline hover:text-gray-100 transition ease-in-out duration-150">
                    Obtén una cuenta para aplicar a esta y otras vacantes.
                </a>
            </p>
        </div>
    @endguest
</div>
