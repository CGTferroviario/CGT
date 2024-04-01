<div class="grid grid-cols-1 mx-auto p-8">
    <div class="justify-self-end">
        <form action="{{ route('biblioteca.comunicados.buscar') }}" method="GET">
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-3 mb-4">
                    <label for="termino" class="block text-zinc-700 text-sm font-bold mb-2">Término de
                        búsqueda:</label>
                    <input type="text" name="termino" id="termino"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4 flex flex-col relative">
                    <button type="submit"
                        class="w-full absolute bottom-0 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        <i class="lni lni-search text-lg"></i>Buscar
                    </button>
                </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-4 sm:gap-6">
                <x-forms.select-empresa :empresas=$empresas></x-forms.select-empresa>

                <x-forms.select-categoria :categorias=$categorias></x-forms.select-categoria>

                {{-- <x-forms.select-etiquetas :etiquetas=$etiquetas></x-forms.select-etiquetas> --}}

                <x-forms.input-fecha></x-forms.input-fecha>
            </div>
        </form>
    </div>
</div>

<div class="px-8">
    <form class="mx-auto">
        <div class="flex w-full">
            <label for="search-dropdown" class="mb-2 text-sm font-medium text-zinc-900 sr-only dark:text-white">Your
                Email</label>
            {{-- <button id="dropdown-button" data-dropdown-toggle="dropdownSelectBuscar"
                class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-zinc-900 bg-zinc-100 border border-zinc-300 rounded-s-lg hover:bg-zinc-200 focus:ring-4 focus:outline-none focus:ring-zinc-100 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:focus:ring-zinc-700 dark:text-white dark:border-zinc-600"
                type="button">Todas  
                <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i>
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button> --}}
            {{-- <x-forms.select-empresa :empresas=$empresas></x-forms.select-empresa> --}}
            
            <div class="z-10 bg-white divide-y divide-zinc-100 rounded-l-lg shadow w-auto dark:bg-zinc-700">
                <select  id="dropdownSelectBuscar" class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400" id="" name="empresa" required="">
                        <option value="Elige empresa">Elige empresa</option>
                    @foreach ($empresas as $empresa)
                        <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="z-10 bg-white divide-y divide-zinc-100 rounded-l-lg shadow min-w-44 dark:bg-zinc-700">
                <select  id="dropdownSelectBuscar" class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400" id="" name="empresa" required="">
                        <option value="Elige categoria">Elige categoría</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="z-10 bg-white divide-y divide-zinc-100 rounded-l-lg shadow w-auto dark:bg-zinc-700">
                <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxes()">
                        <select class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400">
                            <option>Selecciona etiquetas</option>
                        </select>
                        <div class="overSelect"></div>
                    </div>
                    <div id="checkboxes" class="p-1 w-auto bg-zinc-700 text-xs text-white rounded-lg bordeRojo absolute h-48 overflow-auto">
                        @foreach ($etiquetas as $etiqueta)
                            <label for="{{ $etiqueta->nombre }}">
                                <input type="checkbox" name="etiquetas[]" id="{{ $etiqueta->nombre }}" value="{{ $etiqueta->id }}" />{{ $etiqueta->nombre }}
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="relative w-full">
                <input type="search" id="search-dropdown"
                    class="block p-2.5 w-full z-20 text-sm text-zinc-900 bg-zinc-50 rounded-e-lg border-s-zinc-50 border-s-2 border border-zinc-300 focus:ring-red-500 focus:border-red-500 dark:bg-zinc-700 dark:border-s-zinc-700  dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:border-red-500"
                    placeholder="Busca comunicados..." required />
                <button type="submit"
                    class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-red-700 rounded-e-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    // Select etiquetas multiples formulario
    var expanded = false;

    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        checkboxes.style.display = expanded ? "none" : "block";
        expanded = !expanded;

    }
    document.addEventListener('click', function(event) {
        var checkboxes = document.getElementById("checkboxes");
        var selectBox = document.querySelector(".selectBox");
        if (!checkboxes.contains(event.target) && !selectBox.contains(event.target) && expanded) {
            checkboxes.style.display = "none";
            expanded = false;
        }
    });
    // Final etiquetas
</script>
