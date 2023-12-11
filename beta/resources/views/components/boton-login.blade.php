<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
    class="font-medium px-4 py-2.5 text-center bg-oscuro text-red-500 border border-red-500 hover:bg-red-500 hover:text-black p-2 rounded-lg text-sm focus:ring-2 focus:outline-none focus:ring-red-500"
    type="button">ÁREA Afiliad@s <i class="lni lni-chevron-down ml-1 mt-1 text-white"></i></button>
<!-- Dropdown menu -->
<div id="dropdown" class="z-50 hidden divide-y rounded-lg shadow w-96 bg-oscuro">
    @guest
        <div class="w-full max-w-sm p-4 bg-oscuro bordeRojo rounded-lg shadow sm:p-6 md:p-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h5 class="text-xl font-medium rojoBrillante text-center">Accede a tu Área de Afiliad@</h5>
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Contraseña')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="inline-flex mt-4">
                    <label for="remember" class="inline-flex items-center">
                        <input id="remember" type="checkbox" class="rounded bg-gray-900 border-gray-700 text-red-600 shadow-sm focus:ring-red-500 focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm font-medium text-red-500">{{ __('Recuérdame') }}</span>
                    </label>
                </div>

                <div class="inline-flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-400 hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif

                    
                </div>
                <x-primary-button class="ml-3">
                    {{ __('Acceder') }}
                </x-primary-button>
            </form>
        </div>
        {{-- <div class="w-full max-w-sm p-4 bg-oscuro bordeRojo rounded-lg shadow sm:p-6 md:p-8">
            <form class="space-y-6" action="{{ route('login') }}">
                @csrf
                <h5 class="text-xl font-medium rojoBrillante">Accede a tu Área de Afiliado</h5>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                    <input type="email" name="email" id="email"
                        class="border text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 bg-gray-600 border-red-500 placeholder-gray-400 text-white"
                        placeholder="usuario@email.com" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-white">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="border text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 bg-gray-600 border-red-500 placeholder-gray-400 text-white"
                        required>
                </div>
                <div class="flex items-start">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-red-500 text-red-500 focus:ring-1 focus:ring-red-500 ring-offset-gray-800 focus:ring-offset-gray-800"
                                required>
                        </div>
                        <label for="remember" class="ml-2 text-sm font-medium text-red-500">Recuérdame</label>
                    </div>
                    <a href="#" class="ml-auto text-sm text-red-500 hover:underline">¿Olvidaste tu Contraseña?</a>
                </div>
                <button type="submit"
                    class="w-full text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Acceder</button>
                <div class="text-sm font-medium text-gray-500">
                    ¿No estás registrado? <a href="#" class="text-red-700 hover:underline">Crear Usuario</a>
                </div>
            </form>
        </div> --}}
    @else
        <div class="w-full max-w-sm p-4 bg-oscuro bordeRojo rounded-lg shadow sm:p-6 md:p-8">
            <div class="grid grid-cols-2 gap-2">
                <div class="align-middle">
                    <p class="text-white my-auto">
                        Bienvenid@, {{ Auth::user()->nombre }}
                    </p>
                </div>
                <div class="">
                    <button
                        class="font-medium px-5 py-2.5 text-center bg-oscuro text-red-500 border border-red-500 hover:bg-red-500 hover:text-black p-2 rounded-lg text-sm focus:ring-4 focus:outline-none focus:ring-black"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <div class="col-span-2 pt-2 text-center">
                    <h6 class="mb-2 text-white">Accede a tu <a href="{{ route('dashboard') }}"
                            class="text-red-500 hover:text-red-100">Panel de Afiliado</a></h6>
                </div>
                <hr class="col-span-2 bg-red-500">
                <div class="py-2">
                    <a href="{{ route('intranet.comunicados.index') }}" class="text-white">Comunicados</a>
                </div>
                <div class="py-2">
                    <a href="{{ route('intranet.comunicados.create') }}"
                        class="bg-oscuro text-red-500 border border-red-500 hover:bg-red-500 hover:text-black p-2 rounded-lg text-sm">Añadir</a>
                </div>
                <div class="py-2">
                    <a href="{{ route('intranet.noticias.index') }}" class="text-white">Noticias</a>
                </div>
                <div class="py-2">
                    <a href="{{ route('intranet.noticias.create') }}"
                        class="bg-oscuro text-red-500 border border-red-500 hover:bg-red-500 hover:text-black p-2 rounded-lg text-sm">Añadir</a>
                </div>
                <div class="py-2">
                    <a href="{{ route('intranet.documentos.index') }}" class="text-white">Documentos</a>
                </div>
                <div class="py-2">
                    <a href="{{ route('intranet.documentos.create') }}"
                        class="bg-oscuro text-red-500 border border-red-500 hover:bg-red-500 hover:text-black p-2 rounded-lg text-sm">Añadir</a>
                </div>
            </div>
        </div>
    @endguest
</div>
