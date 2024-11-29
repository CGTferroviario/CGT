{{-- <div class="w-full h-full p-4">
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
    <div id="indicators-carousel" class="relative w-full h-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden h-[32rem] rounded-lg">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="img/slider/slider_quienessomos1980x800_1.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/slider/slider_quienessomos1980x800_2.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/slider/slider_quienessomos1980x800_3.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/slider/slider_quienessomos1980x800_4.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/slider/slider_quienessomos1980x800_5.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 -bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full bg-red-500 bordeRojo" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-red-500 bordeRojo" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-red-500 bordeRojo" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-red-500 bordeRojo" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-red-500 bordeRojo" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-red-600/30 group-hover:bg-white/50 dark:group-hover:bg-red-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-zinc-900/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-zinc-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Anterior</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-red-600/30 group-hover:bg-white/50 dark:group-hover:bg-red-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-zinc-900/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-zinc-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Siguiente</span>
            </span>
        </button>
    </div>
</div> --}}
{{-- <div class="mt-8 w-full h-[600px]">
    @foreach($sliders as $slider)
        <div class="">
            <a href="{{ $slider->enlace }}" class="block w-full h-full">
                <img src="{{ asset('storage/' . $slider->imagen) }}" alt="Slider Image" class="w-full h-full object-cover">
                @if($slider->descipcion)
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <p class="text-white text-3xl font-bold text-center">{{ $slider->descripcion }}</p>
                    </div>
                @endif
            </a>


        </div>
    @endforeach
</div> --}}

<div class="w-full h-full p-4">
    <div id="enhanced-carousel" class="relative w-full h-[600px] overflow-hidden rounded-lg shadow-xl" data-carousel="static">
        <!-- Contenedor del Carousel -->
        <div class="relative h-full">
            @foreach($sliders as $slider)
                <div class="hidden duration-700 ease-in-out" data-carousel-item="{{ $loop->first ? 'active' : '' }}">
                    <a href="{{ $slider->enlace }}" class="block w-full h-full">
                        <img 
                            src="{{ asset('storage/' . $slider->imagen) }}" 
                            class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Slide Image"
                        >
                        @if($slider->descripcion)
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end justify-start p-8">
                                <div class="max-w-2xl">
                                    <p class="text-white text-3xl font-bold mb-2 transform translate-y-0 transition-transform duration-500 ease-out">
                                        {{ $slider->descripcion }}
                                    </p>
                                    <div class="h-1 w-20 bg-red-500 rounded-full"></div>
                                </div>
                            </div>
                        @endif
                    </a>
                </div>
            @endforeach
        </div>

        <!-- Indicadores -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            @foreach($sliders as $slider)
                <button 
                    type="button" 
                    class="w-3 h-3 rounded-full bg-white/50 hover:bg-red-500 transition-colors duration-300 {{ $loop->first ? 'bg-red-500' : '' }}" 
                    aria-current="{{ $loop->first ? 'true' : 'false' }}" 
                    aria-label="Slide {{ $loop->iteration }}" 
                    data-carousel-slide-to="{{ $loop->index }}"
                ></button>
            @endforeach
        </div>

        <!-- Controles -->
        <button 
            type="button" 
            class="absolute top-1/2 left-4 z-30 -translate-y-1/2 group focus:outline-none" 
            data-carousel-prev
        >
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:ring-opacity-30 transition-all duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Anterior</span>
            </span>
        </button>

        <button 
            type="button" 
            class="absolute top-1/2 right-4 z-30 -translate-y-1/2 group focus:outline-none" 
            data-carousel-next
        >
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:ring-opacity-30 transition-all duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Siguiente</span>
            </span>
        </button>
    </div>
</div>