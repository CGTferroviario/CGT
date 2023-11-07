<div class="multiselect">
    <label for="etiquetas" class="block mb-2 text-sm font-medium text-white">Etiquetas</label>
    <div class="selectBox" onclick="showCheckboxes()">
        <select class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-gray-400">
            <option>Selecciona etiquetas</option>
        </select>
        <div class="overSelect"></div>
    </div>
    <div id="checkboxes" class="p-1 w-auto bg-gray-700 text-xs text-white rounded-lg bordeRojo absolute h-48 overflow-auto">
        @foreach ($etiquetas as $etiqueta)
            <label for="{{ $etiqueta->nombre }}">
                <input type="checkbox" name="etiquetas[]" id="{{ $etiqueta->nombre }}" value="{{ $etiqueta->id }}" />{{ $etiqueta->nombre }}
            </label>
        @endforeach
    </div>
</div>