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
                    <div class="rounded-lg bg-red-500 hover:bg-black cursor-pointer group">
                        <h1 class="mt-4 p-4 text-3xl text-white bg-black group-hover:bg-red-500 group-hover:text-black text-center titular2">¡Bienvenid@!</h1>
                        <img src="/img/intranet/usuario_sm.png" alt="" class="mx-auto pt-4">
                    </div>
                    <div class="rounded-lg bg-red-500 hover:bg-black cursor-pointer group">
                        <h1 class="mt-4 p-4 text-3xl text-white bg-black group-hover:bg-red-500 group-hover:text-black text-center titular2">Cambiar Eslogan</h1>
                        <img src="/img/intranet/slogan_sm.png" alt="" class="mx-auto pt-10">
                    </div>
                    <div class="rounded-lg bg-red-500 hover:bg-black cursor-pointer group">
                        <h1 class="mt-4 p-4 text-3xl text-white bg-black group-hover:bg-red-500 group-hover:text-black text-center titular2">Cambiar Slider</h1>
                        <img src="/img/intranet/slider_sm.png" alt="" class="mx-auto pt-4">
                    </div>
                    <div class="rounded-lg bg-red-500 hover:bg-black cursor-pointer group">
                        <h1 class="mt-4 p-4 text-3xl text-white bg-black group-hover:bg-red-500 group-hover:text-black text-center titular2">Vales Hora</h1>
                        <img src="/img/intranet/valesh_sm.png" alt="" class="mx-auto pt-4">
                    </div>
                    <div class="rounded-lg bg-red-500 hover:bg-black cursor-pointer group">
                        <h1 class="mt-4 p-4 text-3xl text-white bg-black group-hover:bg-red-500 group-hover:text-black text-center titular2">Viajes de Servicio</h1>
                        <img src="/img/intranet/viajes_sm.png" alt="" class="mx-auto pt-4">
                    </div>
                    <div class="rounded-lg bg-red-500 hover:bg-black cursor-pointer group">
                        <h1 class="mt-4 p-4 text-3xl text-white bg-black group-hover:bg-red-500 group-hover:text-black text-center titular2">Estadísticas</h1>
                        <img src="/img/intranet/estadisticas_sm.png" alt="" class="mx-auto pt-4">
                    </div>
                    <div class="rounded-lg bg-red-500 hover:bg-black cursor-pointer group">
                        <h1 class="mt-4 p-4 text-3xl text-white bg-black group-hover:bg-red-500 group-hover:text-black text-center titular2">Escuela Virtual Autogestionada</h1>
                        <img src="/img/intranet/escuela_sm.png" alt="" class="mx-auto pt-4">
                    </div>
                    <div class="rounded-lg bg-red-500 hover:bg-black cursor-pointer group">
                        <h1 class="mt-4 p-4 text-3xl text-white bg-black group-hover:bg-red-500 group-hover:text-black text-center titular2">Inventario</h1>
                        <img src="/img/intranet/inventario_sm.png" alt="" class="mx-auto pt-4">
                    </div>
                </div>                
            </div>
        </div>
    @endsection

    
</x-privado-layout>
