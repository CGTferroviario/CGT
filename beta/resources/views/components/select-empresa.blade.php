<div class="">
    <label for="empresa" class="block mb-2 text-sm font-medium text-white">Empresa</label>
    <select class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-gray-400" id="empresa" name="empresa" required="">
            <option value="Elige empresa">Elige empresa</option>
        @foreach ($empresas as $empresa)
            <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
        @endforeach
    </select>
</div>