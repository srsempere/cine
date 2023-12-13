<x-app-layout>
    <h1 class="m-8">¿Está seguro de su compra?</h1>
    <form method="POST" action="{{ route('entradas.store') }}" class="m-8">
        @csrf
        <!-- Lista de proyecciones -->

        <div>
            <x-input-label for="titulo" :value="'Nombre de la película'" />
            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"
            required autofocus autocomplete="titulo" />
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-">
            <a href="{{ route('peliculas.index') }}">
                <x-secondary-button class="m-4">
                    Volver
                </x-secondary-button>
            </a>
            <x-primary-button class="ms-4 bg-green-600">
                Comprar entrada
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
