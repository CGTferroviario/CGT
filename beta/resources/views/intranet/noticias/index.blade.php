<x-privado-layout>

    {{-- <x-slot name="header">
        <h2 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">
            {{ __('Noticias') }}
        </h2>
    </x-slot> --}}
    <h1 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">NOTICIAS</h1>

    @section('contenido')
        <div class="p-8 fondo noticias">
            <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
                <div class="grid grid-cols-3 mt-2 mb-3">
                    <div class="sm:flex sm:items-center sm:justify-start">

                    </div>
                    <div class="sm:flex-row sm:items-center sm:justify-between">
                        <x-mensaje></x-mensaje>
                        <div class="flex items-center gap-x-3">
                            <h2 class="text-lg font-bold text-zinc-800">Noticias</h2>
                            <span
                                class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $noticias->count() }}</span>
                            <p class="mt-1 text-sm text-zinc-500">Estas son los noticias que llevamos este año.</p>
                        </div>

                    </div>
                    <div class="sm:flex sm:items-center sm:justify-end">
                        <div class="flex items-center gap-x-3 align-middle">
                            <button
                                class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-zinc-100"
                                title="Importar datos desde un archivo .csv">
                                <i class="lni lni-upload"></i>
                                <span>Importar CSV</span>
                            </button>
                            <button
                                class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-zinc-900 hover:text-red-500"
                                title="Añadir un nuevo noticia">
                                <i class="lni lni-add-files"></i>
                                <a href="{{ route('intranet.noticias.create') }}" class="">Añadir noticia</a>
                            </button>
                        </div>
                    </div>
                </div>
                <table id="comunicadosAdmin" class="display nowrap text-sm pt-5 font-normal rounded-t-lg"
                    style="width:100%">
                    <thead class="rounded-t-lg bg-black text-white">
                        <tr>
                            <th title="Autor" class="rounded-tl-lg">Autor</th>
                            <th>Acciones</th>
                            <th>Fecha</th>
                            <th title="Visualizaciones">Vis.</th>
                            <th>Título</th>
                            <th>Empresa</th>
                            <th>Categoría</th>
                            <th class="rounded-tr-lg">Etiquetas</th>
                            <th>Cuerpo</th>
                            <th>Adjunto</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($noticias as $noticia)
                            <tr>
                                <td>{{ $noticia->user?->nombre }}</td>
                                <td>
                                    <div class="flex justify-start gap-1 text-xl mt-2">
                                        <!-- Botón de Enviar -->
                                        <a href="{{ url('noticias.edit', $noticia->id) }}"
                                            class="text-blue-500 hover:bg-blue-500 hover:text-white p-1 rounded-lg h-8"
                                            title="Enviar por correo">
                                            <i class="lni lni-envelope"></i>
                                        </a>

                                        <!-- Botón de Editar -->
                                        <a href="{{ route('intranet.noticias.edit', $noticia->id) }}"
                                            class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8"
                                            title="Editar Noticia">
                                            <i class="lni lni-pencil"></i>
                                        </a>

                                        <!-- Botón de Eliminar -->
                                        <form method="POST" action="{{ route('intranet.noticias.destroy', $noticia->id) }}" class=""
                                            onsubmit="return confirm('¿Deseas eliminar este noticia?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                                <i class="lni lni-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>

                                <td>{{ $noticia->fecha }}</td>
                                <td>{{ $noticia->visualizaciones }}</td>

                                <td>{{ $noticia->titulo }}</td>
                                <td>
                                    <div class="py-0.5 px-2 inline rounded-full font-semibold badge-{{ $noticia->empresa?->slug }}">
                                        @if ($noticia->empresa)
                                            <a href="{{ route('empresas.show', ['slug' => $noticia->empresa?->slug]) }}" target="_blank">{{ $noticia->empresa?->nombre }}</a>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="py-0.5 px-2 inline rounded-full font-semibold badge-{{ $noticia->categoria?->slug }}">
                                        @if ($noticia->categoria)
                                            <a href="{{ route('categorias.show', ['slug' => $noticia->categoria?->slug]) }}" target="_blank">{{ $noticia->categoria?->nombre }}</a>
                                        @endif
                                    </div>
                                <td>
                                    @foreach ($noticia->etiquetas as $etiqueta)
                                        <span class="py-0.5 px-2 rounded-full font-semibold bg-blue-500">
                                            {{ $etiqueta->nombre }}<br>
                                        </span>
                                    @endforeach
                                </td>
                                <td>{!! $noticia->cuerpo !!}</td>
                                <td>{{ $noticia->adjunto }}</td>
                                <td>{{ $noticia->imagen }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

</x-privado-layout>
