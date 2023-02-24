<style>
.dropdown-menu-dark {
    color: white;
    background-color: rgb(33,37,41);
    border-color: rgba(0, 0, 0, 0.15);
}
.dropdown-menu-dark .dropdown-item:hover, .dropdown-menu-dark .dropdown-item:focus {
    color: black;
    background-color: rgb(220,53,69);
}
</style> 

<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar fixed-top barraSup" id="barraSup" aria-label="Barra de Navegación">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="/images/LogoSFF_sm.png" /> <span class="titular">Ferroviario7</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barraSup" aria-controls="barraSup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse row" id="barraSup">
      <div class="col-9">
        <ul class="navbar-nav mb-2 mb-md-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">ADIF</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a href="{{ route('adif') }}" class="dropdown-item" title="Documentación General de ADIF">DOC. GENERAL</a></li>
              <li><a href="{{ url('adif/infraestructura') }}" class="dropdown-item" title="Documentación del Colectivo de Infraestructura">INFRAESTRUCTURA</a></li>
              <li><a href="{{ url('adif/circulacion') }}" class="dropdown-item" title="Documentación del Colectivo de Circulación">CIRCULACIÓN</a></li>
              <li><a href="{{ url('adif/oficinas') }}" class="dropdown-item" title="Documentación del Colectivo de Oficinas">OFICINAS</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">RENFE</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a href="{{ route('renfe') }}" class="dropdown-item" title="Documentación General de ADIF">DOC. GENERAL</a></li>
              <li><a href="{{ url('renfe/comercial') }}" class="dropdown-item" title="Documentación del Colectivo de Comercial">COMERCIAL</a></li>
              <li><a href="{{ url('renfe/intervencion') }}" class="dropdown-item" title="Documentación del Colectivo de Intervención">INTERVENCIÓN</a></li>
              <li><a href="{{ url('renfe/conduccion') }}" class="dropdown-item" title="Documentación del Colectivo de Conducción">CONDUCCIÓN</a></li>
              <li><a href="{{ url('renfe/talleres') }}" class="dropdown-item" title="Documentación del Colectivo de Talleres">TALLERES</a></li>
              <li><a href="{{ url('renfe/oficinas') }}" class="dropdown-item" title="Documentación del Colectivo de Oficinas">OFICINAS</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Empresas Auxiliares del Sector Ferroviario">EMPRESAS AUX.</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a href="{{ route('empresasaux') }}" class="dropdown-item" title="Documentación de SERVEO(Anteriormente FERROVIAL)">SERVEO</a></li>
              <li><a href="{{ url('empresasaux/logirail') }}" class="dropdown-item" title="Documentación de LOGIRAIL">LOGIRAIL</a></li>
              <li><a href="{{ url('empresasaux/otras') }}" class="dropdown-item" title="Documentación de otras Empresas Auxiliares">OTRAS</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Jurídica">JURÍDICA</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a href="{{ route('juridica') }}" class="dropdown-item">CONVENIOS COLECTIVOS</a></li>
              <li><a href="#" class="dropdown-item">LEGISLACIÓN LABORAL</a></li>
              <li><a href="#" class="dropdown-item">LEGISLACION FERROVIARIA</a></li>
              <li><a href="#" class="dropdown-item">FORMULARIOS/MODELOS</a></li>
              <li><a href="#" class="dropdown-item">LOGROS JURÍDICOS CGT</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Recopilación de nuestros comunicados y todo tipo de documentos leacionados con el Ferrocarril">BIBLIOTECA</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a href="{{ route('biblioteca') }}" class="dropdown-item" href="#">COMUNICADOS</a></li>
              <li><a class="dropdown-item" href="#">SEGURIDAD EN LA CIRCULACIÓN</a></li>
              <li><a class="dropdown-item" href="#">ARCHIVO HISTÓRICO</a></li>
              <li><a class="dropdown-item" href="#">DEFENSA DEL FERROCARRIL</a></li>
              <li><a class="dropdown-item" href="#">VIA LIBERTARIA</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link" title="Recursos Audiovisuales para uso Multimedia">RECURSOS</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a href="{{ route('prensa') }}" class="dropdown-item">VIDEOS</a></li>
              <li><a class="dropdown-item" href="#">AUDIOS</a></li>
              <li><a class="dropdown-item" href="#">CARTELES</a></li>
              <li><a class="dropdown-item" href="#">FOTOGRAFIAS</a></li>
              <li><a class="dropdown-item" href="#">LOGOTIPOS</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Sector Federal Ferroviario de la CGT">SFF-CGT</a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown04">
              <li><a href="{{ route('equipo') }}" class="dropdown-item" title="Información del equipo estatal">EQUIPO</a></li>
              <li><a href="{{ route('equipo') }}" class="dropdown-item" title="Información de Contacto de las Secciones Sindicales en España">MAPA SINDICAL</a></li>
              <li><a href="{{ route('equipo') }}" class="dropdown-item" title="Formulario de Contacto">CONTACTO</a></li>
            </ul>
          </li>  
        </ul>
      </div>
      <div class="col-3 mx-auto">
        {{-- <div class="modoOscuro inline mx-auto">
          <div class="form-check form-switch">
            <span class=""><i class="fa-solid fa-moon blanco" title="Modo Oscuro"></i></span>
          </div>
          <div class="form-check form-switch">
              <input class="form-check-input mt-3" type="checkbox" role="switch" id="flexSwitchCheckDefault" title="Modo Claro//Oscuro"  onclick="toggle()">
              <label class="form-check-label" for="flexSwitchCheckDefault"><i class="fa-solid fa-sun grisMedio" title="Modo Claro"></i></label>
          </div>
        </div> --}}
        <div class="grisMedio mx-auto inline fs-3">
          <ul class="inline m-0">
            <li><a href="https://twitter.com/SFFCGT" title="Twitter SFFCGT" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="https://es-es.facebook.com/cgtferroviario/" title="Facebook SFFCGT" target="_blank"><i class="fa-brands fa-facebook ml-2"></i></a></li>
            <li><a href="https://www.youtube.com/c/CGTSectorFederalFerroviario" title="Youtube SFFCGT" target="_blank"><i class="fa-brands fa-youtube ml-2"></i></a></li>
          </ul>
        </div>
        <div class="dropdown mx-auto inline ms-sm-5">
          <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            AREA Afiliados
          </button>
          <ul class="dropdown-menu dropdown-menu-dark formLogin dropdown-menu-lg-end" aria-labelledby="dropdownMenu2">
            @guest
              <form method="POST" class="dropdown-menu-dark p-4" action="{{ route('login') }}">
                  @csrf
                  <div class="mb-3">
                      <label for="email" class="form-label">{{ __('Email Address') }}</label>
                      <div class="mb-3">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="mb-3">
                      <label for="password" class="form-label">{{ __('Password') }}</label>
                      <div class="mb-3">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="mb-3">
                      <div class="mb-3">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                              <label class="form-check-label" for="remember">
                                  {{ __('Recuérdame') }}
                              </label>
                          </div>
                      </div>
                  </div>
                  <div class="mb-3">
                      <div class="mb-3">
                          <button type="submit" class="btn btn-outline-danger">
                              {{ __('Acceder') }}
                          </button>
    
                          @if (Route::has('password.request'))
                              <a class="inline red peq" href="{{ route('password.request') }}">
                                  {{ __('¿Olvidaste tu contraseña?') }}
                              </a>
                          @endif
                      </div>
                  </div>
              </form>
            @else
              <li class="nav-item dropdown-menu-dark p-3">
                  <span class="inline">
                      Bienvenid@, {{ Auth::user()->name }}
                  </span><br>
                  <h6>
                    Accede a tu <a href="/home">Panel de Afiliado</a>
                  </h6>
    
                  <div class="inline dcha">
                      <button class="btn btn-outline-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </button>
    
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
            @endguest
          </ul>
        </div>
      </div>
      {{-- <form>
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </form> --}}
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