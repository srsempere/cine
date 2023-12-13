<x-app-layout>
    <form method="POST" action="{{ route('entradas.store') }}">
        @csrf
        <!-- Lista de proyecciones -->
        <div>
            <x-input-label for="titulo" :value="'Nombre de la película'" />
            <select name='proyeccion__id' id='proyeccion__id' class="block mt-1 w-full">
                @foreach ($proyecciones as $proyeccion)
                    <option value="{{ $proyeccion->id }}">{{ $proyeccion->pelicula->titulo }} -
                        @if ($proyeccion->salas-)

                        @endif
                        {{ $proyeccion->sala->numero }} - {{ $proyeccion->fecha }} - {{ $proyeccion->hora }}</option>
                @endforeach
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
