<style>
    /* The switch - the box around the slider */
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    /* Hide default HTML checkbox */
    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }
    /* The slider */
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #525252;
      -webkit-transition: .4s;
      transition: .4s;
    }
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    input:checked + .slider {
      background-color: #dc3545;
    }
    input:focus + .slider {
      box-shadow: 0 0 1px #dc3545;
    }
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    .slider.round:before {
      border-radius: 50%;
    }
    </style>
    @extends('plantillas.principal')
    
    @section('contenido')
    <div class="container-fluid fondo comunicados">
        <div class="row">
            <h1 class="m-0 py-3 text-center cabecera font-bold">COMUNICADOS</h1>       
            <div class="px-20 pt-4">
                <div class="col-md-12 p-4 mt-2 bordeRojo bg-blanco-transp rounded-md">
                    <div class="row">
                        <div class="col-md-7 col-lg-8">
                            <div class="text-center pt-2 pb-1">
                                <h1 class="text-3xl rojoBrillante">
                                    Editar comunicado
                                </h1>
                            </div>
                            <form class="needs-validation" novalidate="" action="{{ route('admin.comunicados.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label for="country" class="form-label">Empresa</label>
                                        <select class="form-select" id="empresa" name="empresa" required="">
                                                <option value="Elige empresa">Elige empresa</option>
                                            @foreach ($empresas as $empresa)
                                                <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, introduce un empresa.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="categorias_comunicado" class="form-label">Categoría</label>
                                        <select class="form-select" id="categoria" name="categoria" required="">
                                            <option value="Elige categoria">Elige Categoría</option>
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, introduce un categoría.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="country" class="form-label">Etiqueta</label>
                                        <select class="form-select" id="etiqueta" name="etiqueta" required="">
                                            <option value="Elige etiqueta">Elige etiqueta</option>
                                            @foreach ($etiquetas as $etiqueta)
                                                <option value="{{ $etiqueta->id }}">{{ $etiqueta->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, introduce una etiqueta.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="fecha_com" class="form-label">Fecha</label>
                                        <input type="date" class="form-control rojoBrillante" name="fecha" placeholder="<?php echo date("Y/m/d"); ?>">
                                        <div class="invalid-feedback">
                                            Por favor, introduce un fecha.
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="country" class="form-label">Número</label>
                                        <input type="number" class="form-control" id="numero" name="numero" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Por favor, introduce un número de comunicado.
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <label for="titulo" class="form-label">Título</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Por favor, introduce un título de comunicado.
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-5">
                                        <label for="lastName" class="form-label">Subtitulo</label>
                                        <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Por favor, introduce un subtítulo de comunicado.
                                        </div>
                                    </div>
                    
                                    <div class="col-12">
                                        <label for="username" class="form-label">Descripción</label>
                                        <textarea name="cuerpo" class="form-control" id="cuerpo" cols="30" rows="10"></textarea>
                                        <div class="invalid-feedback">
                                            Por favor, introduce un cuerpo de comunicado.
                                        </div>
                                    </div>
                    
                                    <div class="col-12">
                                        <label for="email" class="form-label">Comunicado en PDF</label>
                                        <input type="text" name="adjunto1" class="form-control" id="doc_pdf">
                                        <div class="invalid-feedback">
                                            Por favor, revisa el archivo en pdf del comunicado.
                                        </div>
                                    </div>
                    
                                    <div class="col-12">
                                        <label for="address" class="form-label">Adjuntos (anexos)</label>
                                        <input type="text"  name="adjunto2" class="form-control" id="doc_adj">
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>
                    
                                    <div class="col-12">
                                        <label for="address2" class="form-label">Imagen (jpg o png)</label>
                                        <input type="text" name="adjunto3" class="form-control" id="doc_img">
                                        <div class="invalid-feedback">
                                            Por favor, introduce una imagen de comunicado.
                                        </div>
                                    </div>
    
                                    <div class="col-12">
                                        <label for="address2" class="form-label">Imagen (jpg o png)</label>
                                        <input type="text" name="imagen" class="form-control" id="doc_img">
                                        <div class="invalid-feedback">
                                            Por favor, introduce una imagen de comunicado.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        
                                        <label class="switch">
                                            <input type="checkbox" name="publicado" class="form-control" id="publicado" checked >
                                            <span class="slider round"></span>
                                        </label>
                                        <label for="address2" class="form-label align-bottom">Publicado</label>
                                        <div class="invalid-feedback">
                                            Por favor, introduce una imagen de comunicado.
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                    
                                <button class="w-100 btn btn-outline-danger btn-lg" type="submit">Subir Comunicado</button>
                            </form>
                        </div>
                        <div class="col-md-5 col-lg-4 order-md-last">
                            <div class="text-center py-2">
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection
    
    
    