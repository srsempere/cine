<x-app-layout>
    <form method="POST" action="{{ route('peliculas.update', ['pelicula' =>  $pelicula]) }}" class="m-80">
        @csrf
        @method('PUT')
        <!-- Name -->
        <div>
            <x-input-label for="titulo" :value="'Título de la pelicula'" />
            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo', $pelicula->titulo)" required autofocus autocomplete="titulo" />
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-">
            <a href="{{ route('peliculas.index') }}">
                <x-secondary-button class="m-4">
                    Volver
                </x-secondary-button>
            </a>
            <x-primary-button class="ms-4">
                Editar
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
