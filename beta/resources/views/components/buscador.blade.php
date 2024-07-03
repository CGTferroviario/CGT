<div class="p-8 w-full">
    <form class="mx-auto" action="{{ route('biblioteca.comunicados.buscar') }}">
        @csrf
        <div class="flex w-full">
            <div class="z-10 divide-y divide-zinc-100 rounded-l-lg shadow w-36 bg-zinc-700">
                <select id="dropdownSelectBuscarEmpresa" class="bg-zinc-700 w-36 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400" name="empresa" required="">
                    <option value="Elige empresa">Elige empresa</option>
                    @foreach ($empresas as $empresa)
                        <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="z-10 divide-y divide-zinc-100 shadow w-36 bg-zinc-700">
                <select id="dropdownSelectBuscarCategoria" class="bg-zinc-700 w-36 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400" name="categoria" required="">
                    <option value="Elige categoria">Elige categoría</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="z-10 divide-y divide-zinc-100 shadow w-48 bg-zinc-700">
                <div class="multiselect w-48">
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
                    class="block p-2.5 w-full z-20 text-sm rounded-e-lg border-s-2 border bg-zinc-700 border-s-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:border-red-500"
                    placeholder="Busca comunicados..." required />
                <button type="submit"
                    class="absolute top-0 end-0 p-2 text-sm font-medium h-full text-zinc-800 hover:text-red-500 bg-red-500 hover:bg-zinc-800 rounded-e-lg border border-zinc-800 hover:border-red-500 focus:ring-4 focus:outline-none focus:ring-red-800">
                    <i class="lni lni-keyword-research text-xl mb-2"></i>
                    <span class="sr-only">Buscar</span>
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
