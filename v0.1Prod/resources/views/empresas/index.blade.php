@extends('plantillas.principal')

@section('contenido')

<div class="container-fluid fondo documentos">
    <div class="container">
        <div class="row">
            <h1 class="m-0 py-3 centrado cabecera negro grande bg-rojoBrillante">EMPRESAS</h1>
            <div class="">
                <a href="{{ route('empresas.create') }}" class="btn btn-success">Añadir Empresa</a>
            </div>
            <div class="col-md-12">
                <table class="table bg-blanco">        
                    <tr>
                        <th>Nombre</th>
                        <th>Logo</th>
                        <th>Gestión de Vales</th>
                    </tr>
                    @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->nombre }}</td>
                        <td>{{ $empresa->logo }}</td>
                        <td>{{ $empresa->gestion_vales }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection