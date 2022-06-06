<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CGT Ferroviarios</title>

        <!-- Fonts -->
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Pacifico&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }
            .titular{
                font-family: 'Dancing Script', cursive;
                color: white;
                font-size: 2em;
            }
            button a{
                text-decoration: none;
                color: white;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ url('/') }}"><img src="/images/LogoSFF_sm.png" /> <span class="titular">Ferroviario</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">ADIF</a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown04">
                      <li><a class="dropdown-item" href="#">Salud Laboral</a></li>
                      <li><a class="dropdown-item" href="#">Seg. Circulación</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">RENFE</a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown04">
                      <li><a class="dropdown-item" href="#">Salud Laboral</a></li>
                      <li><a class="dropdown-item" href="#">Seg. Circulación</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Empresas Auxiliares</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Mujer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Biblio</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Documentación</a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown04">
                      <li><a class="dropdown-item" href="#">Legislación laboral</a></li>
                      <li><a class="dropdown-item" href="#">Convenios Colectivos</a></li>
                      <li><a class="dropdown-item" href="#">Normativa Laboral</a></li>
                      <li><a class="dropdown-item" href="#">Procedimientos</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">SFF-CGT</a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown04">
                      <li><a class="dropdown-item" href="#">Equipo</a></li>
                      <li><a class="dropdown-item" href="#">Contacto</a></li>
                      <li><a class="dropdown-item" href="#">Mapa Sindical</a></li>
                    </ul>
                  </li>
                </ul>
                {{-- <form>
                  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form> --}}
              </div>
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-danger text-sm text-gray-700 dark:text-gray-500 underline">AREA Afiliados</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-success ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
              @endif
            </div>
          </nav>

        <div class="">
            
        </div>
    </body>
</html>
