<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Empresas') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-zinc-900 hover:text-red-500" title="Volver a Empresas">
                        <i class="lni lni-arrow-left"></i>
                        <a href="{{ route('intranet.empresas.index') }}" class="">Volver al Índice de empresas</a>
                    </button>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-zinc-800">Empresas</h2>
                        {{-- <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $empresas->count() }}</span> --}}
                        <p class="mt-1 text-sm text-zinc-500">Estas son las empresas que tenemos registradas.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end"></div>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-3 bg-zinc-800/70 rounded-lg">
                    <div class="py-8 px-4 mx-auto">
                        <h2 class="mb-4 text-xl font-bold text-white text-center">Editar Empresa</h2>
                        <form action="{{ route('intranet.empresas.update', $empresa->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-4 gap-4">
                                <div class="col-span-3">
                                    <div class="grid gap-4 sm:grid-cols-5 sm:gap-6 mt-3">
                                        <div class="col-span-2">
                                            <label for="nombre" class="block mb-2 text-sm font-medium text-white">Nombre</label>
                                            <input type="text" name="nombre" id="nombre" value="{{ $empresa->nombre }}" class="w-full bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400" placeholder="" value="" required="">
                                        </div>
                                        <div class="text-center">
                                            <label for="comunicados" class="block mb-2 text-sm font-medium text-white">Comunicados</label>
                                            <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                                <input type="checkbox" name="comunicados_toggle" id="comunicados_toggle" {{  ($empresa->comunicados == 1 ? ' checked' : '') }} class="sr-only peer">
                                                <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-zinc-600 peer-checked:bg-red-600"></div>
                                            </label>                               
                                            {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                            <input type="hidden" id="comunicados" name="comunicados" value="{{ $empresa->comunicados ? 1 : 0 }}">
                                        </div>
                                        <div class="text-center">
                                            <label for="vales" class="block mb-2 text-sm font-medium text-white">Gestión Vales</label>
                                            <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                                <input type="checkbox" name="vales_toggle" id="vales_toggle" {{  ($empresa->vales == 1 ? ' checked' : '') }} class="sr-only peer">
                                                <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-zinc-600 peer-checked:bg-red-600"></div>
                                            </label>
                                            {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                            <input type="hidden" id="vales" name="vales" value="{{ $empresa->vales ? 1 : 0 }}">
                                        </div>
                                        <div class="text-center">
                                            <label for="activa" class="block mb-2 text-sm font-medium text-white">Activa</label>
                                            <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                                <input type="checkbox" name="activa_toggle" id="activa_toggle" {{  ($empresa->activa == 1 ? ' checked' : '') }} class="sr-only peer">
                                                <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-zinc-600 peer-checked:bg-red-600"></div>
                                            </label>
                                            {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                            <input type="hidden" id="activa" name="activa" value="{{ $empresa->activa ? 1 : 0 }}">
                                        </div>
                                        <div class="col-span-5">
                                            <label for="descripcion" class="block mb-2 text-sm font-medium text-white">Descripción</label>
                                            <textarea id="descripcion" name="descripcion" rows="5" class="block p-2.5 w-full text-left text-sm rounded-lg border bg-zinc-700 border-zinc-600 text-white focus:ring-red-500 focus:border-red-500">
                                                {{ old('descripcion', $empresa->descripcion) }}
                                            </textarea>
                                        </div>
                                    </div> 
                                </div>
                                <div class="mt-3">
                                    <label for="logo" class="block mb-2 text-sm font-medium text-white"><i class="lni lni-image text-md mr-2 mb-0"></i>Logotipo</label>
                                    
                                    <input type="file" id="logo" name="logo">
                                    @if ($empresa->logo)
                                        <img src="{{ asset('storage/' . $empresa->logo) }}" alt="Logo">
                                    @endif
                                    {{-- <label for="jpg" class="block mb-2 text-sm font-medium text-white"><i class="lni lni-image text-md mr-2 mb-0"></i>Logotipo</label>
                                    <label for="dropzone-file" class="!ml-0 flex flex-col items-center justify-center w-full h-56 border-2 border-dashed rounded-lg cursor-pointer bg-zinc-700 border-zinc-600 hover:border-red-500 hover:bg-zinc-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <i class="lni lni-cloud-upload text-3xl mb-2 text-zinc-400"></i>
                                            <p class="mb-2 text-sm text-zinc-400"><span class="font-semibold">Haz click o arrastra</span></p>
                                            <p class="text-xs text-zinc-400">para subir un fichero <span class="font-semibold">.JPG o .PNG</span></p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label> --}}
                                </div>
                            </div>
                            <button type="submit" class="bg-red-500 w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-900 hover:bg-green-500">Editar Empresa</button>
                            <button class="w-100 btn btn-outline-danger btn-lg" type="submit"></button>
                        </form>
                    </div>
                </div>
                <div class="bg-zinc-800/70 rounded-lg p-4">
                    <h1 class="rojoBrillante text-lg text-center">Empresas Ferroviarias</h1>
                    @foreach ($empresas as $empresa)
                        <p class="text-white">
                            {{ $empresa->nombre }}
                        </p>
                        
                    @endforeach
                    
                </div>
            </div>
            
        </div>
    </div>
    @endsection
    
</x-privado-layout>