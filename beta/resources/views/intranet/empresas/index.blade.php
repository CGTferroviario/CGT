<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight titular">
            {{ __('Empresas') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 mt-2 mb-3">
                <div class="col-span-1 lg:col-span-3">
                    <x-mensaje></x-mensaje>
                </div>
                <div class="col-span-1 lg:col-span-3 gap-x-3 md:flex">
                    <div class="mb-3 grow text-center">
                        <span class="px-3 py-2 border-2 border-black font-semibold text-black bg-red-500 rounded-full">{{ $empresas->count() }}</span>
                        <span class="text-base font-medium text-zinc-800">Empresas Ferroviarias registradas</span>
                    </div>
                    <div class="mb-3 shrink text-center">
                        <button class="w-full px-2 py-2 text-sm text-zinc-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 hover:bg-green-500 hover:text-zinc-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="w-full px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg gap-x-2 hover:bg-zinc-900 hover:text-red-500" title="Añadir una nueva empresa">
                            <i class="lni lni-add-files"></i>
                            <a href="{{ route('intranet.empresas.create') }}" class="">Añadir Empresa</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <table id="empresas" class="display nowrap text-sm pt-5 font-normal" style="width:auto">
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
                                        <a href="{{ route('intranet.empresas.edit', $empresa->id) }}"
                                            class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar empresa">
                                            <i class="lni lni-pencil"></i>
                                        </a> 
                                        <form method="POST" action="{{ route('intranet.empresas.destroy', $empresa->id) }}" onsubmit="return confirm('¿Deseas eliminar esta empresa?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" p-1 rounded-md">
                                                <a href="#" title="Eliminar empresa" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                                    <i class="lni lni-trash-can"></i>
                                                </a>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td><img src="{{ asset('storage/' . $empresa->logo) }}" alt="Logo"></td>
                                <td>
                                    <div class="py-0.5 px-2 inline rounded-full font-semibold badge-{{ $empresa->slug }}">
                                        <a href="{{ route('empresas.show', ['slug' => $empresa->slug]) }}">{{ $empresa->nombre }}</a>
                                    </div>
                                    {{-- <span class="px-3 py-1 font-extrabold rounded-full badge-{{ $empresa->slug }}" title="{{ $empresa->nombre }}">{{ $empresa->nombre }}</span> --}}
                                </td>
                                <td class="!w-32">{!! $empresa->descripcion !!}</td>
                                
                                <td class="text-center">
                                    <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                        <input type="checkbox" name="" id="" {{  ($empresa->vales == 1 ? ' checked' : '') }} disabled class="sr-only peer">
                                        <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-zinc-600 peer-checked:bg-red-600"></div>
                                    </label>
                                    {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                    <input type="hidden" id="" name="" value="{{ $empresa->vales ? 1 : 0 }}">
                                </td>
                                <td class="text-center">
                                    <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                        <input type="checkbox" name="" id="" {{  ($empresa->comunicados == 1 ? ' checked' : '') }} disabled class="sr-only peer">
                                        <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-zinc-600 peer-checked:bg-red-600"></div>
                                    </label>
                                    {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                    <input type="hidden" id="" name="" value="{{ $empresa->comunicados ? 1 : 0 }}">
                                </td>
                                <td class="text-center">
                                    <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                        <input type="checkbox" name="" id="" {{  ($empresa->activa == 1 ? ' checked' : '') }} disabled class="sr-only peer">
                                        <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-zinc-600 peer-checked:bg-red-600"></div>
                                    </label>
                                    {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                    <input type="hidden" id="" name="" value="{{ $empresa->activa ? 1 : 0 }}">
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