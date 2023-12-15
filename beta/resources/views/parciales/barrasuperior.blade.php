<nav class="bg-oscuro fixed w-full z-40 top-0 left-0">
    <div class="flex flex-wrap items-center justify-between mx-auto p-1">
        <div class="flex items-center">
            <a href="{{ url('/intranet') }}" class="flex logo">
                <img class="p-1" src="/img/logo_sm.png" alt="CGT Ferroviario" />
                <span class="mx-2 titular mt-2 text-white sm:flex md:hidden xl:flex whitespace-nowrap">Ferroviario7</span>
            </a>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:text-sm lg:text-base xl:text-lg" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 ml-1 font-medium border border-gray-700 rounded-lg md:flex-row md:space-x-1 md:mt-0 md:border-0">
                <li class="group {{ Route::currentRouteNamed('adif.*') ? 'border-red-500' : 'border-transparent' }} border-b-2 hover:border-transparent">
                    <button id="dropdownAdifLink" data-dropdown-toggle="dropdownAdif" class="flex items-center justify-between w-full border-b md:border-0 md:p-2 md:w-auto text-white md:hover:text-black focus:text-white border-gray-700 md:hover:bg-red-500 active:text-red-500 rounded-lg p-2">ADIF <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownAdif" class="z-50 hidden font-normal divide-y rounded-lg shadow w-auto bordeRojo bg-oscuro divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownAdifButton">
                            <li class="group" aria-labelledby="dropdownAdifLink">
                                <button id="doubleDropdownButtonAdif" data-dropdown-trigger="hover" data-dropdown-toggle="doubleDropdownAdif" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-red-500 hover:text-black group" title="Documentación General de ADIF">
                                    <a href="{{ route('adif.doc') }}" class="hover:text-black">DOC. GENERAL<i class="lni lni-chevron-right ml-5 text-red-500 group-hover:text-white"></i></a>
                                </button>
                                <div id="doubleDropdownAdif" class="z-50 hidden divide-y rounded-lg shadow w-72 bordeRojo bg-oscuro">
                                    <ul class="py-2 text-sm text-gray-400" aria-labelledby="doubleDropdownButtonAdif">
                                        <li><a href="{{ route('adif.doc.afiliacion') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">AFILIACIÓN</a></li>
                                        <li><a href="{{ route('adif.doc.ayudas') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">AYUDAS Y BENEFICIOS SOCIALES</a></li>
                                        <li><a href="{{ route('adif.doc.igualdad') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">IGUALDAD</a></li>
                                        <li><a href="{{ route('adif.doc.legislacion') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">LEGISLACIÓN · NORMATIVA LABORAL</a></li>
                                        <li><a href="{{ route('adif.doc.licencias') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">LICENCIAS</a></li>
                                        <li><a href="{{ route('adif.doc.mapa') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">MAPA ESTACIONES · RED ADIF Y RENFE</a></li>
                                        <li><a href="{{ route('adif.doc.conciliacion') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">MEDIDAS DE CONCILIACIÓN</a></li>
                                        <li><a href="{{ route('adif.doc.modelos') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">MODELOS DE SOLICITUD DE EMPRESA</a></li>
                                        <li><a href="{{ route('adif.doc.protocolos') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">PROTOCOLOS FRENTE A LOS ACOSOS</a></li>
                                        <li><a href="{{ route('adif.doc.salud') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">SALUD LABORAL</a></li>
                                        <li><a href="{{ route('adif.doc.teletrabajo') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">TELETRABAJO</a></li>
                                        <li><a href="{{ route('adif.doc.tablas') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">TABLAS SALARIALES</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{ route('adif.infraestructura') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación del Colectivo de Infraestructura">INFRAESTRUCTURA</a></li>
                            <li><a href="{{ route('adif.circulacion') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación del Colectivo de Circulación">CIRCULACIÓN</a></li>
                            <li><a href="{{ route('adif.oficinas') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación del Colectivo de Oficinas">OFICINAS</a></li>
                            <li><a href="{{ route('adif.estaciones') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación del Colectivo de Estaciones">ESTACIONES</a></li>
                        </ul>
                    </div>
                </li>
                <li class="group {{ Route::currentRouteNamed('renfe.*') ? 'border-red-500' : 'border-transparent' }} border-b-2 hover:border-transparent">
                    <button id="dropdownRenfeLink" data-dropdown-toggle="dropdownRenfe" class="flex items-center justify-between w-full border-b md:border-0 md:p-2 md:w-auto text-white md:hover:text-black focus:text-white border-gray-700 md:hover:bg-red-500 active:text-red-500 rounded-lg p-2">RENFE <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownRenfe" class="z-50 hidden font-normal divide-y rounded-lg shadow w-auto bordeRojo bg-oscuro divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownRenfeButton">
                            <li aria-labelledby="dropdownRenfeLink">
                                <button id="doubleDropdownButtonRenfe" data-dropdown-trigger="hover" data-dropdown-toggle="doubleDropdownRenfe" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-red-500 hover:text-black group" title="Documentación General de RENFE">
                                    <a href="{{ route('renfe.doc') }}" class="hover:text-black">DOC. GENERAL<i class="lni lni-chevron-right ml-5 text-red-500 group-hover:text-white"></i></a>
                                </button>
                                <div id="doubleDropdownRenfe" class="z-50 hidden divide-y rounded-lg shadow w-72 bordeRojo bg-oscuro">
                                    <ul class="py-2 text-sm text-gray-400" aria-labelledby="doubleDropdownButtonRenfe">
                                        <li><a href="{{ route('renfe.doc.afiliacion') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">AFILIACIÓN</a></li>
                                        <li><a href="{{ route('renfe.doc.ayudas') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">AYUDAS Y BENEFICIOS SOCIALES</a></li>
                                        <li><a href="{{ route('renfe.doc.igualdad') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">IGUALDAD</a></li>
                                        <li><a href="{{ route('renfe.doc.legislacion') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">LEGISLACIÓN · NORMATIVA LABORAL</a></li>
                                        <li><a href="{{ route('renfe.doc.licencias') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">LICENCIAS</a></li>
                                        <li><a href="{{ route('renfe.doc.mapa') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">MAPA ESTACIONES · RED ADIF Y RENFE</a></li>
                                        <li><a href="{{ route('renfe.doc.conciliacion') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">MEDIDAS DE CONCILIACIÓN</a></li>
                                        <li><a href="{{ route('renfe.doc.modelos') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">MODELOS DE SOLICITUD DE EMPRESA</a></li>
                                        <li><a href="{{ route('renfe.doc.protocolos') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">PROTOCOLOS FRENTE A LOS ACOSOS</a></li>
                                        <li><a href="{{ route('renfe.doc.salud') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">SALUD LABORAL</a></li>
                                        <li><a href="{{ route('renfe.doc.teletrabajo') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">TELETRABAJO</a></li>
                                        <li><a href="{{ route('renfe.doc.tablas') }}" class="block px-2 py-1 hover:bg-red-500 hover:text-black">TABLAS SALARIALES</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{ route('renfe.comercial') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación del Colectivo de Comercial">COMERCIAL</a></li>
                            <li><a href="{{ route('renfe.intervencion') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación del Colectivo de Intervención">INTERVENCIÓN</a></li>
                            <li><a href="{{ route('renfe.conduccion') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación del Colectivo de Conducción">CONDUCCIÓN</a></li>
                            <li><a href="{{ route('renfe.talleres') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación del Colectivo de Talleres">TALLERES</a></li>
                            <li><a href="{{ route('renfe.oficinas') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación del Colectivo de Oficinas">OFICINAS</a></li>
                        </ul>
                    </div>
                </li>
                <li class="group {{ Route::currentRouteNamed('empresasaux.*') ? 'border-red-500' : 'border-transparent' }} border-b-2 hover:border-transparent">
                    <button id="dropdownEmpAuxLink" data-dropdown-toggle="dropdownEmpAux" class="flex items-center justify-between w-full border-b md:border-0 md:p-2 md:w-auto text-white md:hover:text-black focus:text-white border-gray-700 md:hover:bg-red-500 active:text-red-500 rounded-lg p-2">EMP. AUX. <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownEmpAux" class="z-50 hidden font-normal divide-y rounded-lg shadow w-auto bordeRojo bg-oscuro divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownEmpAuxButton">
                            <li><a href="{{ route('empresasaux.serveo') }}#" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación de SERVEO(Anteriormente FERROVIAL)">SERVEO</a></li>
                            <li><a href="{{ route('empresasaux.logirail') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación de LOGIRAIL">LOGIRAIL</a></li>
                            <li><a href="{{ route('empresasaux.otras') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Documentación de otras Empresas Auxiliares">OTRAS EMPRESAS</a></li>
                        </ul>
                    </div>
                </li>
                <li class="group {{ Route::currentRouteNamed('juridica.*') ? 'border-red-500' : 'border-transparent' }} border-b-2 hover:border-transparent">
                    <button id="dropdownJuridicaLink" data-dropdown-toggle="dropdownJuridica" class="flex items-center justify-between w-full border-b md:border-0 md:p-2 md:w-auto text-white md:hover:text-black focus:text-white border-gray-700 md:hover:bg-red-500 active:text-red-500 rounded-lg p-2">JURIDICA <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownJuridica" class="z-50 hidden font-normal divide-y rounded-lg shadow w-auto bordeRojo bg-oscuro divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownJuridicaButton">
                            <li><a href="{{ route('juridica.convenios') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black">CONVENIOS COLECTIVOS</a></li>
                            <li><a href="{{ route('juridica.laboral') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black">LEGISLACIÓN LABORAL</a></li>
                            <li><a href="{{ route('juridica.ferroviaria') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black">LEGISLACIÓN FERROVIARIA</a></li>
                            <li><a href="{{ route('juridica.modelos') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black">FORMULARIOS <span class="rojoBrillante">//</span> MODELOS</a></li>
                            <li><a href="{{ route('juridica.logros') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black">LOGROS JURÍDICOS CGT</a></li>
                        </ul>
                    </div>
                </li>
                <li class="group {{ Route::currentRouteNamed('biblioteca.*') ? 'border-red-500' : 'border-transparent' }} border-b-2 hover:border-transparent">
                    <button id="dropdownBibliotecaLink" data-dropdown-toggle="dropdownBiblioteca" class="flex items-center justify-between w-full border-b md:border-0 md:p-2 md:w-auto text-white md:hover:text-black focus:text-white border-gray-700 md:hover:bg-red-500 active:text-red-500 rounded-lg p-2">BIBLIOTECA <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownBiblioteca" class="z-50 hidden font-normal divide-y rounded-lg shadow w-auto bordeRojo bg-oscuro divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownBibliotecaButton">
                            <li><a href="{{ url('biblioteca/comunicados') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Comunicados de la CGT">COMUNICADOS</a></li>
                            <li><a href="{{ url('biblioteca/noticias') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Noticias del Sector Ferroviario de la CGT">NOTICIAS</a></li>
                            <li><a href="{{ url('biblioteca/seguridad') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Información de Seguridad en la Circulación">SEGURIDAD EN LA CIRCULACIÓN</a></li>
                            <li><a href="{{ url('biblioteca/archivo') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Archivo de información histórica">ARCHIVO HISTÓRICO</a></li>
                            <li><a href="{{ url('biblioteca/defensa') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Información sobre la defensa de un ferrocarril público y social">DEFENSA DEL FERROCARRIL</a></li>
                            <li><a href="{{ url('biblioteca/colegio') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Colegio de Huérfanos Ferroviarios">COLEGIO DE HUÉRFANOS</a></li>
                            <li><a href="{{ url('biblioteca/via') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Magazine Ferroviario">VIA LIBERTARIA</a></li>
                        </ul>
                    </div>
                </li>
                <li class="group {{ Route::currentRouteNamed('recursos.*') ? 'border-red-500' : 'border-transparent' }} border-b-2 hover:border-transparent">
                    <button id="dropdownRecursosLink" data-dropdown-toggle="dropdownRecursos" class="flex items-center justify-between w-full border-b md:border-0 md:p-2 md:w-auto text-white md:hover:text-black focus:text-white border-gray-700 md:hover:bg-red-500 active:text-red-500 rounded-lg p-2">RECURSOS <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownRecursos" class="z-50 hidden font-normal divide-y rounded-lg shadow w-auto bordeRojo bg-oscuro divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownRecursosButton">
                            <li><a href="{{ url('recursos/videos') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Videos del equipo estatal">VIDEOS</a></li>
                            <li><a href="{{ url('recursos/audios') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Audios del equipo estatal">AUDIOS</a></li>
                            <li><a href="{{ url('recursos/carteles') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Carteles elaborados por el equipo estatal">CARTELES</a>
                            </li>
                            <li><a href="{{ url('recursos/fotos') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Fotografías del equipo estatal">FOTOGRAFIAS</a></li>
                            <li><a href="{{ url('recursos/logos') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Logotipos para su uso en prensa">LOGOTIPOS</a></li>
                        </ul>
                    </div>
                </li>
                <li class="group {{ Route::currentRouteNamed('equipo.*') ? 'border-red-500' : 'border-transparent' }} border-b-2 hover:border-transparent">
                    <button id="dropdownEquipoLink" data-dropdown-toggle="dropdownEquipo" class="flex items-center justify-between w-full border-b md:border-0 md:p-2 md:w-auto text-white md:hover:text-black focus:text-white border-gray-700 md:hover:bg-red-500 active:text-red-500 rounded-lg p-2">SFF-CGT <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownEquipo" class="z-50 hidden font-normal divide-y rounded-lg shadow w-auto bordeRojo bg-oscuro divide-gray-600">
                        <ul class="py-2 text-sm text-gray-400" aria-labelledby="dropdownEquipoButton">
                            <li><a href="{{ route('equipo.sp') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black" title="Información del equipo estatal">EQUIPO ESTATAL</a></li>
                            <li><a href="{{ url('equipo/mapa') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black">MAPA SINDICAL</a></li>
                            <li><a href="{{ url('equipo/contacto') }}" class="block px-4 py-2 hover:bg-red-500 hover:text-black">CONTACTO</a></li>
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
            <x-boton-login></x-boton-login>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="ml-4 inline-flex items-center p-2 text-sm text-gray-500 rounded-lg border-x border-y hover:text-red-500 hover:border-red-500 border-red-500 md:hidden focus:outline-none focus:ring-2 hover:bg-black focus:ring-red-500"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Abrir Menú Principal</span>
                <i class="lni lni-train-alt"></i>
            </button>
        </div>
    </div>
</nav>
