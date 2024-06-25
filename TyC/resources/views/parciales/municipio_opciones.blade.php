<div>
    @foreach($municipios as $municipio)
        <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
    @endforeach
</div>
