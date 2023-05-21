@extends('plantillas.principal')

@section('contenido')

<div class="container-fluid fondo documentos">
    <div class="row">
        <h1 class="m-0 py-3 centrado cabecera negro grande bg-rojoBrillante">CATEGORÏAS</h1>
        <div class="">
            <a href="{{ route('categorias.create') }}" class="btn btn-success">Añadir Categoria</a>
        </div>
        <div class="col-md-12">
            <table class="table bg-blanco">        
                <tr>
                    <th>Nº</th>
                    <th>Titulo</th>
                    <th>Subtitulo</th>
                    <th>Empresa</th>
                    <th>Categoria</th>
                    <th>Etiqueta</th>
                    <th>Cuerpo</th>
                </tr>
                @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->numero }}</td>
                    <td>{{ $categoria->titulo }}</td>
                    <td>{{ $categoria->subtitulo }}</td>
                    <td><span class="badge rounded-pill peq bg-verdeAdif">{{ $categoria->empresa }}</span></td>
                    <td><span class="badge rounded-pill peq bg-moradoRenfe">{{ $categoria->categoria }}</span></td>
                    <td><span class="badge rounded-pill peq bg-rojoBrillante">{{ $categoria->etiqueta }}</span></td>
                    <td>{{ $categoria->cuerpo }}</td>


                </tr>
                @endforeach
            </table>
        </div>

        @foreach ($categorias as $categoria)

        <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
            <div class="card h-100 bg-grisOscuro-7 mb-3 blanco bordeRojo" style="">
                <div class="card-header bordeBottomRojo">
                    <a href="{{ route('documentos.show', $categoria->id) }}"><h1>{{ $categoria->numero }} .- {{ $categoria->titulo }}</h1></a>
                    <p class="card-text mt-2">{{ $categoria->subtitulo }}</p>
                </div>
                <div class="card-body">
                    <span class="badge rounded-pill peq bg-verdeAdif">{{ $categoria->empresa }}</span>
                    <span class="badge rounded-pill peq bg-moradoRenfe">{{ $categoria->categoria }}</span>
                    <span class="badge rounded-pill peq bg-rojoBrillante">{{ $categoria->etiqueta }}</span>
                    
                    <p class="card-text mt-2 text-justify">{{ $categoria->cuerpo }}</p>
                </div>
                <div class="card-footer bordeTopRojo p-1">
                    <div class="btn-group centrado w-100">
                        <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn rojoBrillante" target="blank"><i class="fa fa-eye"></i>&nbsp;&nbsp;Visualizar</a>
                        <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn rojoBrillante" target="_blank" download="CGT_Afiliacion_Nomina"><i class="fa fa-download"></i>&nbsp;&nbsp;Descargar</a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection