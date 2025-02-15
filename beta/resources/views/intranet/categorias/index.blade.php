<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-zinc-900 leading-tight titular">
            {{ __('Categorias') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <x-mensaje></x-mensaje>
            <div class="flex flex-col sm:flex-row mt-2 mb-3">
                <div class="sm:w-1/3 w-full border border-red-500 text-center">
                    <h2 class="text-lg font-bold text-zinc-800">
                        <span class="px-3 py-2 mr-2 text-sm font-bold text-zinc-800 bg-red-500 border border-zinc-800 rounded-full">{{ $categorias->count() }}</span>
                        Categorias
                    </h2>
                </div>
                <div class="sm:w-1/3 w-full">
                    <p class="mt-1 text-sm text-zinc-500">Estas son las categorias que tenemos registradas.</p>
                </div>
                <div class="sm:w-1/3 w-full">
                    <button class="flex items-center justify-center px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 border border-zinc-900 rounded-lg gap-x-2 w-full sm:w-auto hover:bg-zinc-900 hover:text-red-500" title="Añadir un nuevo categoria">
                        <i class="lni lni-apartment"></i>
                        <a href="{{ route('intranet.categorias.create') }}" class="">Añadir categoria</a>
                    </button>
                </div>
            </div>
            <div class="grid grid-flow-col auto-cols-max">
                <div class="sm:flex sm:items-center sm:justify-start">
                    <table id="comunicadosAdmin" class="display nowrap text-sm pt-5 font-normal" style="width:auto">
                        <thead class="bg-oscuro text-white">
                            <tr class="">
                                <th class="rounded-tl-lg">ID</th>
                                <th>Acciones</th>
                                <th>Categoria</th>
                                <th>Slug</th>
                                <th class="rounded-tr-lg">Activa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>
                                    <div class="flex justify-start gap-1 text-xl mt-2">
                                        <a x-data="{ tooltip: 'Editar' }" href="{{ route('intranet.categorias.edit', $categoria->id) }}"
                                            class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar categoria">
                                            <i class="lni lni-pencil"></i>
                                        </a>                                
                                        <form method="POST" action="{{ route('intranet.categorias.destroy', $categoria->id) }}" onsubmit="return confirm('¿Deseas eliminar este categoria?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" p-1 rounded-md">
                                                <a x-data="{ tooltip: 'Eliminar' }" href="#" title="Eliminar categoria" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                                    <i class="lni lni-trash-can"></i>
                                                </a>
                                            </button>
                                        </form>                                
                                    </div>
                                </td>
                                <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $categoria->nombre }}">{{ $categoria->nombre }}</span></td>
                                <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $categoria->slug }}">{{ $categoria->slug }}</span></td>
                                <td class="text-center">
                                    <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                        <input type="checkbox" name="activa_toggle" id="activa_toggle" {{  ($categoria->activa == 1 ? ' checked' : '') }} disabled class="sr-only peer">
                                        <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-zinc-600 peer-checked:bg-red-600"></div>
                                    </label>
                                    {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                    <input type="hidden" id="activa" name="activa" value="{{ $categoria->activa ? 1 : 0 }}">
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="sm:flex sm:items-center sm:justify-between">
                    {{-- <h1>Hola</h1> --}}
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    {{-- <h1>Hola</h1> --}}
                </div>
            </div>
            
        </div>
    </div>
    @endsection
    
</x-privado-layout>