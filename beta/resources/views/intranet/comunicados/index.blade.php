<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Comunicados') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-4">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <table id="comunicadosAdmin" class="display nowrap text-sm font-normal bg-gray-200" style="width:100%">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Acciones</th>
                        <th>Fecha</th>
                        <th>Empresa</th>                        
                        <th>Categorías</th>
                        <th>Etiquetas</th>
                        <th>Título</th>
                        <th>Subtítulo</th>
                        <th>Cuerpo</th>
                        <th>Adjunto 1</th>
                        <th>Adjunto 2</th>
                        <th>Adjunto 3</th>
                        <th>Imagen</th>
                        <th>Visualizaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comunicados as $comunicado)
                    <tr>
                        <td>{{ $comunicado->numero }}</td>
                        <td>
                            <div class="flex justify-start gap-1 text-xl mt-2">
                                {{-- <div class="rounded-md p-2 hover:bg-blue-300 hover:text-white icono">
                                    <a href="" class=""><i class="lni lni-envelope"></i></a>
                                </div> --}}
                                <a x-data="{ tooltip: 'Enviar' }" href="{{ url('comunicados.edit', $comunicado->id) }}"
                                    class="text-blue-500 hover:bg-blue-500 hover:text-white p-1 rounded-lg h-8" title="Enviar por correo">
                                    <i class="lni lni-envelope"></i>
                                </a> 
                                <a x-data="{ tooltip: 'Edite' }" href="{{ url('comunicados.edit', $comunicado->id) }}"
                                    class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar Comunicado">
                                    <i class="lni lni-pencil"></i>
                                </a>                                
                                <form method="POST" action="{{ url('comunicados.destroy', $comunicado->id) }}" onsubmit="return confirm('¿Deseas eliminar este comunicado?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" p-1 rounded-md">
                                        <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar Comunicado" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                            <i class="lni lni-trash-can"></i>
                                        </a>
                                    </button>
                                </form>                                
                            </div>
                        </td>
                        <td>{{ $comunicado->fecha }}</td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span></td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span></td>
                        <td>{{ $comunicado->etiqueta->nombre }}</td>
                        <td>{{ $comunicado->titulo }}</td>
                        <td>{{ $comunicado->subtitulo }}</td>
                        {{-- <td>{!! nl2br(e($comunicado->cuerpo))!!}</td> --}}
                        <td>{{ $comunicado->cuerpo }}</td>
                        <td>{{ $comunicado->adjunto1 }} 1</td>
                        <td>{{ $comunicado->adjunto2 }} 2</td>
                        <td>{{ $comunicado->adjunto3 }} 3</td>
                        <td>{{ $comunicado->imagen }}</td>
                        <td>{{ $comunicado->visualizaciones }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
    
</x-privado-layout>