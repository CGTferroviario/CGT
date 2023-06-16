<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('admin.users.index') }}" class="px-4 py-2 text-white hover:text-black bg-green-700 hover:bg-green-500 rounded-md">Página de Roles</a>
                </div>
                <!-- component -->
                <div class="flex flex-col">
                    <div class="">
                        {{ $user->name }}
                    </div>
                    <div class="">
                        {{ $user->email }}
                    </div>
                    {{-- <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('admin.roles.update', $role->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Tipo de Rol </label>
                                <div class="mt-1">
                                    <input type="text" id="name" name="name"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
                                        value="{{ $role->name }}"/>
                                </div>
                                @error('name')
                                    <span class="text-red-400 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Actualizar</button>
                            </div>
                        </form>
                    </div> --}}
                </div>
                <div class="mt-6 p-2">
                    <h2 class="text-2xl font-semibold">Role users</h2>
                    <div class="flex space-x-2 mt-6">
                        @if ($user->permissions)
                            @foreach ($user->permissions as $user_permission)
                            <form method="POST" action="{{ route('admin.roles.users.revoke', [$user->id, $user_permission->id]) }}"  class="bg-red-300 hover:bg-red-500 p-1 rounded-md" onsubmit="return confirm('¿Estás seguro?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hover:bg-red-500 p-1 rounded-md">{{ $user_permission->name }}</button>
                            </form>                                
                            @endforeach
                        @endif
                    </div>
                    <div> 
                        <form method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <div class="sm:col-span-3">
                                    <label for="user" class="block text-sm font-medium leading-6 text-gray-900">Permisos</label>
                                    <div class="mt-2">
                                        <select id="user" name="user" autocomplete="user-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('name')
                                    <span class="text-red-400 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-6 p-2">
                    <h2 class="text-2xl font-semibold">Roles</h2>
                    <div class="flex space-x-2 mt-6 mb-6">
                        @if ($user->roles)
                            @foreach ($user->roles as $user_role)
                            <form method="POST" action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}"  class="bg-red-300 hover:bg-red-500 p-1 rounded-md" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hover:bg-red-500 p-1 rounded-md">{{ $user_role->name }}</button>
                            </form>                                
                            @endforeach
                        @endif
                    </div>
                    <div>
                        <form method="POST" action="{{ route('admin.users.roles', $user->id) }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <div class="sm:col-span-3">
                                    <label for="user" class="block text-sm font-medium leading-6 text-gray-900">Permisos</label>
                                    <div class="mt-2">
                                        <select id="role" name="role" autocomplete="role-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('role')
                                    <span class="text-red-400 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>