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
                    {{-- <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-red-500 transition-colors duration-200 bg-oscuro bordeRojo rounded-lg gap-x-2 sm:w-auto hover:bg-red-500 hover:text-grey-900">
                        <i class="fa-solid fa-file-import"></i>
                        <span>Importar CSV</span>
                    </button> --}}
                    <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500">
                        <i class="fa-solid fa-circle-plus"></i>
                        <a href="{{ route('admin.permissions.index') }}" class="">Volver a Permisos</a>
                    </button>
                </div>
            </div>
            <h1 class="">PERMISOS</h1>
            <div class="">
                <form method="POST" action="{{ route('admin.permissions.store') }}">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="name" class="block">Permisos</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name">
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-gray-900 hover:text-red-500 rounded-md">Añadir Permisos</button>
                    </div>
                </form>
            </div>
            <table id="example" class="display" style="width:100%">
                <thead class="">
                    <tr>
                        <th>Perfil</th>
                        <th>Número</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-blue-300">{{ $permission->name }}</span></td>
                        <td>{{ $permission->count() }}</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
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
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    @endsection
</x-admin-layout>