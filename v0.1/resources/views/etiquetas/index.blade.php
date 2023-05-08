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
      <a href="{{ route('etiquetas.create') }}" class="flex inline"> Añadir etiqueta</a>
    </button>

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