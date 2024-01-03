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

<script>

let ccaaSelect;
let provinciaSelect;
let municipioSelect;

document.getElementById('ccaa_id').addEventListener('change', function() {
    fetch(`/intranet/provincias/${this.value}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('provincia_id').innerHTML = data;
        });
});
document.getElementById('provincia_id').addEventListener('change', function() {
    fetch(`/intranet/municipios/${this.value}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('municipio_id').innerHTML = data;
        });
});
document.getElementById('ccaa_id').addEventListener('change', function() {
    fetch(`/intranet/provincias/${this.value}`)
        .then(response => response.text())
        .then(data => {
            let provinciaSelect = document.getElementById('provincia_id');
            provinciaSelect.innerHTML = data;
            // Si solo hay una provincia, carga automáticamente los municipios
            if (provinciaSelect.childElementCount === 1) {
                fetch(`/intranet/municipios/${provinciaSelect.value}`)
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('municipio_id').innerHTML = data;
                    });
            }
        });
});


</script>

