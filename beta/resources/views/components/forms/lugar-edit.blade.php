<div class="grid grid-cols-3 gap-4">
    <div>
        <label for="ccaa_id" class="block mb-2 text-sm font-medium text-white">Comunidad Autónoma</label>
        <select name="ccaa_id" id="ccaa_id" required class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400">
            @foreach($ccaas as $ccaa)
                <option value="{{ $ccaa->id }}" {{ old('ccaa_id', $tipo->ccaa_id) == $ccaa->id ? 'selected' : '' }}>
                    {{ $ccaa->nombre }}
                </option>
            @endforeach
        </select>
        
    </div>
    <div>
        <label for="provincia_id" class="block mb-2 text-sm font-medium text-white">Provincia</label>
        <select name="provincia_id" id="provincia_id" required class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400">
            @foreach($provincias as $provincia)
                <option value="{{ $provincia->id }}" {{ old('provincia_id', $tipo->provincia_id) == $provincia->id ? 'selected' : '' }}>
                    {{ $provincia->nombre }}
                </option>
            @endforeach
            
        </select>
    </div>
    <div>
        <label for="municipio_id" class="block mb-2 text-sm font-medium text-white">Municipio</label>
        <select name="municipio_id" id="municipio_id" required class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400">
            @foreach($municipios as $municipio)
                <option value="{{ $municipio->id }}" {{ old('municipio_id', $tipo->municipio_id) == $municipio->id ? 'selected' : '' }}>
                    {{ $municipio->nombre }}
                </option>
            @endforeach
        </select>
    </div>
</div>


<script>
document.getElementById('ccaa_id').addEventListener('change', function() {
    let ccaaId = this.value;
    fetch(`/intranet/provincias/${ccaaId}`)
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
document.getElementById('provincia_id').addEventListener('change', function() {
    let provinciaId = this.value;

    fetch(`/intranet/municipios/${provinciaId}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('municipio_id').innerHTML = data;
        });
});

document.addEventListener('DOMContentLoaded', function() {
    // Aquí va el resto de tu código JavaScript...

    if (ccaaSelect.value) {
        fetch(`/intranet/provincias/${ccaaSelect.value}`)
            .then(response => response.text())
            .then(data => {
                let provinciaSelect = document.getElementById('provincia_id');
                provinciaSelect.innerHTML = data;
                provinciaSelect.value = "{{ old('provincia_id', $tipo->provincia_id) }}";
                fetch(`/intranet/municipios/${provinciaSelect.value}`)
                    .then(response => response.text())
                    .then(data => {
                        let municipioSelect = document.getElementById('municipio_id');
                        municipioSelect.innerHTML = data;
                        // municipioSelect.value = "{{ old('municipio_id', $tipo->municipio_id) }}";
                    });
            });
    }
});


</script>
