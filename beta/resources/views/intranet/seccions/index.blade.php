<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Secciones') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-between">
                    
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-zinc-800">Secciones</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $seccions->count() }}</span>
                        <p class="mt-1 text-sm text-zinc-500">Estas son las seccions que tenemos registradas.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    <div class="flex items-center gap-x-3 align-middle">
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-zinc-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-zinc-900 hover:text-red-500" title="Añadir un nuevo usuario">
                            <i class="lni lni-apartment"></i>
                            <a href="{{ route('intranet.seccions.create') }}" class="">Añadir sección</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div class="sm:flex sm:items-center sm:justify-start">
                    <table id="comunicadosAdmin" class="display nowrap text-sm pt-5 font-normal" style="width:auto">
                        <thead class="bg-oscuro text-white">
                            <tr class="">
                                <th class="rounded-tl-lg">Acciones</th>
                                <th>Nombre</th>  
                                <th>Responsable</th>                      
                                <th>Email</th>
                                <th>Email2</th>
                                <th>Descripción</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Comunidad</th>
                                <th class="rounded-tr-lg">Provincia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seccions as $seccion)
                            <tr>
                                <td>
                                    <div class="flex justify-start gap-1 text-xl mt-2">
                                        <a x-data="{ tooltip: 'Edit' }" href="{{ route('intranet.seccions.edit', $seccion->id) }}"
                                            class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar usuario">
                                            <i class="lni lni-pencil"></i>
                                        </a>     
                                        
                                        <form method="POST" action="{{ route('intranet.seccions.destroy', $seccion->id) }}" onsubmit="return confirm('¿Deseas eliminar esta sección?');">

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-1 rounded-md text-red-500 hover:bg-red-500 hover:text-white">
                                                <i class="lni lni-trash-can"></i>
                                            </button>
                                        </form>                    
                                    </div>
                                </td>
                                <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-red-300 text-red-900">{{ $seccion->nombre }}</span></td>
                                <td>{{ $seccion->responsable }}</td>
                                <td>{{ $seccion->email }}</td>
                                <td>{{ $seccion->email2 }}</td>
                                <td>{{ $seccion->descripcion }}</td>
                                <td>{{ $seccion->direccion }}</td>
                                <td>{{ $seccion->telefono }}</td>
                                <td class="text-center">{{ $seccion->ccaa?->nombre }}</td>
                                <td class="text-center">{{ $seccion->provincia?->nombre }}</td>
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