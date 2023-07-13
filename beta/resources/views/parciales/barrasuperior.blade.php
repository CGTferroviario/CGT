<nav class="bg-oscuro fixed w-full z-40 top-0 left-0">
    <div class="flex flex-wrap items-center justify-between mx-auto p-1">
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="flex logo">
                <img class="p-1" src="/img/logo_sm.png" alt="CGT Ferroviario" />
                <span class="mx-2 titular mt-2 text-white sm:flex md:hidden xl:flex whitespace-nowrap">Ferroviario7</span>
            </a>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:text-sm lg:text-base xl:text-lg" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 ml-1 font-medium border border-gray-700 rounded-lg md:flex-row md:space-x-4 md:mt-0 md:border-0">
                <li>
                    <button id="dropdownAdifLink" data-dropdown-toggle="dropdownAdif" class="flex items-center justify-between w-full py-2 pl-3 pr-4 border-b md:border-0 md:p-0 md:w-auto text-white md:hover:text-blue-500 focus:text-white border-gray-700 hover:bg-gray-700 active:text-green-500 md:hover:bg-transparent">ADIF <i class="lni lni-chevron-down ml-2"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownAdif" class="z-50 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownAdifButton">
                            <li aria-labelledby="dropdownAdifLink">
                                <button id="doubleDropdownButtonAdif" data-dropdown-toggle="doubleDropdownAdif" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación General de ADIF">
                                    DOC. GENERAL<i class="lni lni-chevron-right ml-2"></i></button>
                                <div id="doubleDropdownAdif" class="z-50 hidden divide-y rounded-lg shadow w-44 bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-200" aria-labelledby="doubleDropdownButtonAdif">
                                        <li><a href="{{ url('adif/doc/afiliacion') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">AFILIACIÓN</a></li>
                                        <li><a href="{{ url('adif/doc/ayudas') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">AYUDAS Y BENEFICIOS SOCIALES</a></li>
                                        <li><a href="{{ url('adif/doc/igualdad') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">IGUALDAD</a></li>
                                        <li><a href="{{ url('adif/doc/legislacion') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">LEGISLACIÓN · NORMATIVA LABORAL</a></li>
                                        <li><a href="{{ url('adif/doc/licencias') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">LICENCIAS</a></li>
                                        <li><a href="{{ url('adif/doc/mapa') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">MAPA ESTACIONES · RED ADIF Y RENFE</a></li>
                                        <li><a href="{{ url('adif/doc/conciliacion') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">MEDIDAS DE CONCILIACIÓN</a></li>
                                        <li><a href="{{ url('adif/doc/modelos') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">MODELOS DE SOLICITUD DE EMPRESA</a></li>
                                        <li><a href="{{ url('adif/doc/protocolos') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">PROTOCOLOS FRENTE A LOS ACOSOS</a></li>
                                        <li><a href="{{ url('adif/doc/salud') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">SALUD LABORAL</a></li>
                                        <li><a href="{{ url('adif/doc/teletrabajo') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">TELETRABAJO</a></li>
                                        <li><a href="{{ url('adif/doc/tablas') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">TABLAS SALARIALES</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{ url('adif/infraestructura') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación del Colectivo de Infraestructura">INFRAESTRUCTURA</a></li>
                            <li><a href="{{ url('adif/circulacion') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación del Colectivo de Circulación">CIRCULACIÓN</a></li>
                            <li><a href="{{ url('adif/oficinas') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación del Colectivo de Oficinas">OFICINAS</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownRenfeLink" data-dropdown-toggle="dropdownRenfe" class="flex items-center justify-between w-full py-2 pl-3 pr-4  border-b md:hover:bg-transparent md:border-0 md:p-0 md:w-auto text-white md:hover:text-blue-500 focus:text-white border-gray-700 hover:bg-gray-700">RENFE <i class="lni lni-chevron-down ml-2"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownRenfe" class="z-50 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownRenfeButton">
                            <li aria-labelledby="dropdownRenfeLink">
                                <button id="doubleDropdownButtonRenfe" data-dropdown-toggle="doubleDropdownRenfe" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación General de RENFE">
                                    DOC. GENERAL<i class="lni lni-chevron-right ml-2"></i></button>
                                <div id="doubleDropdownRenfe" class="z-50 hidden divide-y rounded-lg shadow w-44 bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-200" aria-labelledby="doubleDropdownButtonRenfe">
                                        <li><a href="{{ url('renfe/doc/afiliacion') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">AFILIACIÓN</a></li>
                                        <li><a href="{{ url('renfe/doc/ayudas') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">AYUDAS Y BENEFICIOS SOCIALES</a></li>
                                        <li><a href="{{ url('renfe/doc/igualdad') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">IGUALDAD</a></li>
                                        <li><a href="{{ url('renfe/doc/legislacion') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">LEGISLACIÓN · NORMATIVA LABORAL</a></li>
                                        <li><a href="{{ url('renfe/doc/licencias') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">LICENCIAS</a></li>
                                        <li><a href="{{ url('renfe/doc/mapa') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">MAPA ESTACIONES · RED ADIF Y RENFE</a></li>
                                        <li><a href="{{ url('renfe/doc/conciliacion') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">MEDIDAS DE CONCILIACIÓN</a></li>
                                        <li><a href="{{ url('renfe/doc/modelos') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">MODELOS DE SOLICITUD DE EMPRESA</a></li>
                                        <li><a href="{{ url('renfe/doc/protocolos') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">PROTOCOLOS FRENTE A LOS ACOSOS</a></li>
                                        <li><a href="{{ url('renfe/doc/salud') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">SALUD LABORAL</a></li>
                                        <li><a href="{{ url('renfe/doc/teletrabajo') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">TELETRABAJO</a></li>
                                        <li><a href="{{ url('renfe/doc/tablas') }}" class="block px-2 py-1 hover:bg-gray-600 text-gray-400 hover:text-white">TABLAS SALARIALES</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{ url('renfe/comercial') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación del Colectivo de Comercial">COMERCIAL</a></li>
                            <li><a href="{{ url('renfe/intervencion') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación del Colectivo de Intervención">INTERVENCIÓN</a></li>
                            <li><a href="{{ url('renfe/conduccion') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación del Colectivo de Conducción">CONDUCCIÓN</a></li>
                            <li><a href="{{ url('renfe/talleres') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación del Colectivo de Talleres">TALLERES</a></li>
                            <li><a href="{{ url('renfe/oficinas') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación del Colectivo de Oficinas">OFICINAS</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownEmpAuxLink" data-dropdown-toggle="dropdownEmpAux" class="flex items-center justify-between w-full py-2 pl-3 pr-4  border-b md:hover:bg-transparent md:border-0 md:p-0 md:w-auto text-white md:hover:text-blue-500 focus:text-white border-gray-700 hover:bg-gray-700">EMP. AUX. <i class="lni lni-chevron-down ml-2"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownEmpAux" class="z-50 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownEmpAuxButton">
                            <li><a href="{{ url('empresasaux/serveo') }}#" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación de SERVEO(Anteriormente FERROVIAL)">SERVEO</a></li>
                            <li><a href="{{ url('empresasaux/logirail') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación de LOGIRAIL">LOGIRAIL</a></li>
                            <li><a href="{{ url('empresasaux/otras') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Documentación de otras Empresas Auxiliares">OTRAS EMPRESAS</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownJuridicaLink" data-dropdown-toggle="dropdownJuridica" class="flex items-center justify-between w-full py-2 pl-3 pr-4  border-b md:hover:bg-transparent md:border-0 md:p-0 md:w-auto text-white md:hover:text-blue-500 focus:text-white border-gray-700 hover:bg-gray-700">JURIDICA <i class="lni lni-chevron-down ml-2"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownJuridica" class="z-50 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownJuridicaButton">
                            <li><a href="{{ url('juridica/convenios') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">CONVENIOS COLECTIVOS</a></li>
                            <li><a href="{{ url('juridica/laboral') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">LEGISLACIÓN LABORAL</a></li>
                            <li><a href="{{ url('juridica/ferroviaria') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">LEGISLACIÓN FERROVIARIA</a></li>
                            <li><a href="{{ url('juridica/modelos') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">FORMULARIOS <span class="rojoBrillante">//</span> MODELOS</a></li>
                            <li><a href="{{ url('juridica/logros') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">LOGROS JURÍDICOS CGT</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownBibliotecaLink" data-dropdown-toggle="dropdownBiblioteca" class="flex items-center justify-between w-full py-2 pl-3 pr-4  border-b md:hover:bg-transparent md:border-0 md:p-0 md:w-auto text-white md:hover:text-blue-500 focus:text-white border-gray-700 hover:bg-gray-700">BIBLIOTECA <i class="lni lni-chevron-down ml-2"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownBiblioteca" class="z-50 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownBibliotecaButton">
                            <li><a href="{{ url('biblioteca/comunicados') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Comunicados de la CGT">COMUNICADOS</a></li>
                            <li><a href="{{ url('biblioteca/seguridad') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Información de Seguridad en la Circulación">SEGURIDAD EN LA CIRCULACIÓN</a></li>
                            <li><a href="{{ url('biblioteca/archivo') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Archivo de información histórica">ARCHIVO HISTÓRICO</a></li>
                            <li><a href="{{ url('biblioteca/defensa') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Información sobre la defensa de un ferrocarril público y social">DEFENSA DEL FERROCARRIL</a></li>
                            <li><a href="{{ url('biblioteca/colegio') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Colegio de Huérfanos Ferroviarios">COLEGIO DE HUÉRFANOS</a></li>
                            <li><a href="{{ url('biblioteca/via') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Magazine Ferroviario">VIA LIBERTARIA</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownRecursosLink" data-dropdown-toggle="dropdownRecursos" class="flex items-center justify-between w-full py-2 pl-3 pr-4  border-b md:hover:bg-transparent md:border-0 md:p-0 md:w-auto text-white md:hover:text-blue-500 focus:text-white border-gray-700 hover:bg-gray-700">RECURSOS <i class="lni lni-chevron-down ml-2"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownRecursos" class="z-50 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownRecursosButton">
                            <li><a href="{{ url('recursos/videos') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Videos del equipo estatal">VIDEOS</a></li>
                            <li><a href="{{ url('recursos/audios') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Audios del equipo estatal">AUDIOS</a></li>
                            <li><a href="{{ url('recursos/carteles') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Carteles elaborados por el equipo estatal">CARTELES</a>
                            </li>
                            <li><a href="{{ url('recursos/fotos') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Fotografías del equipo estatal">FOTOGRAFIAS</a></li>
                            <li><a href="{{ url('recursos/logos') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Logotipos para su uso en prensa">LOGOTIPOS</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownEquipoLink" data-dropdown-toggle="dropdownEquipo" class="flex items-center justify-between w-full py-2 pl-3 pr-4  border-b md:hover:bg-transparent md:border-0 md:p-0 md:w-auto text-white md:hover:text-blue-500 focus:text-white border-gray-700 hover:bg-gray-700">SFF-CGT <i class="lni lni-chevron-down ml-2"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownEquipo" class="z-50 hidden font-normal divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownEquipoButton">
                            <li><a href="{{ url('equipo/sp') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white" title="Información del equipo estatal">EQUIPO ESTATAL</a></li>
                            <li><a href="{{ url('equipo/mapa') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">MAPA SINDICAL</a></li>
                            <li><a href="{{ url('equipo/contacto') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">CONTACTO</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="flex md:mx-auto">
            <ul class="inline-flex m-0 mt-2 text-gray-500 text-3xl sociales">
                <li><a href="https://twitter.com/SFFCGT" title="Twitter SFFCGT" target="_blank"><i class="lni lni-twitter mr-1"></i></a></li>
                <li><a href="https://www.instagram.com/sffcgt/" title="Instagram SFFCGT" target="_blank"><i class="lni lni-instagram"></i></a></li>
                <li><a href="https://es-es.facebook.com/cgtferroviario/" title="Facebook SFFCGT" target="_blank"><i class="lni lni-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/c/CGTSectorFederalFerroviario" title="Youtube SFFCGT" target="_blank"><i class="lni lni-youtube"></i></a></li>
            </ul>
        </div>
        {{-- <x-login> </x-login> --}}
        <div class="flex pr-2">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black bg-red-500 hover:bg-red-200 focus:ring-2 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">ÁREA Afiliados <i class="lni lni-chevron-down ml-2 text-white"></i></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-50 hidden divide-y rounded-lg shadow w-96 bg-oscuro">
                @guest
                    <div class="w-full max-w-sm p-4 bg-oscuro bordeRojo rounded-lg shadow sm:p-6 md:p-8">
                        <form class="space-y-6" action="{{ route('login') }}">
                            @csrf
                            <h5 class="text-xl font-medium rojoBrillante">Accede a tu Área de Afiliado</h5>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                                <input type="email" name="email" id="email" class="border text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 bg-gray-600 border-red-500 placeholder-gray-400 text-white" placeholder="usuario@email.com" required>
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-white">Contraseña</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="border text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 bg-gray-600 border-red-500 placeholder-gray-400 text-white" required>
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-red-500 text-red-500 focus:ring-1 focus:ring-red-500 ring-offset-gray-800 focus:ring-offset-gray-800" required>
                                    </div>
                                    <label for="remember" class="ml-2 text-sm font-medium text-red-500">Recuérdame</label>
                                </div>
                                <a href="#" class="ml-auto text-sm text-red-500 hover:underline">¿Olvidaste tu Contraseña?</a>
                            </div>
                            <button type="submit" class="w-full text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Acceder</button>
                            <div class="text-sm font-medium text-gray-500">
                                ¿No estás registrado? <a href="#" class="text-red-700 hover:underline">Crear Usuario</a>
                            </div>
                        </form>
                    </div>
                @else
                <div class="w-full max-w-sm p-4 bg-oscuro bordeRojo rounded-lg shadow sm:p-6 md:p-8">
                    <div class="inline-flex">
                        <span class="text-white">
                            Bienvenid@, {{ Auth::user()->name }}
                        </span>
                    </div>
                    <div class="inline-flex float-right">
                        <button class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </button>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    <div class="mb-2">
                        <h6 class="mb-2">Accede a tu <a href="{{ url('dashboard') }}">Panel de Afiliado</a></h6>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <a href="{{ route('intranet.comunicados.index') }}" class="enlace inline-flex">Comunicados</a>
                        <div class="">
                            <a href="{{ url('intranet.comunicados.edit') }}" class="btn btn-outline-secondary">Editar</a>
                            <a href="{{ url('intranet.comunicados.create') }}" class="btn btn-outline-info">Añadir</a>
                        </div>
                    </div>
                </div>
                @endguest
            </div>
            

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg border-x border-y hover:text-red-500 hover:border-red-500 border-white md:hidden focus:outline-none focus:ring-2 hover:bg-gray-900 focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Abrir Menú Principal</span>
                <i class="lni lni-line-spacing text-3xl"></i>
            </button>
        </div>
        
        
    </div>
</nav>
