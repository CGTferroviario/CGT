<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Importar Exportar Excel & CSV a Base de Datos en Laravel 9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Importar Datos de un excel o csv (Usuario, Email(único), Contraseña)
        </h2>
        <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Elegir archivo</label>
                </div>
            </div>
            <button class="btn btn-primary">Importar datos</button>
            <a class="btn btn-success" href="{{ route('file-export') }}">Exportar datos</a>
        </form>
    </div>
</body>
</html>