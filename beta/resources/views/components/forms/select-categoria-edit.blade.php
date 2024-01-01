<div class="">
    <label for="categoria" class="block mb-2 text-sm font-medium text-white">Categoría</label>
    <select class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400" id="categoria" name="categoria" required="">
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}"
                @if(old('categoria',$tipo->categoria?->id) == $categoria->id) selected @endif >
                {{ $categoria->nombre }}
            </option>
        @endforeach
    </select>
</div>
