<style>
.form-select {
    background-color: grey !important;
    color: green;
}
</style>
@extends('plantillas.publica')

@section('contenido')
<h1 class="m-0 py-3 text-center font-bold bg-rojoBrillante">COMUNICADOS</h1>  
<div class="container-fluid fondo comunicados">
    <div class="row">
        <div class="px-5 pt-4">
            <div class="flex items-center max-w-md bg-dark rounded-lg mt-10 mb-10" x-data="{ search: '' }">
                <div class="w-full">
                    <input type="search" class="w-full px-4 py-1 text-red-500 rounded-full focus:outline-none"
                        placeholder="Búsqueda" x-model="search">
                </div>
                <div>
                    <button type="submit" class="flex items-center bg-blue-500 justify-center w-12 h-12 text-white rounded-r-lg"
                        :class="(search.length > 0) ? 'bg-red-500' : 'bg-gray-500 cursor-not-allowed'"
                        :disabled="search.length == 0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <label for="country" class="form-label font-bold float-right">Empresa:</label>
                    <select class="form-select rounded-xl" id="empresa" name="empresa" required="">
                            <option value="Elige empresa">Elige empresa</option>
                        @foreach ($empresas as $empresa)
                            <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="categorias_comunicado" class="form-label font-bold float-right">Categoría:</label>
                    <select class="form-select rounded-xl" id="categoria" name="categoria" required="">
                        <option value="Elige categoria">Elige Categoría</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="country" class="form-label font-bold float-right">Etiqueta:</label>
                    <select class="form-select rounded-xl" id="etiqueta" name="etiqueta" required="">
                        <option value="Elige etiqueta">Elige etiqueta</option>
                        @foreach ($etiquetas as $etiqueta)
                            <option value="{{ $etiqueta->id }}">{{ $etiqueta->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="paginacion my-3">
                    {{ $comunicados->links('vendor.pagination.tailwind') }}
                </div>
                
                @foreach ($comunicados as $comunicado)
                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100 bg-grisOscuro-7 blanco bordeRojo" style="">
                        <div class="card-header bordeBottomRojo">
                            <a href="{{ route('admin.comunicados.show', $comunicado->id) }}"><h1 class="font-bold text-3xl">{{ $comunicado->numero }} / {{ $comunicado->titulo }}</h1></a>
                            <p class="card-text mt-2">{{ $comunicado->subtitulo }}</p>
                        </div>
                        <div class="card-body">
                            <span class="badge rounded-pill peq bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span>
                            <span class="badge rounded-pill peq bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span>
                            <span class="badge rounded-pill peq bg-{{ $comunicado->etiqueta?->nombre }}">{{ $comunicado->etiqueta?->nombre }}</span>
                            <p class="card-text mt-2 text-justify">{{ $comunicado->cuerpo }}</p>
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
    </div>
</div>
@endsection