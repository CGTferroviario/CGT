<div class="">
    <label for="categoria" class="block mb-2 text-sm font-medium text-white">Categoría</label>
    <select class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-gray-400" id="categoria" name="categoria" required="">
            <option value="Elige categoria">Elige categoria</option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach
    </select>
</div>