<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Equipo') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentos">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-start">
                    <div class="flex items-center gap-x-3 align-middle">
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-gray-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500" title="Añadir una nueva entrada en Equipo">
                            <i class="lni lni-add-files"></i>
                            <a href="{{ route('intranet.equipos.create') }}" class="">Añadir Equipo</a>
                        </button>
                    </div>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-gray-800">Equipo Estatal</h2>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    
                </div>
            </div>
            <table id="comunicadosAdmin" class="display nowrap text-sm pt-5 font-normal rounded-t-lg" style="width:100%">
                <thead class="rounded-t-lg bg-black text-white">
                    <tr>
                        <th class="rounded-tl-lg">Acciones</th>
                        <th>Tipo</th>
                        <th title="">Cargo</th>
                        <th title="Autor">Usuario</th>
                        <th class="rounded-tr-lg">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipos as $equipo)
                    <tr>
                        <td>
                            <div class="flex justify-start gap-1 text-xl mt-2">
                                <a x-data="{ tooltip: 'Editar' }" href="{{ route('intranet.equipos.edit', $equipo->id) }}"
                                    class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar Noticia">
                                    <i class="lni lni-pencil"></i>
                                </a>                                
                                <form method="POST" action="{{ route('intranet.equipos.destroy', $equipo->id) }}" onsubmit="return confirm('¿Deseas eliminar este equipo?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" p-1 rounded-md">
                                        <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar Noticia" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                            <i class="lni lni-trash-can"></i>
                                        </a>
                                    </button>
                                </form>                                
                            </div>
                        </td>
                        <td>{{ $equipo->tipo }}</td>
                        <td>{{ $equipo->cargo }}</td>
                        <td>{{ $equipo->usuario }}</td>
                        <td>{{ $equipo->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</x-privado-layout>