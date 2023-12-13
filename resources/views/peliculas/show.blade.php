<x-app-layout>
    <br>
    <div class="overflow-x-auto">
        <table class="w-auto mx-auto text-sm text-center text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre Película
                    </th>
                </tr>
            </thead>
            <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Nombre película: {{ $pelicula->titulo }}
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
    <div class="flex justify-center">
        <a href="{{ route('peliculas.index') }}">
            <x-secondary-button class="m-4">
                Volver
            </x-secondary-button>
        </a>
    </div>
</x-app-layout>
