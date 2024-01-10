<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Equipo') }}
        </h2>
    </x-slot>

    @section('contenido')
        <div class="p-8 fondo documentos">
            <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
                <div class="grid grid-cols-3 mt-2 mb-3">
                    <div class="sm:flex sm:items-center sm:justify-start">
                        <div class="flex items-center gap-x-3 align-middle">
                            <button
                                class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-zinc-100"
                                title="Importar datos desde un archivo .csv">
                                <i class="lni lni-upload"></i>
                                <span>Importar CSV</span>
                            </button>
                            <button
                                class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-zinc-900 hover:text-red-500"
                                title="Añadir una nueva entrada en Equipo">
                                <i class="lni lni-add-files"></i>
                                <a href="{{ route('intranet.equipos.create') }}" class="">Añadir Equipo</a>
                            </button>
                        </div>
                    </div>
                    <div class="sm:flex-row sm:items-center sm:justify-between">
                        <x-mensaje></x-mensaje>
                        <div class="flex items-center gap-x-3">
                            <h2 class="text-lg font-bold text-zinc-800">Equipo Estatal</h2>
                        </div>
                    </div>
                    <div class="sm:flex sm:items-center sm:justify-end">

                    </div>
                </div>
                <div class="container">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-zinc-500 dark:text-zinc-400">
                            <thead class="text-xs text-zinc-700 uppercase bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Product name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Color
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-zinc-800 dark:border-zinc-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-zinc-900 whitespace-nowrap dark:text-white">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        Silver
                                    </td>
                                    <td class="px-6 py-4">
                                        Laptop
                                    </td>
                                    <td class="px-6 py-4">
                                        $2999
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-zinc-800 dark:border-zinc-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-zinc-900 whitespace-nowrap dark:text-white">
                                        Microsoft Surface Pro
                                    </th>
                                    <td class="px-6 py-4">
                                        White
                                    </td>
                                    <td class="px-6 py-4">
                                        Laptop PC
                                    </td>
                                    <td class="px-6 py-4">
                                        $1999
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-zinc-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-zinc-900 whitespace-nowrap dark:text-white">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">
                                        Black
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $99
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- <div class="sort">
                    <div class="bg-black p-2 text-white bordeRojo rounded-t-lg">
                        <h1 class="text-center font-semibold">SECRETARIADO PERMANENTE (S.P.)</h1>
                    </div>
                    <table class="w-full text-sm text-left rtl:text-right text-zinc-500 dark:text-zinc-400">
                        <thead class="text-xs text-zinc-700 uppercase bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Acciones</th>
                                <th scope="col" class="px-6 py-3">Cargo</th>
                                <th scope="col" class="px-6 py-3">Usuario</th>
                                <th scope="col" class="px-6 py-3">Email</th>
                                <th scope="col" class="px-6 py-3">Orden</th>
                            </tr>
                        </thead>
                    </table>
                    @foreach ($equipoSPs as $equipoSP)
                        <x-laravel-blade-sortable::sortable>
                            <x-laravel-blade-sortable::sortable-item sort-key='order'>
                                <div class="p-2 cursor-pointer text-sm border bordeRojo hover:border-black bg-oscuro hover:bg-red-500 text-white hover:text-black">
                                    {{ $equipoSP->cargo }}
                                </div>
                            </x-laravel-blade-sortable::sortable-item>
                        </x-laravel-blade-sortable::sortable>
                    @endforeach

                </div> --}}




                <table id="equiposp" class="display nowrap text-sm pt-5 font-normal rounded-t-lg"
                    style="width:100%">
                    <thead class="rounded-t-lg bg-black text-white">
                        <tr>
                            <th class="rounded-tl-lg">Acciones</th>
                            <th>Tipo</th>
                            <th title="">Cargo</th>
                            <th title="Autor">Usuario</th>
                            <th class="">Email</th>
                            <th class="rounded-tr-lg">Orden</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipoSPs as $equipoSP)
                            <tr>
                                <td>
                                    <div class="flex justify-start gap-1 text-xl mt-2">
                                        <a x-data="{ tooltip: 'Editar' }" href="{{ route('intranet.equipos.edit', $equipoSP->id) }}"
                                            class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8"
                                            title="Editar Noticia">
                                            <i class="lni lni-pencil"></i>
                                        </a>
                                        <form method="POST" action="{{ route('intranet.equipos.destroy', $equipoSP->id) }}"
                                            onsubmit="return confirm('¿Deseas eliminar este equipo?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" p-1 rounded-md">
                                                <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar Noticia"
                                                    class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                                    <i class="lni lni-trash-can"></i>
                                                </a>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $equipoSP->tipo }}</td>
                                <td>{{ $equipoSP->cargo }}</td>
                                <td>{{ $equipoSP->usuario }}</td>
                                <td>{{ $equipoSP->email }}</td>
                                <td>{{ $equipoSP->orden }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
</x-privado-layout>
