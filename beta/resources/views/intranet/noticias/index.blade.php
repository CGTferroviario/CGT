<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Noticias') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo noticias">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-start">
                    <div class="inline-flex overflow-hidden text-white divide-x rounded-lg rtl:flex-row-reverse">
                        <button class="px-3 py-2 text-xs font-medium text-black transition-colors duration-200 bg-red-500 sm:text-sm">
                            Todos
                        </button>
                        <button class="px-3 py-2 text-xs font-medium bg-oscuro transition-colors duration-200 sm:text-sm hover:bg-red-500 hover:text-gray-900">
                            Por empresa
                        </button>
                        <button class="px-3 py-2 text-xs font-medium bg-oscuro transition-colors duration-200 sm:text-sm hover:bg-red-500 hover:text-black">
                            Por categoría
                        </button>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-gray-800">Noticias</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $noticias->count() }}</span>
                        <p class="mt-1 text-sm text-gray-500">Estas son los noticias que llevamos este año.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    <div class="flex items-center gap-x-3 align-middle">
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-gray-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500" title="Añadir un nuevo noticia">
                            <i class="lni lni-add-files"></i>
                            <a href="{{ route('intranet.noticias.create') }}" class="">Añadir noticia</a>
                        </button>
                    </div>
                </div>
            </div> 
            <table id="comunicadosAdmin" class="display nowrap text-sm pt-5 font-normal rounded-t-lg" style="width:100%">
                <thead class="rounded-t-lg bg-green-300">
                    <tr>
                        <th>Nº</th>
                        <th>Acciones</th>
                        <th>Fecha</th>
                        <th title="Visualizaciones">Vis.</th>
                        <th title="Autor">Autor</th>
                        <th>Título</th>
                        <th>Empresa</th>                        
                        <th>Categorías</th>
                        <th>Etiquetas</th>
                        <th>Subtítulo</th>
                        <th>Cuerpo</th>
                        <th>Adjunto 1</th>
                        <th>Adjunto 2</th>
                        <th>Adjunto 3</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noticias as $noticia)
                    <tr>
                        {{-- @dd($noticia) --}}
                        <td>{{ $noticia->numero }}</td>
                        <td>
                            <div class="flex justify-start gap-1 text-xl mt-2">
                                {{-- <div class="rounded-md p-2 hover:bg-blue-300 hover:text-white icono">
                                    <a href="" class=""><i class="lni lni-envelope"></i></a>
                                </div> --}}
                                <a x-data="{ tooltip: 'Enviar' }" href="{{ url('noticias.edit', $noticia->id) }}"
                                    class="text-blue-500 hover:bg-blue-500 hover:text-white p-1 rounded-lg h-8" title="Enviar por correo">
                                    <i class="lni lni-envelope"></i>
                                </a> 
                                <a x-data="{ tooltip: 'Edite' }" href="{{ url('noticias.edit', $noticia->id) }}"
                                    class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar Noticia">
                                    <i class="lni lni-pencil"></i>
                                </a>                                
                                <form method="POST" action="{{ url('noticias.destroy', $noticia->id) }}" onsubmit="return confirm('¿Deseas eliminar este noticia?');">
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
                        <td>{{ $noticia->fecha }}</td>
                        <td>{{ $noticia->visualizaciones }}</td>
                        <td>{{ $noticia->user?->nombre }}</td>
                        <td>{{ $noticia->titulo }}</td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $noticia->empresa?->nombre }}">{{ $noticia->empresa?->nombre }}</span></td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $noticia->categoria?->nombre }}">{{ $noticia->categoria?->nombre }}</span></td>
                        <td>{{ $noticia->etiqueta?->nombre }}</td>
                        <td>{{ $noticia->subtitulo }}</td>
                        <td>{!! nl2br(e($noticia->cuerpo))!!}</td>
                        {{-- <td>{{ $noticia->cuerpo }}</td> --}}
                        <td>{{ $noticia->adjunto1 }} 1</td>
                        <td>{{ $noticia->adjunto2 }} 2</td>
                        <td>{{ $noticia->adjunto3 }} 3</td>
                        <td>{{ $noticia->imagen }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
    
</x-privado-layout>