@extends('plantillas.principal')

@section('contenido')

<div class="container-fluid fondo documentos">
    <div class="container">
        <div class="row">
            <h1 class="m-0 py-3 centrado cabecera negro grande bg-rojoBrillante">ETIQUETAS</h1>
            <div class="">
                <a href="{{ route('empresas.create') }}" class="btn btn-success">Añadir Etiqueta</a>
            </div>
            <div class="col-md-12">
                <table class="table bg-blanco">        
                    <tr>
                        <th>Nombre</th>
                    </tr>
                    @foreach ($etiquetas as $etiqueta)
                    <tr>
                        <td>{{ $etiqueta->nombre }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection