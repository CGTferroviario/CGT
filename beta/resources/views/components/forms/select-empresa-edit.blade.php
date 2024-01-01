<div class="">
    <label for="empresa" class="block mb-2 text-sm font-medium text-white">Empresa</label>
    <select class="bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-zinc-400" id="empresa" name="empresa" required="">
        @foreach ($empresas as $empresa)
            <option value="{{ $empresa->id }}"
                @if(old('empresa',$tipo->empresa?->id) == $empresa->id) selected @endif >
                {{ $empresa->nombre }}
            </option>
        @endforeach
    </select>
</div>
