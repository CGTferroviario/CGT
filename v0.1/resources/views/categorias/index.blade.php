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
    <h2 class="blanco">Categorias</h2>
    <button class="btn btn-success">
      <a href="{{ route('categorias.create') }}" class="flex inline"> Añadir categoria</a>
    </button>

    <table class="table bg-blanco">        
        <tr>
            <th>id</th>
            <th>Nombre</th>
        </tr>
        @foreach ($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id_categoria }}</td>
            <td>{{ $categoria->nombre_categoria }}</td>
        </tr>
        @endforeach
    </table>
</div>    

@endsection