{{-- @extends('layouts.app') --}}
@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-grisClaro">
                <div class="card-header">{{ __('Panel de Control') }}</div>

                <div class="card-body centrado">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Estás logueado!') }} 
                    <h2>Documentos</h2>
                    <button class="btn btn-outline-danger">Añadir Documento</button>
                    <button class="btn btn-outline-danger">Modificar Documento</button>
                    <button class="btn btn-outline-danger">Mostrar Documento</button>
                    <button class="btn btn-outline-danger">Eliminar Documento</button>

                    <h2>Secciones</h2>
                    <button class="btn btn-outline-danger">Añadir Sección</button>
                    <button class="btn btn-outline-danger">Modificar Sección</button>
                    <button class="btn btn-outline-danger">Mostrar Sección</button>
                    <button class="btn btn-outline-danger">Eliminar Sección</button>

                    <h2>Empresas</h2>                    
                    <button class="btn btn-outline-danger">Añadir Empresa</button>
                    <button class="btn btn-outline-danger">Modificar Empresa</button>
                    <button class="btn btn-outline-danger">Mostrar Empresa</button>
                    <button class="btn btn-outline-danger">Eliminar Empresa</button>

                    <h2>Usuarios</h2>                    
                    <button class="btn btn-outline-danger">Añadir Usuario</button>
                    <button class="btn btn-outline-danger">Modificar Usuario</button>
                    <button class="btn btn-outline-danger">Mostrar Usuario</button>
                    <button class="btn btn-outline-danger">Eliminar Usuario</button>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    
                </div>

            </div> --}}
        </div>
    </div>
</div>

@endsection
