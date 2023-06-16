<style>
    label{
        color: white;
    }
    textarea, select{
        background-color: rgba(255, 255, 255, .3) !important;
    }
    select:after{
        color: green;
    }
    input[type=text] {
        border: none;
        background: rgba(255, 255, 255, .3);
    }
</style>
@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    
    <form action="" method="post" action="{{ route('contact.store') }}">
        @csrf
        <h1 class="rojoBrillante centrado mt-0">Afíliate con nosotros</h1>
        <div class="row">
            <div class="col">
                <label>Nombre</label>
                <input type="text" class="form-control {{ $errors->has('nombre') ? 'error' : '' }}" name="nombre" id="nombre">
                <!-- Error -->
                @if ($errors->has('nombre'))
                <div class="error">
                    {{ $errors->first('nombre') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>1<sup>er</sup> Apellido</label>
                <input type="text" class="form-control {{ $errors->has('nombre') ? 'error' : '' }}" name="nombre" id="nombre">
                <!-- Error -->
                @if ($errors->has('nombre'))
                <div class="error">
                    {{ $errors->first('nombre') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>2º Apellido</label>
                <input type="text" class="form-control {{ $errors->has('nombre') ? 'error' : '' }}" name="nombre" id="nombre">
                <!-- Error -->
                @if ($errors->has('nombre'))
                <div class="error">
                    {{ $errors->first('nombre') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Empresa</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Elegir empresa</option>
                    <option value="1">ADIF</option>
                    <option value="2">RENFE</option>
                    <option value="3">LOGIRAIL</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label>Domicilio</label>
                <input type="text" class="form-control {{ $errors->has('domicilio') ? 'error' : '' }}" name="domicilio" id="domicilio">
                <!-- Error -->
                @if ($errors->has('domicilio'))
                <div class="error">
                    {{ $errors->first('domicilio') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Localidad</label>
                <input type="text" class="form-control {{ $errors->has('localidad') ? 'error' : '' }}" name="localidad" id="localidad">
                <!-- Error -->
                @if ($errors->has('localidad'))
                <div class="error">
                    {{ $errors->first('localidad') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Provincia</label>
                <input type="text" class="form-control {{ $errors->has('provincia') ? 'error' : '' }}" name="provincia" id="provincia">
                <!-- Error -->
                @if ($errors->has('provincia'))
                <div class="error">
                    {{ $errors->first('provincia') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Código Postal</label>
                <input type="number" class="form-control {{ $errors->has('cp') ? 'error' : '' }}" name="cp" id="cp">
                <!-- Error -->
                @if ($errors->has('cp'))
                <div class="error">
                    {{ $errors->first('cp') }}
                </div>
                @endif
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <label>DNI</label>
                <input type="text" class="form-control {{ $errors->has('dni') ? 'error' : '' }}" name="dni" id="dni">
                <!-- Error -->
                @if ($errors->has('dni'))
                <div class="error">
                    {{ $errors->first('dni') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Telefono</label>
                <input type="tel" class="form-control {{ $errors->has('telefono') ? 'error' : '' }}" name="telefono" id="telefono">
                @if ($errors->has('telefono'))
                <div class="error">
                    {{ $errors->first('telefono') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Email</label>
                <input type="email" class="form-control {{ $errors->has('correo') ? 'error' : '' }}" name="correo" id="correo">
                @if ($errors->has('correo'))
                <div class="error">
                    {{ $errors->first('correo') }}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Matrícula</label>
                <input type="number" class="form-control {{ $errors->has('matricula') ? 'error' : '' }}" name="matricula" id="matricula">
                @if ($errors->has('matricula'))
                <div class="error">
                    {{ $errors->first('matricula') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Cargo</label>
                <input type="text" class="form-control {{ $errors->has('cargo') ? 'error' : '' }}" name="cargo" id="cargo">
                @if ($errors->has('cargo'))
                <div class="error">
                    {{ $errors->first('cargo') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Dependencia</label>
                <input type="text" class="form-control {{ $errors->has('dependencia') ? 'error' : '' }}" name="dependencia" id="dependencia">
                @if ($errors->has('dependencia'))
                <div class="error">
                    {{ $errors->first('dependencia') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Residencia</label>
                <input type="text" class="form-control {{ $errors->has('residencia') ? 'error' : '' }}" name="residencia" id="residencia">
                @if ($errors->has('residencia'))
                <div class="error">
                    {{ $errors->first('residencia') }}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Lugar</label>
                <input type="text" class="form-control {{ $errors->has('lugar') ? 'error' : '' }}" name="lugar" id="lugar">
                @if ($errors->has('lugar'))
                <div class="error">
                    {{ $errors->first('lugar') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Fecha</label>
                <input type="date" class="form-control {{ $errors->has('fecha') ? 'error' : '' }}" name="fecha" id="fecha">
                @if ($errors->has('fecha'))
                <div class="error">
                    {{ $errors->first('fecha') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Firma</label>
                <input type="text" class="form-control {{ $errors->has('firma') ? 'error' : '' }}" name="firma" id="firma">
                @if ($errors->has('firma'))
                <div class="error">
                    {{ $errors->first('firma') }}
                </div>
                @endif
            </div>
            
        </div>
        <div class="row">
            <div class="col">
                <label>Cabecera Nómina</label>
                <input type="text" class="form-control {{ $errors->has('cabecera_nomina') ? 'error' : '' }}" name="cabecera_nomina" id="cabecera_nomina">
                @if ($errors->has('cabecera_nomina'))
                <div class="error">
                    {{ $errors->first('cabecera_nomina') }}
                </div>
                @endif
            </div>
            <div class="col">
                <label>Fotocopia DNI</label>
                <input type="text" class="form-control {{ $errors->has('fotocopia_dni') ? 'error' : '' }}" name="fotocopia_dni" id="fotocopia_dni">
                @if ($errors->has('fotocopia_dni'))
                <div class="error">
                    {{ $errors->first('fotocopia_dni') }}
                </div>
                @endif
            </div>
        </div>
        <input type="submit" name="send" value="Enviar" class="btn btn-outline-danger btn-block mt-3">
    </form>
</div>
@endsection
