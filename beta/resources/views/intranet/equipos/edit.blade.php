<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Equipo') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-zinc-900 hover:text-red-500" title="Volver a Equipo">
                        <i class="lni lni-arrow-left"></i>
                        <a href="{{ route('intranet.equipos.index') }}" class="">Volver al Índice de equipos</a>
                    </button>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-zinc-800">Editar Equipos</h2>
                    </div>
                </div>
            </div>
            <div class="w-full bg-zinc-800/70 rounded-lg">
                <div class="py-8 px-4 mx-auto">
                    <form action="{{ route('intranet.equipos.update', $equipo->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 sm:gap-6 mt-3">
                            <div class="">
                                <label for="tipo" class="block mb-2 text-sm font-medium text-white">Tipo</label>
                                <select name="tipo" class="w-full bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5">
                                    <option value="Secretariado Permanente" {{ $equipo->tipo == 'Secretariado Permanente' ? 'selected' : '' }}>Secretariado Permanente</option>
                                    <option value="Coordinación Territorial" {{ $equipo->tipo == 'Coordinación Territorial' ? 'selected' : '' }}>Coordinación Territorial</option>
                                    <option value="Responsables Empresas" {{ $equipo->tipo == 'Responsables Empresas' ? 'selected' : '' }}>Responsables Empresas</option>
                                    <option value="Coordinación ADIF" {{ $equipo->tipo == 'Coordinación ADIF' ? 'selected' : '' }}>Coordinación ADIF</option>
                                    <option value="Coordinación RENFE" {{ $equipo->tipo == 'Coordinación RENFE' ? 'selected' : '' }}>Coordinación RENFE</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="cargo" class="block mb-2 text-sm font-medium text-white">Cargo</label>
                                <input id="cargo" name="cargo" type="text" value="{{ $equipo->cargo }}" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Cargo en la organización">
                            </div>
                            <div class="">
                                <label for="usuario" class="block mb-2 text-sm font-medium text-white">Usuario</label>
                                <input id="usuario" name="usuario" type="text" value="{{ $equipo->usuario }}" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="Pepito Pérez"></input>
                            </div>
                            <div class="">
                                <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                                <input id="email" name="email" type="email" value="{{ $equipo->email }}" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="ejemplo@ejemplo.com"></input>
                            </div>
                        </div>
                        <button type="submit" class="bg-red-500 w-full items-center px-5 py-2.5 mt-8 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-900 hover:bg-green-500">Actualizar Equipo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
</x-privado-layout>