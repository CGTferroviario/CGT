<x-publico-layout>

    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-rojoBrillante font-bold">COMUNICADOS</h1>
        <div class="fondo comunicados">
            <div class="busqueda p-4 pt-6 flex justify-end">
                <div class="w-1/4">
                    <form class="">
                        <div class="flex w-full">
                            <button id="dropdown-button-2" data-dropdown-toggle="dropdown-search-city"
                                class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-md font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                                type="button">
                                <i class="lni lni-tag mr-2"></i> <span class="">Etiqueta</span> <i
                                    class="lni lni-chevron-down ml-2"></i>
                            </button>
                            <div id="dropdown-search-city"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-md text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdown-button-2">
                                    <li>
                                        <button type="button"
                                            class="inline-flex w-full px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">
                                            <div class="inline-flex items-center">
                                                <i class="lni lni-flag-alt"></i>
                                                Categoría
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button"
                                            class="inline-flex w-full px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">
                                            <div class="inline-flex items-center">
                                                <i class="lni lni-hammer"></i>
                                                Colectivo
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button"
                                            class="inline-flex w-full px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">
                                            <div class="inline-flex items-center">
                                                <i class="lni lni-apartment"></i>
                                                Empresas
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button"
                                            class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">
                                            <div class="inline-flex items-center">
                                                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                                                    viewBox="0 0 512 512">
                                                    <defs>
                                                        <path id="a" fill="#ffde00"
                                                            d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                                                    </defs>
                                                    <path fill="#de2910" d="M0 0h512v512H0z" />
                                                    <use width="30" height="20"
                                                        transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a" />
                                                    <use width="30" height="20"
                                                        transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                                                    <use width="30" height="20"
                                                        transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a" />
                                                    <use width="30" height="20"
                                                        transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                                                    <use width="30" height="20"
                                                        transform="matrix(16 -19.968 19.968 16 256 230.4)"
                                                        xlink:href="#a" />
                                                </svg>
                                                China
                                            </div>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="relative w-full">
                                <input type="search" id=location-search"
                                    class="block p-2.5 w-full z-20 text-xl text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                    placeholder="Búsqueda..." required>
                                <button type="submit"
                                    class="absolute top-0 right-0 px-2 py-1.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="lni lni-search text-2xl mt-0.5"></i>
                                    <span class="sr-only">Búsqueda</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex w-full justify-end p-4">
                <div class="w-1/4">
                    <label for="large" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Elige una
                        etiqueta</label>
                    <select id="large"
                        class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Elige una etiqueta</option>
                        <option value="US">Etiqueta 1</option>
                        <option value="CA">Etiqueta 2</option>
                        <option value="FR">Etiqueta 1</option>
                        <option value="DE">Etiqueta 1</option>
                    </select>
                </div>
            </div>
            
            <div
                class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">

                <div class="col-span-4 paginacion">{{ $comunicados->links() }}</div>

                @foreach ($comunicados as $comunicado)
                    
                    <div class="mb-4 shadow hover:shadow-lg h-full flex flex-col bordeRojo rounded-lg">
                        <div class="p-4 flex-1 bg-red-500 h-full hover:bg-white rounded-t-lg">
                            <a href="{{ url('comunicados.show', $comunicado->id) }}">
                                <h1 class="font-bold text-3xl">{{ $comunicado->numero }} . {{ $comunicado->titulo }}
                                </h1>
                            </a>
                        </div>
                        <div class="p-2 text-sm text-white bg-black">
                            <span
                                class="py-0.5 px-2 rounded-full font-semibold bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span>
                            <span
                                class="py-0.5 px-2 rounded-full font-semibold bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span>
                            <span
                                class="py-0.5 px-2 rounded-full font-semibold bg-{{ $comunicado->etiqueta?->nombre }}">{{ $comunicado->etiqueta?->nombre }}</span>
                            {{-- <p class="mt-2 text-justify">{{ $comunicado->cuerpo }}</p> --}}
                        </div>
                        <div class="bg-white py-2.5 px-4 hover:bg-blue-light h-full">
                            <span class="text-black">
                                {{ $comunicado->cuerpo }}
                            </span>
                        </div>
                        <div class="p-0.5 w-full inline-flex text-lg text-center bordeTopRojo rounded-b-lg bg-red-500  ">
                            <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class=""
                                    target="blank"><i class="lni lni-display verDocs mr-2 text-2xl"></i>Visualizar</a>
                            </div>
                            <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class=""
                                    target="_blank" download="CGT_Afiliacion_Nomina"><i
                                        class="lni lni-download verDocs mr-2 text-2xl"></i>Descargar</a>
                            </div>
                        </div>
                        {{-- <div class="bg-green-900 py-2.5 px-4 hover:bg-blue-light">
                            <span class="text-yellow-500">
                                <span class="k-icon k-i-arrow-right hover:text-black"></span>
                                <span class="hover:underline hover:text-black">sdfs1</span>
                            </span>
                            <button type="button" class="text-white">
                                <span class="k-icon k-i-arrow-right hover:text-black"></span>
                                <span class="hover:underline hover:text-black">sdfs1</span>
                            </button>
                        </div> --}}
                    </div>
                    {{-- <div class="bordeRojo rounded-lg">
                        <div class="bg-grisOscuro-7 text-white rounded-lg">
                            <div class="bordeBottomRojo p-2">
                                <a href="{{ url('comunicados.show', $comunicado->id) }}">
                                    <h1 class="font-bold text-3xl">{{ $comunicado->numero }} . {{ $comunicado->titulo }}
                                    </h1>
                                </a>
                                <p class="mt-2">{{ $comunicado->subtitulo }}</p>
                            </div>
                            <div class="p-2">
                                <span
                                    class="py-1 px-2 rounded-full bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span>
                                <span
                                    class="py-1 px-2 rounded-full bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span>
                                <span
                                    class="py-1 px-2 rounded-full bg-{{ $comunicado->etiqueta?->nombre }}">{{ $comunicado->etiqueta?->nombre }}</span>
                                <p class="mt-2 text-justify">{{ $comunicado->cuerpo }}</p>
                            </div>
                            <div class="p-1 w-full inline-flex text-lg text-center bordeTopRojo">
                                <div class="w-1/2 hover:bg-red-500 hover:text-black rounded-b-md">
                                    <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="hover:text-black"
                                        target="blank"><i class="lni lni-display verDocs mr-1"></i>Visualizar</a>
                                </div>
                                <div class="w-1/2 hover:bg-red-500 hover:text-black rounded-b-md">
                                    <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="hover:text-black"
                                        target="_blank" download="CGT_Afiliacion_Nomina"><i
                                            class="lni lni-download mr-1 verDocs"></i>Descargar</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                @endforeach
            </div>
        </div>
    @endsection

</x-publico-layout>
{{-- @extends('plantillas.publica')

@section('contenido')
<h1 class="m-0 py-3 text-center font-bold bg-rojoBrillante">COMUNICADOS</h1>  
<div class="container-fluid fondo comunicados">
    <div class="row">
        <div class="px-5 pt-4">
            <div class="flex items-center max-w-md bg-dark rounded-lg mt-10 mb-10" x-data="{ search: '' }">
                <div class="w-full">
                    <input type="search" class="w-full px-4 py-1 text-red-500 rounded-full focus:outline-none"
                        placeholder="Búsqueda" x-model="search">
                </div>
                <div>
                    <button type="submit" class="flex items-center bg-blue-500 justify-center w-12 h-12 text-white rounded-r-lg"
                        :class="(search.length > 0) ? 'bg-red-500' : 'bg-gray-500 cursor-not-allowed'"
                        :disabled="search.length == 0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <label for="country" class="form-label font-bold float-right">Empresa:</label>
                    <select class="form-select rounded-xl" id="empresa" name="empresa" required="">
                            <option value="Elige empresa">Elige empresa</option>
                        @foreach ($empresas as $empresa)
                            <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="categorias_comunicado" class="form-label font-bold float-right">Categoría:</label>
                    <select class="form-select rounded-xl" id="categoria" name="categoria" required="">
                        <option value="Elige categoria">Elige Categoría</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="country" class="form-label font-bold float-right">Etiqueta:</label>
                    <select class="form-select rounded-xl" id="etiqueta" name="etiqueta" required="">
                        <option value="Elige etiqueta">Elige etiqueta</option>
                        @foreach ($etiquetas as $etiqueta)
                            <option value="{{ $etiqueta->id }}">{{ $etiqueta->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="paginacion my-3">
                    {{ $comunicados->links('vendor.pagination.tailwind') }}
                </div>
                
                @foreach ($comunicados as $comunicado)
                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100 bg-grisOscuro-7 blanco bordeRojo" style="">
                        <div class="card-header bordeBottomRojo">
                            <a href="{{ route('comunicados.show', $comunicado->id) }}"><h1 class="font-bold text-3xl">{{ $comunicado->numero }} / {{ $comunicado->titulo }}</h1></a>
                            <p class="card-text mt-2">{{ $comunicado->subtitulo }}</p>
                        </div>
                        <div class="card-body">
                            <span class="badge rounded-pill peq bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span>
                            <span class="badge rounded-pill peq bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span>
                            <span class="badge rounded-pill peq bg-{{ $comunicado->etiqueta?->nombre }}">{{ $comunicado->etiqueta?->nombre }}</span>
                            <p class="card-text mt-2 text-justify">{{ $comunicado->cuerpo }}</p>
                        </div>
                        <div class="card-footer bordeTopRojo p-1">
                            <div class="btn-group centrado w-100">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn rojoBrillante" target="blank"><i class="fa fa-eye"></i>&nbsp;&nbsp;Visualizar</a>
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn rojoBrillante" target="_blank" download="CGT_Afiliacion_Nomina"><i class="fa fa-download"></i>&nbsp;&nbsp;Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection --}}
