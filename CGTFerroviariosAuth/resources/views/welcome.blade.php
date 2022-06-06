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
          html{
            height: 100%;
          }
            body {
                font-family: 'Roboto', sans-serif;
                height: 100%;
            }
            .titular{
                font-family: 'Dancing Script', cursive;
                color: white;
                font-size: 2em;
            }
            button a{
                text-decoration: none;
            }
            .formLogin{
              width: 300px;
            }
            .height100{
              height: 100%;
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
              <div class="dropdown">
                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                  AREA Afiliados
                </button>
                <ul class="dropdown-menu dropdown-menu-dark formLogin dropdown-menu-lg-end" aria-labelledby="dropdownMenu2">
                  <form class="dropdown-menu-dark p-4">
                    <div class="mb-3">
                      <label for="exampleDropdownFormEmail2" class="form-label">Correo electrónico</label>
                      <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="usuario@cgtferroviario.es">
                    </div>
                    <div class="mb-3">
                      <label for="exampleDropdownFormPassword2" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Contraseña">
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                        <label class="form-check-label" for="dropdownCheck2">
                          Recordarme
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </form>
                </ul>
              </div>
              {{-- @if (Route::has('login'))
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
              @endif --}}
            </div>
          </nav>

        <div class="height100">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="..." class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
    </body>
</html>
