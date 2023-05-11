<style>

</style>
@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row mx-auto bg-blanco">
        <div class="row px-6">
            <div class="col-md-5 col-lg-4 order-md-last">
                <div class="text-center pt-20">
                    <h1 class="text-3xl rojoBrillante">Últimos comunicados</h1>
                </div>
                <ul class="list-group mb-3">
                    @foreach ($comunicados as $comunicado)
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">{{ $comunicado->titulo }}</h6>
                            <small class="text-body-secondary">{{ $comunicado->subtitulo }}</small>
                        </div>
                        <span class="text-body-secondary">{{ $comunicado->id }}</span>
                    </li>
                    @endforeach
                    
                    {{-- <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">−$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li> --}}
                </ul>
        
                {{-- <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </form> --}}
            </div>
            <div class="col-md-7 col-lg-8">
                <div class="text-center pt-20">
                    <h1 class="text-3xl rojoBrillante">
                        Añadir comunicado
                    </h1>
                </div>
                <form class="needs-validation" novalidate="" action="{{ route('comunicados.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="country" class="form-label">Empresa</label>
                            <select class="form-select" id="country" required="">
                                    <option value="Elige empresa">Elige empresa</option>
                                @foreach ($empresas as $empresa)
                                    <option value="{{ $empresa->nombre_empresa }}">{{ $empresa->nombre_empresa }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="country" class="form-label">Etiqueta</label>
                            <select class="form-select" id="country" required="">
                                <option value="Elige categoria">Elige etiqueta</option>
                                @foreach ($etiquetas as $etiqueta)
                                    <option value="{{ $etiqueta->nombre }}">{{ $etiqueta->nombre }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="country" class="form-label">Categoría</label>
                            <select class="form-select" id="country" required="">
                                <option value="Elige categoria">Elige Categoría</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->nombre_categoria }}">{{ $categoria->nombre_categoria }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="fecha_com" class="form-label">Fecha de Comunicado</label>
                            <input type="date" class="form-control rojoBrillante" name="fecha_com" placeholder="<?php echo date("Y/m/d"); ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Título</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
        
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Subtitulo</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
        
                        <div class="col-12">
                            <label for="username" class="form-label">Descripción</label>
                            <textarea name="Texto" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
        
                        <div class="col-12">
                            <label for="email" class="form-label">Comunicado en PDF</label>
                            <input type="file" class="form-control" id="doc_pdf">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
        
                        <div class="col-12">
                            <label for="address" class="form-label">Adjuntos (anexos)</label>
                            <input type="file" class="form-control" id="doc_adj">
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
        
                        <div class="col-12">
                            <label for="address2" class="form-label">Imagen (jpg o png)</label>
                            <input type="file" class="form-control" id="doc_img">
                        </div>
                    </div>
        
        
                    <hr class="my-4">
        
                    <button class="w-100 btn btn-outline-danger btn-lg" type="submit">Subir Comunicado</button>
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


