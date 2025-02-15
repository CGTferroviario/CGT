@extends('plantillas.publica')

@section('contenido')
<h1 class="m-0 py-3 text-center bg-rojoBrillante">CONTACTO</h1>
<div class="container mt-5">
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <form action="" method="post" action="{{ route('contact.store') }}">
        @csrf
        <div class="form-group">
            <label class="blanco">Nombre</label>
            <input type="text" class="form-control {{ $errors->has('nombre') ? 'error' : '' }}" name="nombre" id="nombre">
            <!-- Error -->
            @if ($errors->has('nombre'))
            <div class="error">{{ $errors->first('nombre') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label class="blanco">Email</label>
            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
            @if ($errors->has('email'))
            <div class="error">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label class="blanco">Telefono</label>
            <input type="text" class="form-control {{ $errors->has('telefono') ? 'error' : '' }}" name="telefono" id="telefono">
            @if ($errors->has('telefono'))
            <div class="error">{{ $errors->first('telefono') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label class="blanco">Asunto</label>
            <input type="text" class="form-control {{ $errors->has('asunto') ? 'error' : '' }}" name="asunto" id="asunto">
            @if ($errors->has('asunto'))
            <div class="error">{{ $errors->first('asunto') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label class="blanco">Mensaje</label>
            <textarea class="form-control {{ $errors->has('mensaje') ? 'error' : '' }}" name="mensaje" id="mensaje" rows="4"></textarea>
            @if ($errors->has('mensaje'))
            <div class="error">{{ $errors->first('mensaje') }}</div>
            @endif
        </div>
        <input type="submit" name="send" value="Enviar" class="btn btn-outline-danger btn-block mt-3">
    </form>
</div>
@endsection