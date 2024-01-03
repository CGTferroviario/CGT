<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">Editar Sección</h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-zinc-900 hover:text-red-500" title="Volver a Seccion">
                        <i class="lni lni-arrow-left"></i>
                        <a href="{{ route('intranet.seccions.index') }}" class="">Volver al Índice de secciones</a>
                    </button>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-zinc-800">Secciones</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $seccions->count() }}</span>
                        <p class="mt-1 text-sm text-zinc-500">Estas son las secciones que tenemos registradas.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-3 bg-oscuro-7 rounded-lg">
                    <div class="py-8 px-4 mx-auto">
                        <form action="{{ route('intranet.seccions.update', $seccion->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @if ($errors->any())
                                <div class="p-4 mb-2 bordeRojo rounded-lg bg-red-200 text-sm text-red-500">
                                    <ul class="pl-4 list-disc">
                                        @foreach ($errors->all() as $error)
                                        <li class="">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 sm:gap-6 mt-3">
                                <div class="">
                                    <label for="nombre" class="block mb-2 text-sm font-medium text-white">Nombre</label>
                                    <input id="nombre" name="nombre" type="text" value="{{old('nombre', $seccion->nombre)}}" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Nombre Sección">
                                </div>
                                <div class="">
                                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                                    <input id="email" name="email" type="email" value="{{old('email', $seccion->email)}}" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="ejemplo@ejemplo.com"></input>
                                </div>
                                <div class="">
                                    <label for="email2" class="block mb-2 text-sm font-medium text-white">Email secundario</label>
                                    <input id="email2" name="email2" type="email" value="{{old('email2', $seccion->email2)}}" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="ejemplo2@ejemplo.com"></input>
                                </div>
                                <div class="">
                                    <label for="telefono" class="block mb-2 text-sm font-medium text-white">Teléfono</label>
                                    <input id="telefono" name="telefono" type="text" value="{{old('telefono', $seccion->telefono)}}" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="666 887766"></input>
                                </div>
                                <div class="col-span-2">
                                    <label for="direccion" class="block mb-2 text-sm font-medium text-white">Dirección</label>
                                    <input id="direccion" name="direccion" type="text" value="{{old('direccion', $seccion->direccion)}}" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Avda. Ciudad de Barcelona 10 Sotano 2"></input>
                                </div>
                                <div class="col-span-2">
                                    <label for="descripcion" class="block mb-2 text-sm font-medium text-white">Descripción</label>
                                    <input id="descripcion" name="descripcion" type="text" value="{{old('descripcion', $seccion->descripcion)}}" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Esta sección se ocupa de..."></input>
                                </div>
                                <div class="col-span-1">
                                    <label for="responsable" class="block mb-2 text-sm font-medium text-white">Responsable</label>
                                    <input id="responsable" name="responsable" type="text" value="{{old('responsable', $seccion->responsable)}}" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Esta sección se ocupa de..."></input>
                                </div>
                                <div class="col-span-3">
                                    <x-forms.lugar-edit :tipo=$seccion :ccaas=$ccaas :provincias=$provincias :municipios=$municipios></x-forms.lugar>
                                </div>
                            </div>
                            <button type="submit" class="bg-red-500 w-full items-center px-5 py-2.5 mt-8 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-900 hover:bg-green-500">Editar Sección</button>
                        </form>
                    </div>
                </div>
                <div class="bg-oscuro-7 rounded-lg p-4">
                    <h1 class="rojoBrillante text-lg text-center">Secciones Ferroviarias</h1>
                    @foreach ($seccions as $seccion)
                        <p class="text-white">
                            {{ $seccion->nombre }}
                        </p>
                        
                    @endforeach
                    
                </div>
            </div>
            
        </div>
    </div>
    @endsection
    
</x-privado-layout>