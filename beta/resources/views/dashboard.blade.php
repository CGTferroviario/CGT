<x-privado-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>
    @section('contenido')
        <div class="p-4">
            <div class="p-4 border-2 border-dashed rounded-lg border-red-500">
                <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-4">
                    <div class="flex items-center justify-center h-24 rounded bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer">
                        <div class="py-2">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-oscuro overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 text-gray-900 dark:text-gray-100">
                                        {{ __("You're logged in!") }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 rounded bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer">
                        <img class="mt-20" src="/img/eslogan.png" alt="">
                        <h1 class="rojoBrillante text-3xl text-center my-2 titular">Cambiar Eslogan</h1>
                    </div>
                    <div class="p-4 rounded bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer">
                        <img class="mx-auto" src="/img/slider.png" alt="">
                        <h1 class="rojoBrillante text-3xl text-center my-2 titular">Cambiar Slider</h1>
                    </div>
                    <div class="p-4 rounded bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer">
                        <img class="mx-auto" src="/img/vales.png" alt="">
                        <h1 class="rojoBrillante text-3xl text-center my-2 titular">Vales Hora</h1>
                    </div>
                    <div class="p-4 rounded bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer align-middle">
                        <img class="mx-auto mt-32" src="/img/tren2.png" alt="">
                        <h1 class="rojoBrillante text-3xl text-center my-2 titular">Viajes de Servicio</h1>
                    </div>
                    <div class="p-4 rounded bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer">
                        <img class="mx-auto" src="/img/estadisticas.png" alt="">
                        <h1 class="rojoBrillante text-3xl text-center my-2 titular">Estadísticas</h1>
                    </div>
                    <div class="p-4 rounded bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer">
                        <img class="mx-auto" src="/img/EVA-JAC.png" alt="">
                        <h1 class="rojoBrillante text-3xl text-center my-2 titular">E . V . A .  -  Escuela Virtual Autogestionada  <br> <span title="Jose Antonio Cantarero">J . A . C .</span></h1>

                    </div>
                    
                    <div class="p-4 rounded bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer align-middle">
                        <img class="mx-auto" src="/img/inventory.png" alt="">
                        <h1 class="rojoBrillante text-3xl text-center my-2 titular">Inventario</h1>
                    </div>
                </div>
                <div class="flex items-center justify-center h-48 mb-4 rounded bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer   ">
                    <p class="text-2xl text-gray-500 hover:text-gray-100">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center justify-center rounded h-28 bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer">
                        <p class="text-2xl text-gray-500 hover:text-gray-100">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded h-28 bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer">
                        <p class="text-2xl text-gray-500 hover:text-gray-100">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded h-28 bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer">
                        <p class="text-2xl text-gray-500 hover:text-gray-100">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded h-28 bg-oscuro bordeRojo text-gray-500 hover:text-gray-100 cursor-pointer">
                        <p class="text-2xl text-gray-500 hover:text-gray-100">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 1v16M1 9h16" />
                            </svg>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    
</x-privado-layout>
