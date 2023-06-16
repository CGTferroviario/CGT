<style>
.icono{
    font-size: 300% !important;
}
</style>

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
                    <h2>Comunicados</h2>
                    <a href="{{ route('comunicados.create') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-plus"></i><i class="icono centrado fa-solid fa-microphone"></i><br>Añadir Comunicados</a>
                    <a href="{{ route('comunicados.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-pen"></i><i class="icono centrado fa-solid fa-microphone"></i><br>Modificar Comunicados</a>
                    <a href="{{ route('comunicados.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-eye"></i><i class="icono centrado fa-solid fa-microphone"></i><br>Mostrar Comunicados</a>
                    <a href="{{ route('comunicados.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-trash"></i><i class="icono centrado fa-solid fa-microphone"></i><br>Eliminar Comunicados</a>

                    <h2>Documentos</h2>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-plus"></i><i class="icono centrado fa-solid fa-file"></i><br>Añadir Documento</a>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-pen"></i><i class="icono centrado fa-solid fa-file"></i><br>Modificar Documento</a>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-eye"></i><i class="icono centrado fa-solid fa-file"></i><br>Mostrar Documento</a>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-trash"></i><i class="icono centrado fa-solid fa-file"></i><br>Eliminar Documento</a>

                    <h2>Secciones</h2>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-plus"></i><i class="icono centrado fa-solid fa-puzzle-piece"></i><br>Añadir Sección</a>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-pen"></i><i class="icono centrado fa-solid fa-puzzle-piece"></i><br>Modificar Sección</a>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-eye"></i><i class="icono centrado fa-solid fa-puzzle-piece"></i><br>Mostrar Sección</a>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-trash"></i><i class="icono centrado fa-solid fa-puzzle-piece"></i><br>Eliminar Sección</a>

                    <h2>Etiquetas</h2>
                    <a href="{{ route('etiquetas.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-plus"></i><i class="icono centrado fa-solid fa-tag"></i><br>Añadir Etiquetas</a>
                    <a href="{{ route('etiquetas.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-pen"></i><i class="icono centrado fa-solid fa-tag"></i><br>Modificar Etiquetas</a>
                    <a href="{{ route('etiquetas.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-eye"></i><i class="icono centrado fa-solid fa-tag"></i><br>Mostrar Etiquetas</a>
                    <a href="{{ route('etiquetas.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-trash"></i><i class="icono centrado fa-solid fa-tag"></i><br>Eliminar Etiquetas</a>

                    <h2>Categorias</h2>
                    <a href="{{ route('categorias.create') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-plus"></i><i class="icono centrado fa-solid fa-list"></i><br>Añadir Categorías</a>
                    <a href="{{ route('categorias.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-plus"></i><i class="icono centrado fa-solid fa-list"></i><br>Modificar Categorías</a>
                    <a href="{{ route('categorias.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-eye"></i><i class="icono centrado fa-solid fa-list"></i><br>Mostrar Categorías</a>
                    <a href="{{ route('categorias.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-trash"></i><i class="icono centrado fa-solid fa-list"></i><br>Eliminar Categorías</a>

                    <h2>Empresas</h2>              
                    <a href="{{ route('empresas.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-plus"></i><i class="icono centrado fa-solid fa-building"></i><br>Añadir Empresa</a>
                    <a href="{{ route('empresas.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-pen"></i><i class="icono centrado fa-solid fa-building"></i><br>Modificar Empresa</a>
                    <a href="{{ route('empresas.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-eye"></i><i class="icono centrado fa-solid fa-building"></i><br>Mostrar Empresa</a>
                    <a href="{{ route('empresas.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-trash"></i><i class="icono centrado fa-solid fa-building"></i><br>Eliminar Empresa</a>

                    <h2>Usuarios</h2>                    
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-plus"></i><i class="icono centrado fa-solid fa-users"></i><br>Añadir Usuario</a>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-pen"></i><i class="icono centrado fa-solid fa-users"></i><br>Modificar Usuario</a>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-eye"></i><i class="icono centrado fa-solid fa-users"></i><br>Mostrar Usuario</a>
                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-danger"><i class="icono centrado fa-solid fa-trash"></i><i class="icono centrado fa-solid fa-users"></i><br>Eliminar Usuario</a>
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
