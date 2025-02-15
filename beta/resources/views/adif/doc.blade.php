<x-publico-layout>
    {{-- <x-slot name="header">
        <div class="mx-auto py-3 px-2 sm:px-3 lg:px-4 text-center bg-adif">
            <h2 class="font-semibold text-xl text-white leading-tight titular">
                {{ __('Documentación General ADIF') }}
            </h2>
        </div>
    </x-slot> --}}
    @section('contenido')
    <h1 class="m-0 py-3 text-center bg-adif font-bold leading-tight titular">Documentación General ADIF</h1>
    <div class="fondo documentacion adif">
        <div class="pt-20 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 space-x-2">
            <div class="">
                <a href="{{ url('/adif/doc/afiliacion') }}" class="">
                    <div class="tarjetaRenfe" id="doc_afiliacion" class="" title="Toda la documentación relativa a la Afiliación"></div>
                </a>
            </div>
            <div class="">
                <a href="{{ url('/adif/doc/ayudas') }}" class="">
                    <div class="tarjetaRenfe" id="doc_ayudas" class="" title="Toda la información de Ayudas Graciables y Beneficios Sociales"></div>
                </a>
            </div>
            <div class="">
            <a href="{{ url('/adif/doc/igualdad') }}" class="">
                <div class="tarjetaRenfe" id="doc_igualdad" class="" title="Toda la información de Igualdad"></div>
            </a>
            </div>
            <div class="">
                <a href="{{ url('/adif/doc/legislacion') }}" class="">
                    <div class="tarjetaRenfe" id="doc_legislacion" class="" title="Documentación relativa a legislación vigente"></div>
                </a>
            </div>
            <div class="">
                <a href="{{ url('/adif/doc/licencias') }}" class="">
                    <div class="tarjetaRenfe" id="doc_licencias" class="" title="Toda la documentación para solicitar licencias"></div>
                </a>
            </div>
            <div class="">
            <a href="{{ url('/adif/doc/mapa') }}" class="">
                <div class="tarjetaRenfe" id="doc_mapa" class="" title="Los mapas actualizados de estaciones y trenes"></div>
            </a>
            </div>
            <div class="">
                <a href="{{ url('/adif/doc/conciliacion') }}" class="">
                    <div class="tarjetaRenfe" id="doc_conciliacion" class="" title="Documentación relativa a la conciliación familiar"></div>
                </a>
            </div>
            <div class="">
                <a href="{{ url('/adif/doc/modelos') }}" class="">
                    <div class="tarjetaRenfe" id="doc_modelos" class="" title="Todos los modelos disponibles"></div>
                </a>
            </div>
            <div class="">
            <a href="{{ url('/adif/doc/protocolos') }}" class="">
                <div class="tarjetaRenfe" id="doc_protocolos" class="" title="Los protocolos de acoso sexual y laboral"></div>
            </a>
            </div>
            <div class="">
                <a href="{{ url('/adif/doc/salud') }}" class="">
                    <div class="tarjetaRenfe" id="doc_salud" class="" title="Documentación relativa a salud laboral"></div>
                </a>
            </div>
            <div class="">
                <a href="{{ url('/adif/doc/teletrabajo') }}" class="">
                    <div class="tarjetaRenfe" id="doc_teletrabajo" class="" title="Toda la documentación relativa al teletrabajo"></div>
                </a>
            </div>
            <div class="">
            <a href="{{ url('/adif/doc/tablas') }}" class="">
                <div class="tarjetaRenfe" id="doc_tablas" class="" title="Las últimas tablas salariales actualizadas"></div>
            </a>
            </div>
        </div>
    </div>
    @endsection
</x-publico-layout>