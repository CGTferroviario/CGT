<style>

ul li::before {
  content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
  color: red; /* Change the color */
  font-weight: bold; /* If you want it to be bold */
  display: inline-block; /* Needed to add space between the bullet and the text */
  width: 1em; /* Also needed for space (tweak if needed) */
  margin-left: -1em; /* Also needed for space (tweak if needed) */
}
</style>

<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar fixed-top barraSup" id="barraSup" aria-label="Barra de Navegación">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="/images/LogoSFF_sm.png" /> <span class="titular">Ferroviario7</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barraSup" aria-controls="barraSup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse row" id="barraSup">
      <div class="col-md-12 col-lg-8">
        <ul class="navbar-nav mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('adif') }}" id="" aria-current="" aria-expanded="" data-bs-toggle="">ADIF</a>
            {{-- <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown04">
              <li><a  href="{{ route('adif') }}" class="dropdown-item">Salud Laboral</a></li>
              <li><a class="dropdown-item" href="#">Seg. Circulación</a></li>
            </ul> --}}
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('renfe') }}" id="" data-bs-toggle="" aria-expanded="">RENFE</a>
            {{-- <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown04">
              <li><a href="{{ route('renfe') }}" class="dropdown-item">Salud Laboral</a></li>
              <li><a class="dropdown-item" href="#">Seg. Circulación</a></li>
            </ul> --}}
          </li>
          <li class="nav-item">
            <a href="{{ route('empresasaux') }}" class="nav-link">EMPRESAS AUXILIARES</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('igualdad') }}" class="nav-link">IGUALDAD</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('biblioteca') }}" id="" data-bs-toggle="" aria-expanded="">BIBLIOTECA</a>
            {{-- <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown04">
              <li><a href="{{ route('biblioteca') }}" class="dropdown-item" href="#">Legislación laboral</a></li>
              <li><a class="dropdown-item" href="#">Convenios Colectivos</a></li>
              <li><a class="dropdown-item" href="#">Normativa Laboral</a></li>
              <li><a class="dropdown-item" href="#">Procedimientos</a></li>
            </ul> --}}
          </li>
          <li class="nav-item">
            <a href="{{ route('prensa') }}" class="nav-link">PRENSA</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('equipo') }}" id="dropdown04" data-bs-toggle="" aria-expanded="">SFF-CGT</a>
            {{-- <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown04">
              <li><a href="{{ route('equipo') }}" class="dropdown-item" href="#">Equipo</a></li>
              <li><a class="dropdown-item" href="#">Contacto</a></li>
              <li><a class="dropdown-item" href="#">Mapa Sindical</a></li>
            </ul> --}}
          </li>  
        </ul>
      </div>
      <div class="col-md-12 col-lg-4 mx-auto">
        <div class="modoOscuro inline mx-auto">
          <div class="form-check form-switch">
            <span class=""><i class="fa-solid fa-moon blanco" title="Modo Oscuro"></i></span>
          </div>
          <div class="form-check form-switch">
              <input class="form-check-input mt-3" type="checkbox" role="switch" id="flexSwitchCheckDefault" title="Modo Claro//Oscuro"  onclick="toggle()">
              <label class="form-check-label" for="flexSwitchCheckDefault"><i class="fa-solid fa-sun grisMedio" title="Modo Claro"></i></label>
          </div>
        </div>
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