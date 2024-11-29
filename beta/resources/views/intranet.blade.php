<x-publico-layout>
    <h1 class="m-0 py-3 text-center bg-red-500 font-bold">{{ $eslogan?->frase }}</h1>
    <x-slider :sliders=$sliders></x-slider>
    <div class="pt-20 mx-auto grid gap-24 md:grid-cols-1 lg:grid-cols-2">
        <a href="{{ route('biblioteca.comunicados') }}" class="" target="_blank">
            <div class="tarjeta" id="comunicados" class="" title="Consulta nuestros comunicados"></div>
        </a>
        <a href="{{ route('etiquetas.show', ['slug' => 'ayudas-y-beneficios-sociales']) }}" class="" target="_blank">

            <div class="tarjeta" id="ayudas" class="" title="Toda la información de Ayudas Graciables y Beneficios Sociales"></div>
        </a>
        <div class="tarjeta" id="afiliate" class="" title="¡Afíliate con nosotros!">
            <a href="" class="">
            </a>
        </div>
        <a href="{{ url('https://www.comoserferroviario.es') }}" class="" target="_blank">
            <div class="tarjeta" id="plataforma" class="" title="Accede a nuestra plataforma de Estudio"></div>
        </a>
    </div>
</x-publico-layout>
