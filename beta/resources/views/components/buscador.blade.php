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

<div class="relative pt-8 p-8 w-full">
    <div class="relative">
        <input type="text" id="buscador-input" name="query"
            class="block p-2.5 w-full z-20 text-sm rounded-e-lg border-s-2 border bg-zinc-700 border-s-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:border-red-500 focus:ring-red-800"
            placeholder="Buscar..." required />
        <button type="submit"
            class="absolute top-0 end-0 p-2 text-sm font-medium h-full text-zinc-800 hover:text-red-500 bg-red-500 hover:bg-zinc-800 rounded-e-lg border border-zinc-800 hover:border-red-500 focus:ring-4 focus:outline-none focus:ring-red-800">
            <i class="lni lni-keyword-research text-xl mb-2"></i>
            <span class="sr-only">Buscar</span>
        </button>
    </div>
    <div id="resultados" class="z-10 absolute w-full p-2 max-h-80 bg-oscuro-transp rounded-lg shadow-lg overflow-hidden overflow-y-auto hidden"></div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let searchTimer;
        const $searchInput = $('#buscador-input');
        const $searchResults = $('#resultados');
    
        $searchInput.on('input', function() {
            clearTimeout(searchTimer);
            let query = $(this).val();
            
            if (query.length < 3) {
                $searchResults.hide().empty();
                return;
            }
            
            searchTimer = setTimeout(function() {
                $.ajax({
                    url: "{{ route('biblioteca.comunicados.buscar') }}",
                    method: 'GET',
                    data: { query: query },
                    success: function(data) {
                        let html = '';
                        
                        ['comunicados', 'noticias', 'documentos'].forEach(function(category) {
                            if (data[category].length > 0) {
                                html += `<h3 class="px-4 py-2 text-lg font-semibold text-red-500 bg-oscuro-transp">${category.charAt(0).toUpperCase() + category.slice(1)}</h3>`;
                                html += '<div class="grid grid-cols-1 gap-2 p-2">';
                                data[category].forEach(function(item) {
                                    html += `
                                        <div class="p-3 bg-zinc-200/75 rounded-lg shadow cursor-pointer hover:bg-zinc-900/75" data-slug="${item.slug}" data-type="${category}">
                                            <h4 class="font-medium text-red-500">${item.numero}.-${item.titulo}</h4>
                                            <p class="text-sm text-zinc-600">${item.cuerpo.substring(0, 100)}...</p>
                                        </div>
                                    `;
                                });
                                html += '</div>';
                            }
                        });
                        
                        if (html) {
                            $searchResults.html(html).show();
                        } else {
                            $searchResults.hide().empty();
                        }
                    }
                });
            }, 300);
        });

        // Manejar clic en un resultado
        $searchResults.on('click', '[data-slug]', function() {
            const slug = $(this).data('slug');
            const type = $(this).data('type');
            if (type === 'comunicados') {
                console.log(`Mostrar ${type} con ID: ${slug}`);
                window.location.href = `/comunicados/${slug}`;
                
            } else {
                // Manejar otros tipos (noticias, documentos) si es necesario
            }
        });

        // Manejar la tecla Enter
        $searchInput.on('keypress', function(e) {
            if (e.which === 13) { // 13 es el código de la tecla Enter
                e.preventDefault();
                const query = $(this).val();
                if (query.length >= 3) {
                    window.location.href = `/buscador?q=${encodeURIComponent(query)}`;
                }
            }
        });
    
        // Cerrar resultados al hacer clic fuera del área de búsqueda
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.relative').length) {
                $searchResults.hide();
            }
        });
    });
</script>
{{-- <script>
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
</script> --}}