<x-publico-layout>

<h1 class="m-0 py-3 text-center bg-rojoBrillante font-bold">Si quieres que algo cambie...¡Elige CGT!</h1>
<div class="w-full p-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img class="d-block w-100" src="{{ asset('storage/' . $slider->image) }}" alt="Slide">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="https://fakeimg.pl/1920x800?font=lobster" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://fakeimg.pl/1920x800?font=lobster" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://fakeimg.pl/1920x800?font=lobster" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://fakeimg.pl/1920x800?font=lobster" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://fakeimg.pl/1920x800?font=lobster" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-red-600/30 group-hover:bg-white/50 dark:group-hover:bg-red-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-900/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-red-600/30 group-hover:bg-white/50 dark:group-hover:bg-red-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-900/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
<div class="w-4/5 mx-auto grid gap-4 grid-cols-2 grid-rows-2">
    <div class="col-md-6">
        <a href="{{ route('biblioteca.comunicados') }}" class="">
            <div class="tarjeta" id="comunicados" class="" title="Consulta nuestros comunicados"></div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="" class="">
            <div class="tarjeta" id="ayudas" class="" title="Toda la información de Ayudas Graciables y Beneficios Sociales"></div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="" class="">
            <div class="tarjeta" id="afiliate" class="" title="¡Afíliate con nosotros!"></div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="{{ url('http://www.comoserferroviario.es') }}" class="" target="_blank">
            <div class="tarjeta" id="plataforma" class="" title="Accede a nuestra plataforma de Estudio"></div>
        </a>
    </div>
</div>
</x-publico-layout>
