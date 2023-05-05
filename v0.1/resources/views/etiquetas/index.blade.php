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
    <h2 class="">Empresas</h2>
    <a href="{{ route('etiquetas.create') }}" class="btn btn-success flex inline"> Añadir etiqueta</a>

    <table class="table bg-blanco">        
        <tr>
            <th>id</th>
            <th>Nombre</th>
        </tr>
        @foreach ($etiquetas as $etiqueta)
        <tr>
            <td>{{ $etiqueta->id }}</td>
            <td>{{ $etiqueta->nombre }}</td>
        </tr>
        @endforeach
    </table>
</div>    

@endsection