<x-publico-layout>

    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-adif font-bold">MEDIDAS DE CONCILIACIÓN</h1>
        <div class="fondo conciliacion">
            <div class="busqueda p-4 pt-6 flex justify-end">
                <div class="w-1/4">
                    <form class="">
                        <div class="flex w-full">
                            <button id="dropdown-button-2" data-dropdown-toggle="dropdown-search-city" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-md font-medium text-center text-zinc-500 bg-zinc-100 border border-zinc-300 rounded-l-lg hover:bg-zinc-200 focus:ring-4 focus:outline-none focus:ring-zinc-100 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:focus:ring-zinc-700 dark:text-white dark:border-zinc-600" type="button">
                                <i class="lni lni-tag mr-2"></i> <span class="">Etiqueta</span> <i class="lni lni-chevron-down ml-2"></i>
                            </button>
                            <div id="dropdown-search-city" class="z-10 hidden bg-white divide-y divide-zinc-100 rounded-lg shadow w-44 dark:bg-zinc-700">
                                <ul class="py-2 text-md text-zinc-700 dark:text-zinc-200" aria-labelledby="dropdown-button-2">
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-zinc-700 hover:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white" role="menuitem">
                                            <div class="inline-flex items-center">
                                                <i class="lni lni-flag-alt"></i>            
                                                Categoría
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-zinc-700 hover:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white" role="menuitem">
                                            <div class="inline-flex items-center">
                                                <i class="lni lni-hammer"></i>
                                                Colectivo
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-zinc-700 hover:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white" role="menuitem">
                                            <div class="inline-flex items-center">
                                                <i class="lni lni-apartment"></i>           
                                                Empresas
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white" role="menuitem">
                                            <div class="inline-flex items-center">
                                                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512"><defs><path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/></defs><path fill="#de2910" d="M0 0h512v512H0z"/><use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/><use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/></svg>
                                                China
                                            </div>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="relative w-full">
                                <input type="search" id=location-search" class="block p-2.5 w-full z-20 text-xl text-zinc-900 bg-zinc-50 rounded-r-lg border-l-zinc-50 border-l-2 border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-l-zinc-700  dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:border-blue-500" placeholder="Búsqueda..." required>
                                <button type="submit" class="absolute top-0 right-0 px-2 py-1.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                    <label for="large" class="block mb-2 text-base font-medium text-zinc-900 dark:text-white">Elige una etiqueta</label>
                    <select id="large" class="block w-full px-4 py-3 text-base text-zinc-900 border border-zinc-300 rounded-lg bg-zinc-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Elige una etiqueta</option>
                        <option value="US">Etiqueta 1</option>
                        <option value="CA">Etiqueta 2</option>
                        <option value="FR">Etiqueta 1</option>
                        <option value="DE">Etiqueta 1</option>
                    </select>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
        <div class="col-span-4 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
            @foreach ($documentos as $documento)   
                <x-documento :documento=$documento></x-documento>
            @endforeach
        <div class="col-span-4 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
    </div>
        </div>
    @endsection
    
    </x-publico-layout>