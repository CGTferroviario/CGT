<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sectores') }}
        </h2>
    </x-slot>

    <div class="relative container mx-auto mt-4 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Observaciones
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($sectores as $sector)
                <tr>
                    <td>{{ $sector->id }}</td>
                    <td>{{ $sector->nombre }}</td>
                    <td>{{ $sector->observaciones?? 'N/A' }}</td>
                    <td>{{ $sector->observaciones }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('empresas.index') }}" class="p-4 rounded-md text-md bold bg-red-500 hover:bg-zinc-900 text-zinc-900 hover:text-red-500">Empresas</a>
                    <a href="{{ route('sectores.index') }}" class="p-4 ml-4 rounded-md text-md bold bg-red-500 hover:bg-zinc-900 text-zinc-900 hover:text-red-500">Sectores</a>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>