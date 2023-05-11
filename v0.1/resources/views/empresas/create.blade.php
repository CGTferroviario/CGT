<style>

</style>
@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row mx-auto bg-blanco">
        <div class="row px-6">
            <div class="col-md-5 col-lg-4 order-md-last">
                <div class="text-center pt-20">
                    <h1 class="text-3xl rojoBrillante">Empresas existentes</h1>
                </div>
                <ul class="list-group mb-3">
                    @foreach ($empresas as $empresa)
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">{{ $empresa->nombre_empresa }}</h6>
                        </div>
                        <span class="text-body-secondary">{{ $empresa->id }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-7 col-lg-8">
                <div class="text-center pt-20">
                    <h1 class="text-3xl rojoBrillante">
                        Añadir empresa
                    </h1>
                </div>
                <form class="needs-validation" novalidate="" action="{{ route('empresas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="country" class="form-label">Empresa</label>
                            <input type="text" value="">
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-outline-danger btn-lg" type="submit">Añadir empresa</button>
                </form>
            </div>
        </div>

        {{-- <div class="m-auto pt-20">
            <div class="pb8">
                @if ($errors->any())
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        Algo ha fallado...
                    </div>
                    <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-2 text-red-700">
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <form class="w-80" action="{{ route('comunicados.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col">
                        <label for="categoria" class="rojoBrillante text-2xl">Categoría</label>
                        <select class="form-select bg-oscuro rojoBrillante" aria-label="Default select example">
                            <option selected>Elegir Categoría</option>
                            <option value="1">IGUALDAD</option>
                            <option value="2">CONVENIOS</option>
                            <option value="3">JURIDICA</option>
                        </select>
                    </div>
                    
                    <div class="col">
                        <label for="fecha_subida" class="rojoBrillante text-2xl">Fecha de Subida</label><br>
                        <input type="date" class="rojoBrillante p-2 rounded-md" name="fecha_subida">
                    </div>
                    <div class="col">
                        <label for="empresa" class="rojoBrillante text-2xl">Empresa</label>
                        <select class="form-select bg-oscuro rojoBrillante" aria-label="Default select example">
                            <option selected>Elegir empresa</option>
                            <option value="1">ADIF</option>
                            <option value="2">RENFE</option>
                            <option value="3">LOGIRAIL</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="titulo" class="rojoBrillante text-2xl">Título</label><br>
                        <input
                        type="text"
                        name="titulo"
                        placeholder="Titulo..."
                        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
                    </div>
                    <div class="col">
                        <label for="subtitulo" class="rojoBrillante text-2xl">Subtítulo</label><br>
                        <input
                        type="text"
                        name="subtitulo"
                        placeholder="Subtitulo..."
                        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
                    </div>
                    <div class="col">
                        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                    </div>
                </div>
                
                <input
                    type="number"
                    name="min_to_read"
                    placeholder="Minutes to read..."
                    class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                <textarea
                    name="descripcion"
                    placeholder="Descripcion..."
                    class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
                    
                <div class="bg-grey-lighter py-10">
                    <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                            <span class="mt-2 text-base leading-normal">
                                Seleccionar una imagen
                            </span>
                        <input
                            type="file"
                            name="image"
                            class="hidden">
                    </label>
                </div>

                <button
                    type="submit"
                    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Subir documentos
                </button>
            </form>
        </div> --}}
    </div>
</div>

@endsection


