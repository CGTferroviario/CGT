
<x-admin-layout>
    @section('contenido')
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Area de Afiliados') }}
        </h2>
    </x-slot> --}}
    <div class="px-20">
        <div class="col-md-12 p-4 mt-4 bordeRojo bg-blanco-transp rounded-md">
            <div class="mb-4 sm:flex sm:items-center sm:justify-end">
                <div class="flex items-center mt-4 gap-x-3">
                    <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500">
                        <i class="fa-solid fa-circle-plus"></i>
                        <a href="{{ route('admin.roles.create') }}" class="">Añadir Perfil</a>
                    </button>
                </div>
            </div>
            <table id="example" class="display" style="width:100%">
                <thead class="">
                    <tr>
                        <th>Perfil</th>
                        <th>Número</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-blue-300">{{ $role->name }}</span></td>
                        <td>{{ $role->count() }}</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                
                                <form method="POST" action="{{ route('admin.roles.destroy', $role->id) }}" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="hover:bg-red-500 p-1 rounded-md">
                                        <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar Rol">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                            </svg>
                                        </a>
                                    </button>
                                </form>
                                <a x-data="{ tooltip: 'Edite' }" href="{{ route('admin.roles.edit', $role->id) }}"
                                    class="hover:bg-green-500 p-1 rounded-md" title="Editar Rol">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                        x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                        {{-- <td>{{ $empresa->gestion_vales }}</td> --}}
                        {{-- <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-{{ $empresa->empresa?->nombre }}">{{ $empresa->empresa?->nombre }}</span></td>
                        <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-{{ $empresa->categoria?->nombre }}">{{ $empresa->categoria?->nombre }}</span></td> --}}
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Perfil</th>
                        <th>Número</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    @endsection
</x-admin-layout>
