<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar fixed-top barraSup ">  
    <div class="logo">
        <a href="{{ route('inicio') }}" class="inline-flex">
            <img class="ml-1" src="/img/logo_sm.png" alt="CGT Ferroviario" />
            <span class="mx-2 titular mt-2">Ferroviario7</span>
        </a>
    </div>
    <div class="menu align-middle text-medium">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <x-nav-link :href="route('adif')" :active="request()->routeIs('adif')" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('ADIF') }}
                </x-nav-link>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li>
                        <a href="{{ route('adif') }}" class="dropdown-item dropdown-toggle" title="Documentación General de ADIF">DOC. GENERAL</a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-submenu">
                            <li><a href="{{ url('adif/doc/afiliacion') }}" class="dropdown-item">AFILIACIÓN</a></li>
                            <li><a href="{{ url('adif/doc/ayudas') }}" class="dropdown-item">AYUDAS Y BENEFICIOS SOCIALES</a></li>
                            <li><a href="{{ url('adif/doc/igualdad') }}" class="dropdown-item">IGUALDAD</a></li>
                            <li><a href="{{ url('adif/doc/legislacion') }}" class="dropdown-item">LEGISLACIÓN · NORMATIVA LABORAL</a></li>
                            <li><a href="{{ url('adif/doc/licencias') }}" class="dropdown-item">LICENCIAS</a></li>
                            <li><a href="{{ url('adif/doc/mapa') }}" class="dropdown-item">MAPA ESTACIONES · RED ADIF Y RENFE</a></li>
                            <li><a href="{{ url('adif/doc/conciliacion') }}" class="dropdown-item">MEDIDAS DE CONCILIACIÓN</a></li>
                            <li><a href="{{ url('adif/doc/modelos') }}" class="dropdown-item">MODELOS DE SOLICITUD DE EMPRESA</a></li>
                            <li><a href="{{ url('adif/doc/protocolos') }}" class="dropdown-item">PROTOCOLOS FRENTE A LOS ACOSOS</a></li>
                            <li><a href="{{ url('adif/doc/salud') }}" class="dropdown-item">SALUD LABORAL</a></li>
                            <li><a href="{{ url('adif/doc/teletrabajo') }}" class="dropdown-item">TELETRABAJO</a></li>
                            <li><a href="{{ url('adif/doc/tablas') }}" class="dropdown-item">TABLAS SALARIALES</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('adif/infraestructura') }}" class="dropdown-item" title="Documentación del Colectivo de Infraestructura">INFRAESTRUCTURA</a></li>
                    <li><a href="{{ url('adif/circulacion') }}" class="dropdown-item" title="Documentación del Colectivo de Circulación">CIRCULACIÓN</a></li>
                    <li><a href="{{ url('adif/oficinas') }}" class="dropdown-item" title="Documentación del Colectivo de Oficinas">OFICINAS</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <x-nav-link :href="route('renfe')" :active="request()->routeIs('renfe')" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('RENFE') }}
                </x-nav-link>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a href="{{ route('renfe') }}" class="dropdown-item dropdown-toggle" title="Documentación General de RENFE">DOC. GENERAL</a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-submenu">
                            <li><a href="{{ url('renfe/doc/afiliacion') }}" class="dropdown-item">AFILIACIÓN</a></li>
                            <li><a href="{{ url('renfe/doc/ayudas') }}" class="dropdown-item">AYUDAS Y BENEFICIOS SOCIALES</a></li>
                            <li><a href="{{ url('renfe/doc/igualdad') }}" class="dropdown-item">IGUALDAD</a></li>
                            <li><a href="{{ url('renfe/doc/legislacion') }}" class="dropdown-item">LEGISLACIÓN · NORMATIVA LABORAL</a></li>
                            <li><a href="{{ url('renfe/doc/licencias') }}" class="dropdown-item">LICENCIAS</a></li>
                            <li><a href="{{ url('renfe/doc/mapa') }}" class="dropdown-item">MAPA ESTACIONES · RED ADIF Y RENFE</a></li>
                            <li><a href="{{ url('renfe/doc/conciliacion') }}" class="dropdown-item">MEDIDAS DE CONCILIACIÓN</a></li>
                            <li><a href="{{ url('renfe/doc/modelos') }}" class="dropdown-item">MODELOS DE SOLICITUD DE EMPRESA</a></li>
                            <li><a href="{{ url('renfe/doc/protocolos') }}" class="dropdown-item">PROTOCOLOS FRENTE A LOS ACOSOS</a></li>
                            <li><a href="{{ url('renfe/doc/salud') }}" class="dropdown-item">SALUD LABORAL</a></li>
                            <li><a href="{{ url('renfe/doc/teletrabajo') }}" class="dropdown-item">TELETRABAJO</a></li>
                            <li><a href="{{ url('renfe/doc/tablas') }}" class="dropdown-item">TABLAS SALARIALES</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('renfe/comercial') }}" class="dropdown-item" title="Documentación del Colectivo de Comercial">COMERCIAL</a></li>
                    <li><a href="{{ url('renfe/intervencion') }}" class="dropdown-item" title="Documentación del Colectivo de Intervención">INTERVENCIÓN</a></li>
                    <li><a href="{{ url('renfe/conduccion') }}" class="dropdown-item" title="Documentación del Colectivo de Conducción">CONDUCCIÓN</a></li>
                    <li><a href="{{ url('renfe/talleres') }}" class="dropdown-item" title="Documentación del Colectivo de Talleres">TALLERES</a></li>
                    <li><a href="{{ url('renfe/oficinas') }}" class="dropdown-item" title="Documentación del Colectivo de Oficinas">OFICINAS</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <x-nav-link :href="route('empresasaux')" :active="request()->routeIs('empresasaux')" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Empresas Auxiliares del Sector Ferroviario">
                    {{ __('EMP.AUX.') }}
                </x-nav-link>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a href="{{ url('empresasaux/serveo') }}" class="dropdown-item" title="Documentación de SERVEO(Anteriormente FERROVIAL)">SERVEO</a></li>
                    <li><a href="{{ url('empresasaux/logirail') }}" class="dropdown-item" title="Documentación de LOGIRAIL">LOGIRAIL</a></li>
                    <li><a href="{{ url('empresasaux/otras') }}" class="dropdown-item" title="Documentación de otras Empresas Auxiliares">OTRAS</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <x-nav-link :href="route('juridica')" :active="request()->routeIs('juridica')" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Jurídica">
                    {{ __('JURÍDICA') }}
                </x-nav-link>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a href="{{ url('juridica/convenios') }}" class="dropdown-item">CONVENIOS COLECTIVOS</a></li>
                    <li><a href="{{ url('juridica/laboral') }}" class="dropdown-item">LEGISLACIÓN LABORAL</a></li>
                    <li><a href="{{ url('juridica/ferroviaria') }}" class="dropdown-item">LEGISLACIÓN FERROVIARIA</a></li>
                    <li><a href="{{ url('juridica/modelos') }}" class="dropdown-item">FORMULARIOS/MODELOS</a></li>
                    <li><a href="{{ url('juridica/logros') }}" class="dropdown-item">LOGROS JURÍDICOS CGT</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <x-nav-link :href="route('biblioteca')" :active="request()->routeIs('biblioteca')" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Recopilación de nuestros comunicados y todo tipo de documentos relacionados con el Ferrocarril">
                    {{ __('BIBLIOTECA') }}
                </x-nav-link>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a href="{{ url('biblioteca/comunicados') }}" class="dropdown-item" title="Comunicados de la CGT">COMUNICADOS</a></li>
                    <li><a href="{{ url('biblioteca/seguridad') }}" class="dropdown-item" title="Información de Seguridad en la Circulación">SEGURIDAD EN LA CIRCULACIÓN</a></li>
                    <li><a href="{{ url('biblioteca/archivo') }}" class="dropdown-item" title="Archivo de información histórica">ARCHIVO HISTÓRICO</a></li>
                    <li><a href="{{ url('biblioteca/defensa') }}" class="dropdown-item" title="Información del equipo estatal">DEFENSA DEL FERROCARRIL</a></li>
                    <li><a href="{{ url('biblioteca/colegio') }}" class="dropdown-item" title="Colegio de Huérfanos Ferroviarios">COLEGIO DE HUÉRFANOS</a></li>
                    <li><a href="{{ url('biblioteca/via') }}" class="dropdown-item" title="Magazine Ferroviario">VIA LIBERTARIA</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <x-nav-link :href="route('recursos')" :active="request()->routeIs('recursos')" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Recursos Audiovisuales para uso Multimedia">
                    {{ __('RECURSOS') }}
                </x-nav-link>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a href="{{ url('recursos/videos') }}" class="dropdown-item" title="Videos del equipo estatal">VIDEOS</a></li>
                    <li><a href="{{ url('recursos/audios') }}" class="dropdown-item" title="Audios del equipo estatal">AUDIOS</a></li>
                    <li><a href="{{ url('recursos/carteles') }}" class="dropdown-item" title="Carteles elaborados por el equipo estatal">CARTELES</a></li>
                    <li><a href="{{ url('recursos/fotos') }}" class="dropdown-item" title="Fotos del equipo estatal">FOTOGRAFIAS</a></li>
                    <li><a href="{{ url('recursos/logos') }}" class="dropdown-item" title="Logotipos para su uso en prensa">LOGOTIPOS</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <x-nav-link :href="route('juridica')" :active="request()->routeIs('juridica')" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Sector Federal Ferroviario de la CGT">
                    {{ __('SFF-CGT') }}
                </x-nav-link>
                <ul class="dropdown-menu dropdown-menu-dark">
                <li><a href="{{ url('equipo/sp') }}" class="dropdown-item" title="Información del equipo estatal">EQUIPO</a></li>
                <li><a href="{{ url('equipo/mapa') }}" class="dropdown-item" title="Información de Contacto de las Secciones Sindicales en España">MAPA SINDICAL</a></li>
                <li><a href="{{ url('equipo/contacto') }}" class="dropdown-item" title="Formulario de Contacto">CONTACTO</a></li>
                </ul>
            </li> 
        </ul> 
    </div>
    <div class="col ml-10 flex justify-center">
        <ul class="inline-flex m-0 grisMedio text-3xl">
            <li><a href="https://twitter.com/SFFCGT" title="Twitter SFFCGT" target="_blank"><i class="lni lni-twitter sociales"></i></a></li>
            <li><a href="https://www.instagram.com/sffcgt/" title="Instagram SFFCGT" target="_blank"><i class="lni lni-instagram sociales"></i></a></li>
            <li><a href="https://es-es.facebook.com/cgtferroviario/" title="Facebook SFFCGT" target="_blank"><i class="lni lni-facebook sociales"></i></a></li>
            <li><a href="https://www.youtube.com/c/CGTSectorFederalFerroviario" title="Youtube SFFCGT" target="_blank"><i class="lni lni-youtube sociales"></i></a></li>
        </ul>
    </div>
    <div class="col flex justify-end mr-4">        
        <button id="dropdownAreaAfiliados" data-dropdown-toggle="dropdown" class="btn btn-outline-danger" id="login" type="button">AREA Afiliados <i class="lni lni-chevron-down ml-1"></i></button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="dropdown-menu dropdown-menu-dark z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-auto">
            @guest
            <div class="login">
                <form method="POST" class="dropdown-menu-dark p-4" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                        <div class="mb-3">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
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
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

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
                            <p>
                            <a class="inline red peq" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a></p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            @else
            <div class="login-nav p-3">
                <div class="">
                    <span class="">Bienvenid@, {{ Auth::user()->nombre }}</span>
                </div>
                <div class="mb-2">
                    <h6 class="mb-2">Accede a tu <a href="{{ url('editor/dashboard') }}">Panel de Afiliado</a></h6>
                </div>
                <hr>
                <div class="mb-2">
                    <a href="{{ route('comunicados.index') }}" class="enlace inline-flex">Comunicados</a>
                    <div class="btn-group">
                        <a href="{{ route('comunicados.index') }}" class="btn btn-outline-secondary">Editar</a>
                        <a href="{{ route('comunicados.create') }}" class="btn btn-outline-info">Añadir</a>
                    </div>
                </div>
                <div class="mb-2 inline-flex">
                    <div clas="">
                        <a href="{{ route('etiquetas.index') }}" class="enlace">Etiquetas</a>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('etiquetas.index') }}" class="btn btn-outline-secondary ml-2">Editar</a>
                        <a href="{{ route('etiquetas.create') }}" class="btn btn-outline-info ml-2">Añadir</a>
                    </div>
                </div>
                <div class="mb-2">
                    <a href="{{ route('categorias.index') }}" class="enlace">Categorias</a>
                    <div class="btn-group">
                        <a href="{{ route('categorias.index') }}" class="btn btn-outline-secondary ml-2">Editar</a>
                        <a href="{{ route('categorias.create') }}" class="btn btn-outline-info ml-2">Añadir</a>
                    </div>
                </div>
                <div class="mb-2">
                    <a href="{{ route('empresas.index') }}" class="enlace">Empresas</a>
                    <div class="btn-group">
                        <a href="{{ route('empresas.index') }}" class="btn btn-outline-secondary ml-2">Editar</a>
                        <a href="{{ route('empresas.create') }}" class="btn btn-outline-info ml-2">Añadir</a>
                    </div>
                </div>
                <div class="mx-auto">
                    <button class="btn btn-outline-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endguest
        </div>
        
    </div>
</nav>