<div>
    @foreach ($provincias as $provincia)
        <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
    @endforeach
</div>
