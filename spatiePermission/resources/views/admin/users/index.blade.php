<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex justify-end">
                    <a href="{{ route('admin.users.index') }}" class="px-4 py-2 text-white hover:text-black bg-green-700 hover:bg-green-500 rounded-md">Crear Usuario</a>
                </div>
                <!-- component -->
                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Rol</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Equipo</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">{{ $user->name }}</td>
                                    <td class="px-6 py-4">{{ $user->email }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-2">
                                            @foreach ($roles as $role)
                                                <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">{{ $role->name }}</span>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-end gap-4">
                                            <a href="{{ route('admin.users.show', $user->id) }}" class="px-4 py-2 bg-blue-400 hover:bg-blue-700 text-white rounded-md"> Roles</a>
                                            <form method="POST" action="{{ route('admin.users.destroy', $role->id) }}" onsubmit="return confirm('Estás seguro?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="hover:bg-red-500 p-1 rounded-md">
                                                    <a x-data="{ tooltip: 'Delete' }" href="#">
                                                        <svg
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                                        </svg>
                                                    </a>
                                                </button>
                                            </form>
                                            <a x-data="{ tooltip: 'Edite' }" href="{{ route('admin.roles.edit', $role->id) }}" class="hover:bg-green-500 p-1 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                                    x-tooltip="tooltip">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>