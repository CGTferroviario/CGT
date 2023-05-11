@extends('layouts.master')

@section('content')

<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
</style>
<div class="container">
    <h2 class="blanco">Empresas</h2>
    <button class="btn btn-success">
      <a href="{{ route('empresas.create') }}" class="flex inline"> Añadir empresa</a>
    </button>
    <table class="table bg-blanco">        
        <tr>
            <th>id_empresa</th>
            <th>Nombre empresa</th>
            <th>Logo</th>
            <th>Gestión Vales</th>
        </tr>
        @foreach ($empresas as $empresa)
        <tr>
            <td>{{ $empresa->id_empresa }}</td>
            <td>{{ $empresa->nombre_empresa }}</td>
            <td>{{ $empresa->logo_empresa }}</td>
            <td>{{ $empresa->gestion_vales }}</td>
        </tr>
        @endforeach
    </table>
</div>    

@endsection