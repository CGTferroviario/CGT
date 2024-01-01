<x-publico-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('MAPA SINDICAL - Sector Federal Ferroviario CGT') }}
        </h2>
    </x-slot>
    @section('contenido')
    <div class="p-8 fondo comunicados">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <br>
            <div id="accordion-color" data-accordion="collapse"
                data-active-classes="bg-blue-100 dark:bg-zinc-800 text-blue-600 dark:text-white">
                <h2 id="accordion-color-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-zinc-500 border border-b-0 border-zinc-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-zinc-700 dark:text-zinc-400 hover:bg-blue-100 dark:hover:bg-zinc-800 gap-3"
                        data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                        aria-controls="accordion-color-body-1">
                        <span>What is Flowbite?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                    <div class="p-5 border border-b-0 border-zinc-200 dark:border-zinc-700 dark:bg-zinc-900">
                        <p class="mb-2 text-zinc-500 dark:text-zinc-400">Flowbite is an open-source library of interactive
                            components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                        <p class="text-zinc-500 dark:text-zinc-400">Check out this guide to learn how to <a
                                href="/docs/getting-started/introduction/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing
                            websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-zinc-500 border border-b-0 border-zinc-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-zinc-700 dark:text-zinc-400 hover:bg-blue-100 dark:hover:bg-zinc-800 gap-3"
                        data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                        aria-controls="accordion-color-body-2">
                        <span>Is there a Figma file available?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                    <div class="p-5 border border-b-0 border-zinc-200 dark:border-zinc-700">
                        <p class="mb-2 text-zinc-500 dark:text-zinc-400">Flowbite is first conceptualized and designed using the
                            Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-zinc-500 dark:text-zinc-400">Check out the <a href="https://flowbite.com/figma/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the
                            utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-zinc-500 border border-zinc-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-zinc-700 dark:text-zinc-400 hover:bg-blue-100 dark:hover:bg-zinc-800 gap-3"
                        data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                        aria-controls="accordion-color-body-3">
                        <span>What are the differences between Flowbite and Tailwind UI?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                    <div class="p-5 border border-t-0 border-zinc-200 dark:border-zinc-700">
                        <p class="mb-2 text-zinc-500 dark:text-zinc-400">The main difference is that the core components from
                            Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                            difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                            sections of pages.</p>
                        <p class="mb-2 text-zinc-500 dark:text-zinc-400">However, we actually recommend using both Flowbite,
                            Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best
                            of two worlds.</p>
                        <p class="mb-2 text-zinc-500 dark:text-zinc-400">Learn more about these technologies:</p>
                        <ul class="ps-5 text-zinc-500 list-disc dark:text-zinc-400">
                            <li><a href="https://flowbite.com/pro/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <button class="collapsible">Secciones Sindicales en Andalucía</button>
                <div class="content blanco">
                    <div class="resp-table">
                        <div class="resp-table-caption"></div>
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Almería</div>
                                <div class="table-body-cell"><a
                                        href="mailto:almeria@cgtferroviario.es">almeria@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Alberto Oliveira</div>
                                <div class="table-body-cell"></div>
                            </div>
                            <div class="resp-table-row">
                                <div class="table-body-cell">Cádiz</div>
                                <div class="table-body-cell"><a
                                        href="mailto:cadiz@cgtferroviario.es">cadiz@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Moisés Navarro</div>
                                <div class="table-body-cell"></div>
                            </div>
                            <div class="resp-table-row">
                                <div class="table-body-cell">Córdoba</div>
                                <div class="table-body-cell"><a
                                        href="mailto:cordoba@cgtferroviario.es">cordoba@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Gonzalo Moyano</div>
                                <div class="table-body-cell"></div>
                            </div>
                            <div class="resp-table-row">
                                <div class="table-body-cell">Granada</div>
                                <div class="table-body-cell"><a
                                        href="mailto:granada@cgtferroviario.es">granada@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Tomás Rodríguez</div>
                                <div class="table-body-cell"></div>
                            </div>
                            <div class="resp-table-row">
                                <div class="table-body-cell">Huelva</div>
                                <div class="table-body-cell"><a
                                        href="mailto:huelva@cgtferroviario.es">huelva@cgtferroviario.es</a></div>
                                <div class="table-body-cell"></div>
                                <div class="table-body-cell"></div>
                            </div>
                            <div class="resp-table-row">
                                <div class="table-body-cell">Jaén</div>
                                <div class="table-body-cell"><a
                                        href="mailto:jaen@cgtferroviario.es">jaen@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Pablo Nieto</div>
                                <div class="table-body-cell">963546</div>
                            </div>
                            <div class="resp-table-row">
                                <div class="table-body-cell">Málaga</div>
                                <div class="table-body-cell"><a
                                        href="mailto:malaga@cgtferroviario.es">malaga@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Miguel Montenegro</div>
                                <div class="table-body-cell"></div>
                            </div>
                            <div class="resp-table-row">
                                <div class="table-body-cell">Sevilla</div>
                                <div class="table-body-cell"><a
                                        href="mailto:sevilla@cgtferroviario.es">sevilla@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Luis Murciano</div>
                                <div class="table-body-cell">967874</div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial:</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.andalucia@cgtferroviario.es">ct.andalucia@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">SP</div>
                            <div class="table-footer-cell">166285</div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en Aragón y La Rioja</button>
                <div class="content blanco">
                    <div class="resp-table">
                        <div class="resp-table-caption">

                        </div>
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Huesca</div>
                                <div class="table-body-cell"><a
                                        href="mailto:huesca@cgtferroviario.es">huesca@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Pepa Casermeiro</div>
                                <div class="table-body-cell"></div>
                            </div>
                            <div class="resp-table-row">
                                <div class="table-body-cell">La Rioja</div>
                                <div class="table-body-cell"><a
                                        href="mailto:larioja@cgtferroviario.es">larioja@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Pablo Martín</div>
                                <div class="table-body-cell"></div>
                            </div>
                            <div class="resp-table-row">
                                <div class="table-body-cell">Teruel</div>
                                <div class="table-body-cell"><a
                                        href="mailto:teruel@cgtferroviario.es">teruel@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Pablo Justos</div>
                                <div class="table-body-cell"></div>
                            </div>
                            <div class="resp-table-row">
                                <div class="table-body-cell">Zaragoza</div>
                                <div class="table-body-cell"><a
                                        href="mailto:zaragoza@cgtferroviario.es">zaragoza@cgtferroviario.es</a></div>
                                <div class="table-body-cell">José Luis Fernández</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial Aragón y La Rioja</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.aragon@cgtferroviario.es">ct.aragon@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">Jose Luis Fernández</div>
                            <div class="table-footer-cell"></div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en el Principado de Asturias</button>
                <div class="content blanco">
                    <div class="resp-table">
                        <div class="resp-table-caption"></div>
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Asturias</div>
                                <div class="table-body-cell"><a
                                        href="mailto:asturies@cgtferroviario.es">asturies@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Diego Sánchez</div>
                                <div class="table-body-cell">961231</div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial Principado de Asturias</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.asturias@cgtferroviario.es">ct.asturias@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">Diego Sánchez</div>
                            <div class="table-footer-cell">961231</div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en Cantabria</button>
                <div class="content blanco">
                    <div class="resp-table">
                        <div class="resp-table-caption"></div>
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Cantabria</div>
                                <div class="table-body-cell"><a
                                        href="mailto:cantabria@cgtferroviario.es">cantabria@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Javier Cobo</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial de Cantabria</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.cantabria@cgtferroviario.es">ct.cantabria@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">Javier Cobo</div>
                            <div class="table-footer-cell"></div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en Castilla La Mancha</button>
                <div class="content blanco">
                    <div class="resp-table">
                        <div class="resp-table-caption"></div>
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Albacete</div>
                                <div class="table-body-cell"><a
                                        href="mailto:albacete@cgtferroviario.es">albacete@cgtferroviario.es</a></div>
                                <div class="table-body-cell">SP</div>
                                <div class="table-body-cell">166285</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Ciudad Real</div>
                                <div class="table-body-cell"><a
                                        href="mailto:ciudadreal@cgtferroviario.es">ciudadreal@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Juan Carlos Pérez</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Cuenca</div>
                                <div class="table-body-cell"><a
                                        href="mailto:cuenca@cgtferroviario.es">cuenca@cgtferroviario.es</a></div>
                                <div class="table-body-cell">SP</div>
                                <div class="table-body-cell">166285</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Guadalajara</div>
                                <div class="table-body-cell"><a
                                        href="mailto:guadalajara@cgtferroviario.es">guadalajara@cgtferroviario.es</a></div>
                                <div class="table-body-cell">SP</div>
                                <div class="table-body-cell">166285</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Toledo</div>
                                <div class="table-body-cell"><a
                                        href="mailto:toledo@cgtferroviario.es">toledo@cgtferroviario.es</a></div>
                                <div class="table-body-cell">SP</div>
                                <div class="table-body-cell">166285</div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial de Castilla La Mancha</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.clm@cgtferroviario.es">ct.clm@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">Juan Carlos Pérez</div>
                            <div class="table-footer-cell"></div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en Castilla y León</button>
                <div class="content blanco">
                    <div class="resp-table">
                        <div class="resp-table-caption"></div>
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Ávila</div>
                                <div class="table-body-cell"><a
                                        href="mailto:avila@cgtferroviario.es">avila@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Félix Huete</div>
                                <div class="table-body-cell">998390</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Burgos</div>
                                <div class="table-body-cell"><a
                                        href="mailto:burgos@cgtferroviario.es">burgos@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Oscar Balbas</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">León</div>
                                <div class="table-body-cell"><a
                                        href="mailto:leon@cgtferroviario.es">leon@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Jonás Santamaría</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Palencia</div>
                                <div class="table-body-cell"><a
                                        href="mailto:palencia@cgtferroviario.es">palencia@cgtferroviario.es</a></div>
                                <div class="table-body-cell">SP</div>
                                <div class="table-body-cell">166285</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Salamanca</div>
                                <div class="table-body-cell"><a
                                        href="mailto:salamanca@cgtferroviario.es">salamanca@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Ubaldo Hernández</div>
                                <div class="table-body-cell">961224</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Segovia</div>
                                <div class="table-body-cell"><a
                                        href="mailto:segovia@cgtferroviario.es">segovia@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Roberto Fernández</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Soria</div>
                                <div class="table-body-cell"><a
                                        href="mailto:soria@cgtferroviario.es">soria@cgtferroviario.es</a></div>
                                <div class="table-body-cell">SP</div>
                                <div class="table-body-cell">166285</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Valladolid</div>
                                <div class="table-body-cell"><a
                                        href="mailto:valladolid@cgtferroviario.es">valladolid@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Francisco Molledo</div>
                                <div class="table-body-cell">268343</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Zamora</div>
                                <div class="table-body-cell"><a
                                        href="mailto:zamora@cgtferroviario.es">zamora@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Diego Fernández</div>
                                <div class="table-body-cell">962564</div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial de Castilla y León</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.cyl@cgtferroviario.es">ct.cyl@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">Félix Huete</div>
                            <div class="table-footer-cell">998390</div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en Catalunya</button>
                <div class="content blanco">
                    <div class="resp-table-caption"></div>
                    <div class="resp-table">
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Barcelona</div>
                                <div class="table-body-cell"><a
                                        href="mailto:barcelona@cgtferroviario.es">barcelona@cgtferroviario.es</a></div>
                                <div class="table-body-cell">David Sáez</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Girona</div>
                                <div class="table-body-cell"><a
                                        href="mailto:girona@cgtferroviario.es">girona@cgtferroviario.es</a></div>
                                <div class="table-body-cell">SP</div>
                                <div class="table-body-cell">166285</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Lleida</div>
                                <div class="table-body-cell"><a
                                        href="mailto:lleida@cgtferroviario.es">lleida@cgtferroviario.es</a></div>
                                <div class="table-body-cell">SP</div>
                                <div class="table-body-cell">166285</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Tarragona</div>
                                <div class="table-body-cell"><a
                                        href="mailto:tarragona@cgtferroviario.es">tarragona@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Enrique Villaseñor</div>
                                <div class="table-body-cell">961221</div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial de Catalunya</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.catalunya@cgtferroviario.es">ct.catalunya@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">Enrique Villaseñor</div>
                            <div class="table-footer-cell">961221</div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en Extremadura</button>
                <div class="content blanco">
                    <div class="resp-table-caption"></div>
                    <div class="resp-table">
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Badajoz</div>
                                <div class="table-body-cell"><a
                                        href="mailto:badajoz@cgtferroviario.es">badajoz@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Pablo</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Cáceres</div>
                                <div class="table-body-cell"><a
                                        href="mailto:caceres@cgtferroviario.es">caceres@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Pablo López</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial de Extremadura</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.extremadura@cgtferroviario.es">ct.extremadura@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">Pablo López</div>
                            <div class="table-footer-cell"></div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en Euskadi y Navarra</button>
                <div class="content blanco">
                    <div class="resp-table-caption"></div>
                    <div class="resp-table">
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Álava</div>
                                <div class="table-body-cell"><a
                                        href="mailto:alava@cgtferroviario.es">alava@cgtferroviario.es</a></div>
                                <div class="table-body-cell">SP</div>
                                <div class="table-body-cell">166285</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Bizkaia</div>
                                <div class="table-body-cell"><a
                                        href="mailto:bizkaia@cgtferroviario.es">bizkaia@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Iker Izquierdo</div>
                                <div class="table-body-cell">998013</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Gipuzkoa</div>
                                <div class="table-body-cell"><a
                                        href="mailto:gipuzkoa@cgtferroviario.es">gipuzkoa@cgtferroviario.es</a></div>
                                <div class="table-body-cell">José Antonio Bayo</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Navarra</div>
                                <div class="table-body-cell"><a
                                        href="mailto:navarra@cgtferroviario.es">navarra@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Iker Izquierdo</div>
                                <div class="table-body-cell">998013</div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial en Euskadi</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.euskadi@cgtferroviario.es">ct.euskadi@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">Iker Izquierdo</div>
                            <div class="table-footer-cell">998013</div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en Galicia</button>
                <div class="content blanco">
                    <div class="resp-table-caption"></div>
                    <div class="resp-table">
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">A Coruña</div>
                                <div class="table-body-cell"><a
                                        href="mailto:acoruna@cgtferroviario.es">acoruna@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Ángel Valladares</div>
                                <div class="table-body-cell">961230</div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Lugo</div>
                                <div class="table-body-cell"><a
                                        href="mailto:lugo@cgtferroviario.es">lugo@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Antonio Ferreiro</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Ourense</div>
                                <div class="table-body-cell"><a
                                        href="mailto:ourense@cgtferroviario.es">ourense@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Diego Pascual</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Pontevedra</div>
                                <div class="table-body-cell"><a
                                        href="mailto:pontevedra@cgtferroviario.es">pontevedra@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Juantxo Losada</div>
                                <div class="table-body-cell">992471</div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial en Galicia</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.galicia@cgtferroviario.es">ct.galicia@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">Juantxo Losada</div>
                            <div class="table-footer-cell">992471</div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en Madrid</button>
                <div class="content blanco">
                    <div class="resp-table-caption"></div>
                    <div class="resp-table">
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Madrid</div>
                                <div class="table-body-cell"><a
                                        href="mailto:madrid@cgtferroviario.es">madrid@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Marco Coppola</div>
                                <div class="table-body-cell">166931</div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial en Madrid</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.madrid@cgtferroviario.es">ct.madrid@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">Enrique Fernández</div>
                            <div class="table-footer-cell">166931</div>
                        </div>
                    </div>
                </div>
                <button class="collapsible">Secciones Sindicales en País Valenciano y Murcia</button>
                <div class="content blanco">
                    <div class="resp-table-caption"></div>
                    <div class="resp-table">
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Dirección de Correo</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell">Teléfono</div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Alicante</div>
                                <div class="table-body-cell"><a
                                        href="mailto:alicante@cgtferroviario.es">alicante@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Javier Palomino</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Castellón</div>
                                <div class="table-body-cell"><a
                                        href="mailto:castellon@cgtferroviario.es">castellon@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Luis Vaillo</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Murcia</div>
                                <div class="table-body-cell"><a
                                        href="mailto:murcia@cgtferroviario.es">murcia@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Miguel Ángel Velázquez</div>
                                <div class="table-body-cell"></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Valencia</div>
                                <div class="table-body-cell"><a
                                        href="mailto:valencia@cgtferroviario.es">valencia@cgtferroviario.es</a></div>
                                <div class="table-body-cell">Juan Ramón Ferrandis</div>
                                <div class="table-body-cell">965287</div>
                            </div>
                        </div>
                        <div class="resp-table-footer">
                            <div class="table-footer-cell">Coordinador Territorial en País Valenciano y Murcia</div>
                            <div class="table-footer-cell"><a
                                    href="mailto:ct.valencia@cgtferroviario.es">ct.valencia@cgtferroviario.es</a></div>
                            <div class="table-footer-cell">SP</div>
                            <div class="table-footer-cell">166285</div>
                        </div>
                    </div>
                </div>
                <br>
                <button class="collapsible">Otras Secciones Sindicales de Ferrocarriles Autonómicos</button>
                <div class="content blanco">
                    <div class="resp-table-caption"></div>
                    <div class="resp-table">
                        <div class="resp-table-header">
                            <div class="table-header-cell">Provincia</div>
                            <div class="table-header-cell">Web</div>
                            <div class="table-header-cell">Contacto</div>
                            <div class="table-header-cell"></div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Ferrocarriles de la Generalitat Valenciana (FGV)</div>
                                <div class="table-body-cell peq"><a href="https://www.cgtfgv.es/">https://www.cgtfgv.es</a>
                                </div>
                                <div class="table-body-cell"><a href="mailto:cgtfgv@gmail.com">cgtfgv@gmail.com</a> // <a
                                        href="mailto:cursosoepfgv@gmail.com">cursosoepfgv@gmail.com</a></div>
                            </div>
                        </div>
                        <div class="resp-table-body">
                            <div class="resp-table-row">
                                <div class="table-body-cell">Ferrocarriles de la Generalitat Catalana (FGC)</div>
                                <div class="table-body-cell">-----</div>
                                <div class="table-body-cell"><a href="mailto:cgtfgc@gmail.com">cgtfgc@cgtferroviario.es</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</x-publico-layout>
