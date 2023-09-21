<div class="bg-gray-700 text-gray-300 p-5 mt-10 rounded-lg flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

    @if (session()->has('mensaje'))
        <div class="border border-green-600 bg-green-100 text-green-600 rounded-lg font-bold px-3 py-2 my-3 text-sm">
            {{ session('mensaje') }}
        </div>
    @else
        <form wire:submit.prevent='postularme' class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Currículum u hoja de vida')" />
                <x-text-input
                    id="cv"
                    wire:model='cv'
                    type="file" accept=".pdf"
                    class="block mt-1 w-full"
                />
                @error('cv')
                    <livewire:mostrar-alerta :message="$message"/>
                @enderror
            </div>

            <div class="flex justify-center">
                <x-primary-button class="my-5">
                    {{ __('Postularme') }}
                </x-primary-button>
            </div>
        </form>
    @endif
</div>
