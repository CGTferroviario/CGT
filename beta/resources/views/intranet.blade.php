<x-publico-layout>
    <h1 class="m-0 py-3 text-center bg-rojoBrillante font-bold">Si quieres que algo cambie...¡Elige CGT!</h1>
    <x-slider :sliders=$sliders></x-slider>
    <div class="pt-20 mx-auto grid gap-24 md:grid-cols-1 lg:grid-cols-2">
        <div class="tarjeta" id="comunicados" class="" title="Consulta nuestros comunicados">
            <a href="{{ route('biblioteca.comunicados') }}" class=""></a>
        </div>
        <div class="tarjeta" id="ayudas" class="" title="Toda la información de Ayudas Graciables y Beneficios Sociales">
            <a href="" class="">
            </a>
        </div>
        <div class="tarjeta" id="afiliate" class="" title="¡Afíliate con nosotros!">
            <a href="" class="">
            </a>
        </div>
        <div class="tarjeta" id="plataforma" class="" title="Accede a nuestra plataforma de Estudio">
            <a href="{{ url('http://www.comoserferroviario.es') }}" class="" target="_blank">
            </a>
        </div>
    </div>
</x-publico-layout>
