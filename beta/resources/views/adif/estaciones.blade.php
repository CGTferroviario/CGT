<x-publico-layout>

@section('contenido')
    <h1 class="m-0 py-3 text-center bg-ADIF font-bold">ESTACIONES DE VIAJEROS</h1>
    <div class="fondo estaciones">
        <div class="p-6 grid grid-cols-2 gap-4">
            <div class="intro bg-oscuro-7 bordeRojo rounded-lg p-4 text-white">
                <p class="text-center">Bienvenid@ a la sección de Estaciones de Viajeros.</p>
                <p class="text-justify">Si desempeñas tu labor en alguna estación de Adif, aquí encontrarás información útil para tu trabajo.<br>
                    También podrás conocer el trabajo que hacemos en CGT para mejorar las condiciones laborales de l@s compañer@s que trabajan en las estaciones de viajeros.
                </p>
            </div>
            <div class="buscador">
                <form>
                    <div class="flex">
                        <label for="search-dropdown" class="mb-2 text-sm font-medium sr-only text-white">Your Email</label>
                        <button id="dropdown-button" data-dropdown-toggle="dropdownBuscador" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center border rounded-l-lg focus:ring-2 focus:outline-none bg-gray-700 hover:bg-gray-600 focus:ring-red-700 text-white border-gray-600" type="button">Categorías <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <div id="dropdownBuscador" class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 bg-gray-700">
                            <ul class="py-2 text-sm text-gray-200" aria-labelledby="dropdown-button">
                                <li>
                                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-600 hover:text-white">Etiquetas</button>
                                </li>
                                <li>
                                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-600 hover:text-white">Empresas</button>
                                </li>
                            </ul>
                        </div>
                        <div class="relative w-full">
                            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-red-500" placeholder="Search Mockups, Logos, Design Templates..." required>
                            <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-red-700 rounded-r-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <x-documentos :documentos=$documentos></x-documentos>
    </div>
@endsection

</x-publico-layout>