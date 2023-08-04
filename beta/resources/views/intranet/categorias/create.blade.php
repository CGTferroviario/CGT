<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Categorias') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500" title="Volver a Categorias">
                        <i class="lni lni-arrow-left"></i>
                        <a href="{{ route('intranet.categorias.index') }}" class="">Volver al Índice de categorias</a>
                    </button>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-gray-800">Categorias</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $categorias->count() }}</span>
                        <p class="mt-1 text-sm text-gray-500">Estas son las categorias que tenemos registradas.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    
                </div>
            </div>
            <div class="grid grid-cols-4">
                <div class="col-span-3 bg-oscuro-7 rounded-lg">
                    <div class="py-8 px-4 mx-auto">
                        <h2 class="mb-4 text-xl font-bold text-white text-center">Añadir Categoria</h2>
                        <form action="{{ route('intranet.categorias.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="grid grid-cols-4 gap-4">
                                <div class="col-span-3">
                                    <div class="grid gap-4 sm:grid-cols-5 sm:gap-6 mt-3">
                                        <div class="col-span-2">
                                            <label for="nombre" class="block mb-2 text-sm font-medium text-white">Nombre</label>
                                            <input type="text" name="nombre" id="nombre" class="w-full bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-gray-400" placeholder="" value="" required="">
                                        </div>
                                        <div class="text-center">
                                            <label for="comunicados" class="block mb-2 text-sm font-medium text-white">Comunicados</label>
                                            <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                                <input type="checkbox" name="comunicados" id="comunicados" value="" class="sr-only peer">
                                                <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-black dark:peer-focus:ring-red-800 bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600"></div>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <label for="gestion_vales" class="block mb-2 text-sm font-medium text-white">Gestión Vales</label>
                                            <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                                <input type="checkbox" name="gestion_vales" id="gestion_vales" value="" class="sr-only peer" checked>
                                                <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-500 bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-gray-600 peer-checked:bg-blue-600"></div>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <label for="activa" class="block mb-2 text-sm font-medium text-white">Activa</label>
                                            <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                                <input type="checkbox" name="activa" id="activa" value="" class="sr-only peer" disabled>
                                                <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            </label>
                                        </div>
                                        <div class="col-span-5">
                                            <label for="descripcion" class="block mb-2 text-sm font-medium text-white">Descripción</label>
                                            <textarea id="descripcion" rows="5" class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 dark:placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Descripción de la categoria y sus funciones..."></textarea>
                                        </div>
                                    </div> 
                                </div>
                                <div class="mt-3">
                                    <label for="jpg" class="block mb-2 text-sm font-medium text-white"><i class="lni lni-image text-md mr-2 mb-0"></i>Logotipo</label>
                                    <label for="dropzone-file" class="!ml-0 flex flex-col items-center justify-center w-full h-56 border-2 border-dashed rounded-lg cursor-pointer bg-gray-700 border-gray-600 hover:border-red-500 hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <i class="lni lni-cloud-upload text-3xl mb-2 text-gray-400"></i>
                                            <p class="mb-2 text-sm text-gray-400"><span class="font-semibold">Haz click o arrastra</span></p>
                                            <p class="text-xs text-gray-400">para subir un fichero <span class="font-semibold">.JPG o .PNG</span></p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="bg-red-500 w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-900 hover:bg-green-500">Subir Comunicado</button>
                            <button class="w-100 btn btn-outline-danger btn-lg" type="submit"></button>
                        </form>
                    </div>
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
                                <th>Descripción</th>                      
                                <th>Logo</th>
                                <th>Vales</th>
                                <th>Comunicados</th>
                                <th class="rounded-tr-lg">Activa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>
                                    <div class="flex justify-start gap-1 text-xl mt-2">
                                        <a x-data="{ tooltip: 'Edite' }" href="{{ url('categorias.edit', $categoria->id) }}"
                                            class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar categoria">
                                            <i class="lni lni-pencil"></i>
                                        </a>                                
                                        <form method="POST" action="{{ route('intranet.categorias.destroy', $categoria->id) }}" onsubmit="return confirm('¿Deseas eliminar esta categoria?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" p-1 rounded-md">
                                                <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar categoria" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                                    <i class="lni lni-trash-can"></i>
                                                </a>
                                            </button>
                                        </form>                                
                                    </div>
                                </td>
                                <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $categoria->nombre }}">{{ $categoria->nombre }}</span></td>
                                <td>{{ $categoria->descripcion }}</td>
                                <td>{{ $categoria->logo }}</td>
                                <td class="text-center">{{ $categoria->gestion_vales }}</td>
                                <td class="text-center">{{ $categoria->comunicados }}</td>
                                <td class="text-center">{{ $categoria->activa }}</td>
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