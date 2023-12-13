<x-app-layout>
    <form method="POST" action="{{ route('peliculas.store') }}">
        @csrf
        <!-- Nombre -->
        <div>
            <x-input-label for="titulo" :value="'Nombre de la película'" />
            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-">
            <a href="{{ route('peliculas.index') }}">
                <x-secondary-button class="m-4">
                    Volver
                </x-secondary-button>
            </a>
            <x-primary-button class="ms-4">
                Insertar
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
