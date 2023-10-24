<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Empresas') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="inline-flex overflow-hidden text-white divide-x rounded-lg rtl:flex-row-reverse">
                        <button class="px-3 py-2 text-xs font-medium text-black transition-colors duration-200 bg-red-500 sm:text-sm">
                            Todas
                        </button>
                        <button class="px-3 py-2 text-xs font-medium bg-oscuro transition-colors duration-200 sm:text-sm hover:bg-red-500 hover:text-gray-900" title="Empresas en activo">
                            Activas
                        </button>
                        <button class="px-3 py-2 text-xs font-medium bg-oscuro transition-colors duration-200 sm:text-sm hover:bg-red-500 hover:text-black" title="Empresas que pueden subir comunicados">
                            Comunicados
                        </button>
                    </div>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-gray-800">Empresas</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $empresas->count() }}</span>
                        <p class="mt-1 text-sm text-gray-500">Estas son las empresas que tenemos registradas.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    <div class="flex items-center gap-x-3 align-middle">
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-gray-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500" title="Añadir un nuevo empresa">
                            <i class="lni lni-apartment"></i>
                            <a href="{{ route('intranet.empresas.create') }}" class="">Añadir empresa</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-flow-col auto-cols-max">
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <table id="comunicadosAdmin" class="display nowrap text-sm pt-5 font-normal" style="width:auto">
                        <thead class="bg-oscuro text-white">
                            <tr class="">
                                <th class="rounded-tl-lg">ID</th>
                                <th>Acciones</th>
                                <th>Logo</th>
                                <th>Empresa</th>
                                <th>Descripción</th>
                                <th>Vales</th>
                                <th>Comunicados</th>
                                <th class="rounded-tr-lg">Activa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empresas as $empresa)
                            <tr>
                                <td>{{ $empresa->id }}</td>
                                <td>
                                    <div class="flex justify-start gap-1 text-xl mt-2">
                                        <a x-data="{ tooltip: 'Editar' }" href="{{ route('intranet.empresas.edit', $empresa->id) }}"
                                            class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar empresa">
                                            <i class="lni lni-pencil"></i>
                                        </a>                                
                                        <form method="POST" action="{{ route('intranet.empresas.destroy', $empresa->id) }}" onsubmit="return confirm('¿Deseas eliminar esta empresa?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" p-1 rounded-md">
                                                <a x-data="{ tooltip: 'Eliminar' }" href="#" title="Eliminar empresa" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                                    <i class="lni lni-trash-can"></i>
                                                </a>
                                            </button>
                                        </form>                                
                                    </div>
                                </td>
                                <td><img src="{{ asset('storage/' . $empresa->logo) }}" alt="Logo"></td>
                                <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $empresa->nombre }}">{{ $empresa->nombre }}</span></td>
                                <td>{{ $empresa->descripcion }}</td>
                                
                                <td class="text-center">
                                    <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                        <input type="checkbox" name="activa_toggle" id="activa_toggle" {{  ($empresa->vales == 1 ? ' checked' : '') }} disabled class="sr-only peer">
                                        <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-gray-600 peer-checked:bg-red-600"></div>
                                    </label>
                                    {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                    <input type="hidden" id="activa" name="activa" value="{{ $empresa->vales ? 1 : 0 }}">
                                </td>
                                <td class="text-center">
                                    <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                        <input type="checkbox" name="activa_toggle" id="activa_toggle" {{  ($empresa->comunicados == 1 ? ' checked' : '') }} disabled class="sr-only peer">
                                        <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-gray-600 peer-checked:bg-red-600"></div>
                                    </label>
                                    {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                    <input type="hidden" id="activa" name="activa" value="{{ $empresa->comunicados ? 1 : 0 }}">
                                </td>
                                <td class="text-center">
                                    <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                        <input type="checkbox" name="activa_toggle" id="activa_toggle" {{  ($empresa->activa == 1 ? ' checked' : '') }} disabled class="sr-only peer">
                                        <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-gray-600 peer-checked:bg-red-600"></div>
                                    </label>
                                    {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                    <input type="hidden" id="activa" name="activa" value="{{ $empresa->activa ? 1 : 0 }}">
                                </td>
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