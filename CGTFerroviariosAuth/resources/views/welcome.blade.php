<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CGT Ferroviario</title>

    <!-- Fonts -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
    <link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('/js/cgtferroviario.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>

      html{
        height: 100%;
      }
      body {
        font-family: 'Roboto', sans-serif;
        height: 100%;
        background-color: rgb(25, 25, 25);
      }
      nav{
        /* border-bottom: 1px dotted red !important; */
        /* box-shadow: rgba(255, 0, 0, 0.45) 0px 10px 10px 5px; */
        color: red;
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
        height: 500px;
      }

      .glow {
        font-size: 60px;
        color: black;
        text-align: center;
        animation: glow 1s ease-in-out infinite alternate;
      }

      @-webkit-keyframes glow {
        from {
          text-shadow: 0 0 10px rgb(250, 0, 0), 0 0 10px rgb(255, 0, 0), 0 0 20px #680000, 0 0 40px #680000, 0 0 50px #680000, 0 0 60px #680000, 0 0 70px #e60073;
        }
        
        to {
          text-shadow: 0 0 10px #fff, 0 0 20px #380000, 0 0 30px #380000, 0 0 40px #380000, 0 0 50px #380000, 0 0 60px #380000, 0 0 70px #380000;
        }
      } 

      h3 {
        margin-bottom: 50px;
      }
      .carousel {
        min-height: 200px;
        margin-bottom: 15px;
      }
      .carousel-indicators li {
        box-shadow: 1px 1px 1px rgba(145, 145, 145, 0.5);
      }
      p {
        padding: 10px;
      }
      .active-p {
        background: #00BCD4;
          color: #fff;
      }
      @media only screen and (min-width: 768px){
        p {
          height: 50px;
          cursor: pointer;
        }
      }
      @media only screen and (min-width: 992px){
        p {
          height: 68px;
        }
      }
      @media only screen and (min-width: 1200px){
        p {
          height: 85px;
          line-height: 85px;
          padding: 0 10px 10px 10px;
        }
      }
      .author {
        padding-bottom: 20px;
        margin-top: 50px;
        text-align: center;
        font-size: 14px;
      }
      .top50{
        margin-top: 25px;
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
                  <button type="submit" class="btn btn-outline-danger">Entrar</button>
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
        <h1 class="glow top50">CGT FERROVIARIO</h1>
    
        <h2 class="text-center">Bootstrap carousel with sidebar</h2>
        <h3 class="text-center">This feature does not exist in official Bootstrap</h3>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-1">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">        
                    <img src="http://via.placeholder.com/600x400/D6BC65/fff?text=First+img">
                  </div>
                  <div class="item">
                    <img src="http://via.placeholder.com/600x400/008A84/fff?text=Second+img">
                  </div>
                  <div class="item">
                    <img src="http://via.placeholder.com/600x400/18AAA9/fff?text=Third+img">
                  </div>
                  <div class="item">
                    <img src="http://via.placeholder.com/600x400/C993A0/fff?text=Fourth+img">
                  </div>			    
                </div>    
                
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- /.carousel -->

            </div><!-- /.col-sm-8 -->

            <div class="col-sm-3">
              <div class="result">
                <p data-target="#carousel-example-generic" data-slide-to="0" class="active-p">01. This text is related to 01. slide</p>
                <p data-target="#carousel-example-generic" data-slide-to="1">02. This text is related to 02. slide</p>
                <p data-target="#carousel-example-generic" data-slide-to="2">03. This text is related to 03. slide</p>
                <p data-target="#carousel-example-generic" data-slide-to="3">04. This text is related to 04. slide</p>
              </div>
            </div><!-- /.col-sm-8 -->		
          </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="author">Made with ♥ by <a href="https://dankoknad.github.io/" target="_blank">Danko</a></div>  
        </div>

  </body>
</html>
