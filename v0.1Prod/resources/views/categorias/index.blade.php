@extends('plantillas.principal')

@section('contenido')

<div class="container-fluid fondo documentos">
    <div class="container">
        <div class="row">
            <h1 class="m-0 py-3 centrado cabecera negro grande bg-rojoBrillante">CATEGORÍAS</h1>
            <div class="">
                <a href="{{ route('categorias.create') }}" class="btn btn-success">Añadir Categoria</a>
            </div>
            <div class="col-md-12">
                <table class="table bg-blanco">        
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                    </tr>
                    @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->nombre }}</td>
                        <td>{{ $categoria->id_empresa }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection