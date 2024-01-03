<div class="grid grid-cols-3 gap-4">
    <div>
        <label for="ccaa_id" class="block mb-2 text-sm font-medium text-white">Comunidad Autónoma</label>
        <select name="ccaa_id" id="ccaa_id" required class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400">
            @foreach($ccaas as $ccaa)
                <option value="{{ $ccaa->id }}" {{ old('ccaa_id') == $ccaa->id ? 'selected' : '' }}>
                    {{ $ccaa->nombre }}
                </option>
            @endforeach
        </select>
        
    </div>
    <div>
        <label for="provincia_id" class="block mb-2 text-sm font-medium text-white">Provincia</label>
        <select name="provincia_id" id="provincia_id" required class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400">
        </select>
    </div>
    <div>
        <label for="municipio_id" class="block mb-2 text-sm font-medium text-white">Municipio</label>
        <select name="municipio_id" id="municipio_id" required class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400">
        </select>
    </div>
</div>
{{-- 
<script>
    
    let ccaaSelect;
    let provinciaSelect;
    let municipioSelect;

    document.addEventListener('DOMContentLoaded', function() {
        ccaaSelect = document.getElementById('ccaa_id');
        provinciaSelect = document.getElementById('provincia_id');
        municipioSelect = document.getElementById('municipio_id');
    
        ccaaSelect.addEventListener('change', function() {
            let ccaaId = this.value;

            // Hacer una solicitud AJAX para obtener las provincias de la comunidad autónoma
            fetch(`/intranet/provincias/${ccaaId}`)
                .then(response => response.text())
                .then(data => {
                    // Insertar la respuesta HTML directamente en el select de provincias
                    provinciaSelect.innerHTML = data;
                    // Si hay una sola provincia, carga automáticamente los municipios
                    loadMunicipios(provinciaSelect.value);
                });
        });

        provinciaSelect.addEventListener('change', function() {
            loadMunicipios(this.value);
        });

        // Función para cargar los municipios
        function loadMunicipios(provinciaId) {
            // Hacer una solicitud AJAX para obtener los municipios de la provincia
            fetch(`/intranet/municipios/${provinciaId}`)
                .then(response => response.text())
                .then(data => {
                    // Insertar la respuesta HTML directamente en el select de municipios
                    municipioSelect.innerHTML = data;
                });
        }
        // Cargar automáticamente los municipios de la primera provincia al cargar la página
        if (ccaaSelect.value) {
            fetch(`/intranet/provincias/${ccaaSelect.value}`)
                .then(response => response.text())
                .then(data => {
                    provinciaSelect.innerHTML = data;
                    // carga automáticamente los municipios
                    loadMunicipios(provinciaSelect.value);
                });
        }
    });
    
    
</script> --}}

<script>

let ccaaSelect;
let provinciaSelect;
let municipioSelect;

document.getElementById('ccaa_id').addEventListener('change', function() {
    fetch(`/intranet/provincias/${this.value}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('provincia_id').innerHTML = data;
            // Si hay una sola provincia, carga automáticamente los municipios
            loadMunicipios(provinciaSelect.value);
        });
});
document.getElementById('provincia_id').addEventListener('change', function() {
    fetch(`/intranet/municipios/${this.value}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('municipio_id').innerHTML = data;
        });
});
function loadMunicipios(provinciaId) {
            // Hacer una solicitud AJAX para obtener los municipios de la provincia
            fetch(`/intranet/municipios/${provinciaId}`)
                .then(response => response.text())
                .then(data => {
                    // Insertar la respuesta HTML directamente en el select de municipios
                    municipioSelect.innerHTML = data;
                });
        }

</script>