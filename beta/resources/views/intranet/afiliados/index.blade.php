<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-zinc-900 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="inline-flex overflow-hidden text-white divide-x rounded-lg rtl:flex-row-reverse">
                        <button class="px-3 py-2 text-xs font-medium text-black transition-colors duration-200 bg-red-500 sm:text-sm">
                            Todas
                        </button>
                        <button class="px-3 py-2 text-xs font-medium bg-oscuro transition-colors duration-200 sm:text-sm hover:bg-red-500 hover:text-zinc-900" title="Usuarios en activo">
                            Activas
                        </button>
                        <button class="px-3 py-2 text-xs font-medium bg-oscuro transition-colors duration-200 sm:text-sm hover:bg-red-500 hover:text-black" title="Usuarios que pueden subir comunicados">
                            Comunicados
                        </button>
                    </div>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <x-mensaje></x-mensaje>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-zinc-800">Usuarios</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $users->count() }}</span>
                        <p class="mt-1 text-sm text-zinc-500">Estas son las usuarias que tenemos registradas.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    <div class="flex items-center gap-x-3 align-middle">
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-zinc-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-zinc-900 hover:text-red-500" title="Añadir un nuevo usuario">
                            <i class="lni lni-apartment"></i>
                            <a href="{{ route('intranet.usuarios.create') }}" class="">Añadir usuario</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-flow-col auto-cols-max">
                <div class="sm:flex sm:items-center sm:justify-start">
                    <table id="comunicadosAdmin" class="display nowrap text-sm pt-5 font-normal" style="width:auto">
                        <thead class="bg-oscuro text-white">
                            <tr class="">
                                <th class="rounded-tl-lg">ID</th>
                                <th>Acciones</th>
                                <th>Nombre</th>                        
                                <th>Email</th>
                                <th>Ult. Login</th>
                                <th class="rounded-tr-lg">Ult. Logout</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <div class="flex justify-start gap-1 text-xl mt-2">
                                        <a x-data="{ tooltip: 'Edite' }" href="{{ url('users.edit', $user->id) }}"
                                            class="text-zinc-800 hover:bg-zinc-500 hover:text-white p-1 rounded-lg h-8" title="Resetear usuario">
                                            <i class="lni lni-unlock"></i>
                                        </a>
                                        <a x-data="{ tooltip: 'Edite' }" href="{{ url('users.edit', $user->id) }}"
                                            class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar usuario">
                                            <i class="lni lni-pencil"></i>
                                        </a>                                
                                        <form method="POST" action="{{ route('intranet.usuarios.destroy', $user->id) }}" onsubmit="return confirm('¿Deseas eliminar esta usuario?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" p-1 rounded-md">
                                                <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar usuario" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                                    <i class="lni lni-trash-can"></i>
                                                </a>
                                            </button>
                                        </form>                                
                                    </div>
                                </td>
                                <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-red-300 text-red-900">{{ $user->nombre }}</span></td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">{{ $user->last_login }}</td>
                                <td class="text-center">{{ $user->last_logout }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="sm:flex sm:items-center sm:justify-between">
                    {{-- <h1>Hola</h1> --}}
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    {{-- <h1>Hola</h1> --}}
                </div>
            </div>
            
        </div>
    </div>
    @endsection
    
</x-privado-layout>