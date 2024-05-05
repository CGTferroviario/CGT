<x-publico-layout>

@section('contenido')
<h1 class="m-0 py-3 font-semibold text-lg text-center text-zinc-900 bg-red-500 leading-tight titular">CONTACTO</h1>
<section class="fondo modelos">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-zinc-900 dark:text-white">Escríbenos</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-zinc-500 dark:text-zinc-400 sm:text-xl">Si tienes cualquier duda y demás</p>
        @if(Session::has('success'))
        <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-zinc-500 bg-white rounded-lg shadow dark:text-zinc-400 dark:bg-zinc-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                <i class="lni lni-spellcheck"></i>
                <span class="sr-only">Fire icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">{{Session::get('success')}}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-zinc-400 hover:text-zinc-900 rounded-lg focus:ring-2 focus:ring-zinc-300 p-1.5 hover:bg-zinc-100 inline-flex h-8 w-8 dark:text-zinc-500 dark:hover:text-white dark:bg-zinc-800 dark:hover:bg-zinc-700" data-dismiss-target="#toast-default" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        @endif
        <form method="POST" form action="{{ route('equipo.contacto.store') }}" class="space-y-8" id="contactoForm">
            {{ csrf_field() }}
            <div>
                <label for="nombre" class="block mb-2 text-sm font-bold text-zinc-900 dark:text-zinc-300">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Nombre"  value="{{ old('nombre') }}" required>
                @if ($errors->has('nombre'))
                    <span class="text-red-500">{{ $errors->first('nombre') }}</span>
                @endif
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-bold text-zinc-900 dark:text-zinc-300">Email:</label>
                <input type="email" id="email" name="email" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="text-red-500">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div>
                <label for="telefono" class="block mb-2 text-sm font-bold text-zinc-900 dark:text-zinc-300">Telefono:</label>
                <input type="phone" id="telefono" name="telefono" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Telefono" value="{{ old('telefono') }}" required>
                @if ($errors->has('telefono'))
                    <span class="text-red-500">{{ $errors->first('telefono') }}</span>
                @endif
            </div>
            <div>
                <label for="nombre" class="block mb-2 text-sm font-bold text-zinc-900 dark:text-zinc-300">Asunto:</label>
                <input type="text" id="asunto" name="asunto" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Asunto"  value="{{ old('asunto') }}" required>
                @if ($errors->has('asunto'))
                    <span class="text-red-500">{{ $errors->first('asunto') }}</span>
                @endif
            </div>
            <div class="w-auto">
                <label for="mensaje" class="block mb-2 text-sm font-bold text-zinc-900 dark:text-zinc-400">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="6" class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg shadow-sm border border-zinc-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Escríbenos...">{{ old('mensaje') }}</textarea>
                @if ($errors->has('mensaje'))
                    <span class="text-red-500">{{ $errors->first('mensaje') }}</span>
                @endif
            </div>
            <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-red-700 sm:w-fit hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Enviar mensaje</button>
        </form>
    </div>
</section>
@endsection
</x-publico-layout>