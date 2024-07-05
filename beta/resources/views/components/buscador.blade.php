{{-- <div class="p-8 w-full">
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
                <input type="buscar" id="search-dropdown" name="query"
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
    
</div> --}}

{{-- <script>
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
</script> --}}
<style>

.resultados {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    max-height: 300px;
    overflow-y: auto;
    border: 1px solid #da0d0d;
    border-top: none;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    z-index: 1000;
}

.resultados h3 {
    font-weight: bold;
    margin: 10px 0 5px;
    padding: 0 10px;
    font-size: 16px;
    color: #af0e0e;
}

.resultados ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.resultados li {
    padding: 5px 10px;
    border-bottom: 1px solid #ce1313;
    color: white;
}

.resultados li:last-child {
    border-bottom: none;
}

</style>

<div class="relative pt-4 w-full">
    <div class="relative">
        <input type="text" id="buscador-input" name="query"
            class="block p-2.5 w-full z-20 text-sm rounded-e-lg border-s-2 border bg-zinc-700 border-s-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:border-red-500"
            placeholder="Buscar..." required />
        <button type="submit"
            class="absolute top-0 end-0 p-2 text-sm font-medium h-full text-zinc-800 hover:text-red-500 bg-red-500 hover:bg-zinc-800 rounded-e-lg border border-zinc-800 hover:border-red-500 focus:ring-4 focus:outline-none focus:ring-red-800">
            <i class="lni lni-keyword-research text-xl mb-2"></i>
            <span class="sr-only">Buscar</span>
        </button>
    </div>
    <div id="resultados" class="resultados bg-oscuro-transp"></div>
</div>

{{-- <input type="text" id="buscador-input" placeholder="Buscar..."> --}}


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let searchTimer;
    const $buscadorInput = $('#buscador-input');
    const $resultados = $('#resultados');

    $buscadorInput.on('input', function() {
        clearTimeout(searchTimer);
        let query = $(this).val();
        
        if (query.length < 3) {
            $resultados.hide().empty();
            return;
        }
        
        searchTimer = setTimeout(function() {
            $.ajax({
                url: "{{ route('biblioteca.comunicados.buscar') }}",
                method: 'GET',
                data: { query: query },
                success: function(data) {
                    let html = '';
                    
                    if (data.comunicados.length > 0) {
                        html += '<h3>Comunicados</h3><ul>';
                        data.comunicados.forEach(function(item) {
                            html += '<li>' + item.titulo + '</li>';
                        });
                        html += '</ul>';
                    }
                    
                    if (data.noticias.length > 0) {
                        html += '<h3>Noticias</h3><ul>';
                        data.noticias.forEach(function(item) {
                            html += '<li>' + item.titulo + '</li>';
                        });
                        html += '</ul>';
                    }
                    
                    if (data.documentos.length > 0) {
                        html += '<h3>Documentos</h3><ul>';
                        data.documentos.forEach(function(item) {
                            html += '<li>' + item.titulo + '</li>';
                        });
                        html += '</ul>';
                    }
                    
                    if (html) {
                        $resultados.html(html).show();
                    } else {
                        $resultados.hide().empty();
                    }
                }
            });
        }, 300);
    });

    // Cerrar resultados al hacer clic fuera del área de búsqueda
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.search-container').length) {
            $resultados.hide();
        }
    });
});
</script>