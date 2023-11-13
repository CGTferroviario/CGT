<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Equipo') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500" title="Volver a Equipo">
                        <i class="lni lni-arrow-left"></i>
                        <a href="{{ route('intranet.equipos.index') }}" class="">Volver al Índice de equipos</a>
                    </button>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-gray-800">Equipos</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $equipos->count() }}</span>
                        <p class="mt-1 text-sm text-gray-500">Estas son las equipos que tenemos registradas.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-3 bg-oscuro-7 rounded-lg">
                    <div class="py-8 px-4 mx-auto">
                        <h2 class="mb-4 text-xl font-bold text-white text-center">Añadir Equipo</h2>
                        <form action="{{ route('intranet.equipos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 sm:gap-6 mt-3">
                                <div class="">
                                    <label for="tipo" class="block mb-2 text-sm font-medium text-white">Tipo</label>
                                    <select name="tipo" class="w-full bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5">
                                        <option value="Secretariado Permanente">Secretariado Permanente</option>
                                        <option value="Coordinación Territorial">Coordinación Territorial</option>
                                        <option value="Responsables Empresas">Responsables Empresas</option>
                                        <option value="Coordinación ADIF">Coordinación ADIF</option>
                                        <option value="Coordinación RENFE">Coordinación RENFE</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label for="cargo" class="block mb-2 text-sm font-medium text-white">Cargo</label>
                                    <input id="cargo" name="cargo" type="text" class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Cargo en la organización">
                                </div>
                                <div class="">
                                    <label for="usuario" class="block mb-2 text-sm font-medium text-white">Usuario</label>
                                    <input id="usuario" name="usuario" type="text" class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Pepito Pérez"></input>
                                </div>
                                <div class="">
                                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                                    <input id="email" name="email" type="email" class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="ejemplo@ejemplo.com"></input>
                                </div>
                            </div>
                            <button type="submit" class="bg-red-500 w-full items-center px-5 py-2.5 mt-8 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-900 hover:bg-green-500">Añadir Equipo</button>
                        </form>
                    </div>
                </div>
                <div class="bg-oscuro-7 rounded-lg p-4">
                    <h1 class="rojoBrillante text-lg text-center">Equipos Ferroviarias</h1>
                    @foreach ($equipos as $equipo)
                        <p class="text-white">
                            {{ $equipo->nombre }}
                        </p>
                        
                    @endforeach
                    
                </div>
            </div>
            
        </div>
    </div>
    @endsection
    
</x-privado-layout>