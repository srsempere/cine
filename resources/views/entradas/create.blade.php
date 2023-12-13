<x-app-layout>
    <h1 class="m-8 text-3xl text-center text-blue-600 bg-yellow-100 p-4 rounded-lg shadow">¿Confirmar Compra de Entrada?</h1>
    <form method="POST" action="{{ route('entradas.store') }}" class="m-8">
        @csrf

        <div>
            <x-input-label for="titulo" :value="'Nombre de la película'" />
            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="$proyeccion->pelicula->titulo" readonly />
        </div>

        <div>
            <x-input-label for="sala" :value="'Número de sala'" />
            <x-text-input id="sala" class="block mt-1 w-full" type="text" name="sala" :value="$proyeccion->sala->numero" readonly />
        </div>

        <input type="hidden" name="proyeccion_id" value="{{ $proyeccion->id }}">

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('proyecciones.index') }}">
                <x-secondary-button class="m-4">
                    Volver
                </x-secondary-button>
            </a>
            <x-primary-button class="ms-4 bg-green-600">
                Comprar Entrada
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
