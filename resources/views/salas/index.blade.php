<x-app-layout>
    <br>
    <div class="overflow-x-auto">
        <table class="w-auto mx-auto text-sm text-center text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nº de Sala
                    </th>
                    <th scope="col" class="px-6 py-3" colspan="2">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($salas->isEmpty())
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-red-600 dark:text-white" colspan="3">
                            No existe ninguna sala actualmente.
                        </td>
                    </tr>
                @else
                    @foreach ($salas as $sala)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $sala->numero }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                <a href="{{ route('salas.index') }}">
                                    <x-primary-button>
                                        Ver más detalles
                                    </x-primary-button>
                                </a>
                            </td>
                            {{-- <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            <form method="post" action="{{ route('peliculas.destroy', ['pelicula' => $pelicula]) }}">
                                @csrf
                                @method('DELETE')
                                <x-primary-button class="bg-red-700">
                                    Borrar
                                </x-primary-button>
                            </form>
                        </td>
                        <td class="px-6 py-4 font-medium">
                            <a href="{{ route('peliculas.show', ['pelicula' => $pelicula]) }}">
                                <x-primary-button class=" text-orange-400 bg-blue-700">
                                    Ver más detalles
                                </x-primary-button>
                            </a>
                        </td> --}}
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    {{-- <div class="flex justify-center">
        <form action="{{ route('peliculas.create') }}" method="get">
            <x-primary-button class="bg-green-700 m-4">Crear una proyección</x-primary-button>
        </form>
    </div> --}}

</x-app-layout>
