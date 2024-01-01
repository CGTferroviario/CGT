<div class="multiselect">
    <label for="etiquetas" class="block mb-2 text-sm font-medium text-white">Etiquetas</label>
    <div class="selectBox" onclick="showCheckboxes()">
        <select class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400">
            <option>Selecciona etiquetas</option>
        </select>
        <div class="overSelect"></div>
    </div>
    <div id="checkboxes" class="p-1 w-auto bg-zinc-700 text-xs text-white rounded-lg bordeRojo absolute h-48 overflow-auto">
        @foreach ($etiquetas as $etiqueta)
            <label for="{{ $etiqueta->nombre }}">
                @if (old('etiqueta'))
                    <input type="checkbox" name="etiquetas[]" id="{{ $etiqueta->nombre }}" value="{{ $etiqueta->id }}" {{ in_array($etiqueta->id, old('etiqueta')) ? 'checked' : '' }} />{{ $etiqueta->nombre }}
                @else
                    <input type="checkbox" name="etiquetas[]" id="{{ $etiqueta->nombre }}" value="{{ $etiqueta->id }}" {{ $tipo->etiquetas->contains($etiqueta->id) ? 'checked' : '' }} />{{ $etiqueta->nombre }}
                @endif
            </label>
        @endforeach
    </div>
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