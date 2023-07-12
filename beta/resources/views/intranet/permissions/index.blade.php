<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Permisos') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="inline-flex overflow-hidden text-white divide-x rounded-lg rtl:flex-row-reverse">
                        <button class="px-3 py-2 text-xs font-medium text-black transition-colors duration-200 bg-red-500 sm:text-sm">
                            Todos
                        </button>
                        <button class="px-3 py-2 text-xs font-medium bg-oscuro transition-colors duration-200 sm:text-sm hover:bg-red-500 hover:text-gray-900" title="Permisos en activo">
                            Activos
                        </button>
                        <button class="px-3 py-2 text-xs font-medium bg-oscuro transition-colors duration-200 sm:text-sm hover:bg-red-500 hover:text-black" title="Permisos que pueden subir comunicados">
                            Por Perfil
                        </button>
                    </div>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-gray-800">Permisos</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $permissions->count() }}</span>
                        <p class="mt-1 text-sm text-gray-500">Estos son los permissions que tenemos registrados.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    <div class="flex items-center gap-x-3 align-middle">
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-gray-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500" title="Añadir un nuevo permiso">
                            <i class="lni lni-apartment"></i>
                            <a href="{{ route('intranet.permissions.create') }}" class="">Añadir permiso</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 auto-cols-max">
                <div class="sm:col-span-3 sm:items-center sm:justify-start">
                    <table id="comunicadosAdmin" class="display nowrap text-sm pt-5 font-normal" style="width:auto">
                        <thead class="bg-oscuro text-white">
                            <tr class="">
                                <th class="rounded-tl-lg">ID</th>
                                <th>Acciones</th>
                                <th>Perfiles</th>                        
                                <th>Descripción</th>
                                <th class="rounded-tr-lg">Guard name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td>
                                    <div class="flex justify-start gap-1 text-xl mt-2">
                                        <a x-data="{ tooltip: 'Edite' }" href="{{ url('permissions.edit', $permission->id) }}"
                                            class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar permiso">
                                            <i class="lni lni-pencil"></i>
                                        </a>                                
                                        <form method="POST" action="{{ route('intranet.permissions.destroy', $permission->id) }}" onsubmit="return confirm('¿Deseas eliminar esta permiso?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" p-1 rounded-md">
                                                <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar permiso" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                                    <i class="lni lni-trash-can"></i>
                                                </a>
                                            </button>
                                        </form>                                
                                    </div>
                                </td>
                                <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-red-300 text-red-900">{{ $permission->name }}</span></td>
                                <td>{{ $permission->descripcion }}</td>
                                <td class="text-center">{{ $permission->guard_name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
            
        </div>
    </div>
    @endsection
    
</x-privado-layout>