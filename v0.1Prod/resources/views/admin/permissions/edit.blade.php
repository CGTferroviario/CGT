<x-admin-layout>
@section('contenido')

<div class="container-fluid fondo teletrabajo">
    <div class="row">
        <h1 class="m-0 py-3 text-center bg-rojoBrillante font-bold">PERMISOS</h1>    
        <div class="px-20 pt-4">
            <div class="col-md-12 p-4 mt-2 bordeRojo bg-blanco-transp rounded-md">
                <div class="row">
                    <div class="col-md-8">
                        <div class="text-center py-2">
                            <h1 class="text-3xl rojoBrillante">EDITAR PERMISOS</h1>
                        </div>
                        <form method="POST" action="{{ route('admin.permissions.update', $permission->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row pb-3">
                                <div class="col-md-6">
                                    <label for="name" class="block">Permisos</label>
                                    <div class="mt-1">
                                        <input type="text" name="name" id="name" value="{{ $permission->name }}">
                                    </div>
                                    <label for="name" class="block">Descripción</label>
                                    <div class="mt-1">
                                        <input type="text" name="descripcion" id="descripcion" value="{{ $permission->descripcion }}">
                                    </div>
                                    <div class="sm:col-span-6 pt-5">
                                        <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </form>       
                    </div>
                    <div class="col-md-4">
                        <div class="flex items-center gap-x-3 justify-end">
                            <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500">
                                <i class="fa-solid fa-arrow-left"></i>
                                <a href="{{ route('admin.permissions.index') }}" class="">Volver a Permisos</a>
                            </button>
                        </div>
                    </div>
                </div>
                <table id="example" class="display" style="width:100%">
                    <thead class="">
                        <tr>
                            <th>Permisos</th>
                            <th>Descripción</th>
                            <th>Usuarios</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-blue-300">{{ $permission->name }}</span></td>
                            <td>{{ $permission->descripcion }}</td>
                            <td>{{ $permission->guard_name }}</td>
                            <td class="px-3 py-1">
                                <div class="flex justify-end gap-2 text-3xl">
                                    <a x-data="{ tooltip: 'Edite' }" href="{{ route('admin.permissions.edit', $permission->id) }}"
                                        class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-md" title="Editar Permiso">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>                                
                                    <form method="POST" action="{{ route('admin.permissions.destroy', $permission->id) }}" onsubmit="return confirm('¿Deseas eliminar este Permiso?');">
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
                    <tfoot>
                        <tr>
                            <th>Permisos</th>
                            <th>Descripción</th>
                            <th>Usuarios</th>
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
