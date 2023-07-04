@guest
<div class="w-full max-w-sm p-4 bg-oscuro bordeRojo rounded-lg shadow sm:p-6 md:p-8">
    <form class="space-y-6" action="{{ route('login') }}">
        @csrf
        <h5 class="text-xl font-medium rojoBrillante">Accede a tu Área de Afiliado</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
            <input type="email" name="email" id="email" class="border text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 bg-gray-600 border-red-500 placeholder-gray-400 text-white" placeholder="usuario@email.com" required>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-white">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="border text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 bg-gray-600 border-red-500 placeholder-gray-400 text-white" required>
        </div>
        <div class="flex items-start">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-red-500 text-red-500 focus:ring-1 focus:ring-red-500 ring-offset-gray-800 focus:ring-offset-gray-800" required>
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-red-500">Recuérdame</label>
            </div>
            <a href="#" class="ml-auto text-sm text-red-500 hover:underline">¿Olvidaste tu Contraseña?</a>
        </div>
        <button type="submit" class="w-full text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Acceder</button>
        <div class="text-sm font-medium text-gray-500">
            ¿No estás registrado? <a href="#" class="text-red-700 hover:underline">Crear Usuario</a>
        </div>
    </form>
</div>
@else
<div class="hidden sm:flex sm:items-center sm:ml-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                <div>{{ Auth::user()->name }}</div>

                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>
{{-- <li class="nav-item dropdown-menu-dark p-3">
    <span class="inline">
        Bienvenid@, {{ Auth::user()->name }}
    </span><br>
    <h6>
        Accede a tu <a href="/home">Panel de Afiliado</a>
    </h6>
    <hr>
    <span><a href="#" class="enlace">Comunicados</a></span>
        <div class="btn-group">
        <a href="#" class="btn btn-outline-secondary">Editar</a>
        <a href="#" class="btn btn-outline-info">Añadir</a>
        </div>
    <span><a href="#" class="enlace">Etiquetas</a></span><a href="#" class="btn btn-outline-secondary ml-2">Editar</a><a href="#" class="btn btn-outline-info ml-2">Añadir</a>
    <span><a href="#" class="enlace">Categorias</a></span><a href="#" class="btn btn-outline-secondary ml-2">Editar</a><a href="#" class="btn btn-outline-info ml-2">Añadir</a>
    <span><a href="#" class="enlace">Empresas</a></span><a href="#" class="btn btn-outline-secondary ml-2">Editar</a><a href="#" class="btn btn-outline-info ml-2">Añadir</a>

    <div class="inline dcha">
        <button class="btn btn-outline-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </button>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li> --}}
@endguest