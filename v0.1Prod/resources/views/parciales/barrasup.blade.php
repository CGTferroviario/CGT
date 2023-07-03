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
{{-- <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                        Icon when menu is closed.
                        Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                    Icon when menu is open.
                    Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a class="" href="{{ url('/') }}">
                        <img class="inline block h-8 w-auto lg:hidden"
                        src="/img/LogoSFF_sm.png" alt="CGT Ferroviario" />
                        <img class="inline hidden h-8 w-auto lg:block"
                        src="/img/LogoSFF_sm.png" alt="CGT Ferroviario" />
                        <span class="titular">Ferroviario7</span>
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                            aria-current="page">Dashboard</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button"
                    class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <div>
                        <button type="button"
                            class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </button>
                    </div>

                    <!--
                        Dropdown menu, show/hide based on menu state.
            
                        Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                        Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                    -->
                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-0">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-1">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-2">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page">Dashboard</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
        </div>
    </div>
</nav> --}}