<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Categorias') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-zinc-900 hover:text-red-500" title="Volver a Categorias">
                        <i class="lni lni-arrow-left"></i>
                        <a href="{{ route('intranet.categorias.index') }}" class="">Volver al Índice de categorias</a>
                    </button>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-zinc-800">Categorias</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $categorias->count() }}</span>
                        <p class="mt-1 text-sm text-zinc-500">Estas son las categorias que tenemos registradas.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-3 bg-oscuro-7 rounded-lg">
                    <div class="py-8 px-4 mx-auto">
                        <h2 class="mb-4 text-xl font-bold text-white text-center">Editar Categoria</h2>
                        <form action="{{ route('intranet.categorias.update', $categoria->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-4 gap-4">
                                <div class="col-span-3">
                                    <div class="grid gap-4 sm:grid-cols-5 sm:gap-6 mt-3">
                                        <div class="col-span-2">
                                            <label for="nombre" class="block mb-2 text-sm font-medium text-white">Nombre</label>
                                            <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}" class="w-full bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400" placeholder="" value="" required="">
                                        </div>
                                        <div class="text-center">
                                            <label for="activa" class="block mb-2 text-sm font-medium text-white">Activa</label>
                                            <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                                <input type="checkbox" name="activa_toggle" id="activa_toggle" {{  ($categoria->activa == 1 ? ' checked' : '') }} class="sr-only peer">
                                                <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-zinc-600 peer-checked:bg-red-600"></div>
                                            </label>
                                            {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                            <input type="hidden" id="activa" name="activa" value="0">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <button type="submit" class="bg-red-500 w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-900 hover:bg-green-500">Editar Categoría</button>
                            <button class="w-100 btn btn-outline-danger btn-lg" type="submit"></button>
                        </form>
                    </div>
                </div>
                <div class="bg-oscuro-7 rounded-lg p-4">
                    <h1 class="rojoBrillante text-lg text-center">Categorías</h1>
                    @foreach ($categorias as $categoria)
                        <p class="text-white">
                            {{ $categoria->nombre }}
                        </p>
                        
                    @endforeach
                </div>
            </div>            
        </div>
    </div>
    @endsection
    
</x-privado-layout>