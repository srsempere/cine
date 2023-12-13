<x-app-layout>
    <h1 class="m-8">¿Está seguro de su compra?</h1>
    <form method="POST" action="{{ route('entradas.store') }}" class="m-8">
        @csrf

        <!-- Películas disponibles para proyectar  -->
        <div>
            <x-input-label for="pelicula_id" :value="'Películas disponibles para proyectar:'" />
            <select name="pelicula_id" id="pelicula_id" class="block w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @foreach ($peliculas as $pelicula)
                    <option value="{{ $pelicula->id }}" {{ old('pelicula_id') == $pelicula->id ? 'selected' : '' }}>
                        {{ $pelicula->titulo }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        </div>

        <!-- Salas disponibles para proyectar  -->
        //TODO: Pendiente de terminar.
        <div>
            <x-input-label for="titulo" :value="'Salas disponibles para proyectar:'" />
            <select name="pelicula_id" id="pelicula_id" class="block w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @foreach ($peliculas as $pelicula)
                    <option value="{{ $pelicula->id }}" {{ old('pelicula_id') == $pelicula->id ? 'selected' : '' }}>
                        {{ $pelicula->titulo }}</option>
                @endforeach
            </select>
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
