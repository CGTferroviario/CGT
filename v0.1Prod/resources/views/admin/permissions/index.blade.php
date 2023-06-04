<x-admin-layout>
@section('contenido')
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Area de Afiliados') }}
        </h2>
    </x-slot> --}}
<div class="container-fluid fondo teletrabajo">
    <div class="row">
        <h1 class="m-0 py-3 text-center cabecera font-bold">PERMISOS</h1>       
        <div class="px-20 pt-4">
            <div class="col-md-12 p-4 mt-4 bordeRojo bg-blanco-transp rounded-md">
                <div class="mb-4 sm:flex sm:items-center sm:justify-end">
                    <div class="flex items-center mt-2 gap-x-3">
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500">
                            <i class="fa-solid fa-circle-plus"></i>
                            <a href="{{ route('admin.permissions.create') }}" class="">Añadir Permisos</a>
                        </button>
                    </div>
                </div>
                <table id="example" class="display rounded-md" style="width:100%">
                    <thead class="bg-oscuro text-white">
                        <tr>
                            <th>Permisos</th>
                            <th>Descripción</th>
                            <th>Asignados a</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-dark text-red-500">{{ $permission->name }}</span></td>
                            <td>{{ $permission->descripcion }}</td>
                            <td>{{ $permission->guard_name }}</td>
                            <td class="px-3 py-1">
                                <div class="flex justify-end gap-2 text-3xl">
                                    <a x-data="{ tooltip: 'Edite' }" href="{{ route('admin.permissions.edit', $permission->id) }}"
                                        class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-md" title="Editar Permiso">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>                                
                                    <form method="POST" action="{{ route('admin.permissions.destroy', $permission->id) }}" onsubmit="return confirm('¿Deseas eliminar este comunicado?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-md">
                                            <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar Permiso">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="bg-oscuro text-white">
                        <tr>
                            <th>Permisos</th>
                            <th>Descripción</th>
                            <th>Asignados a</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
</x-admin-layout>