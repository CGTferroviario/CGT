<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-zinc-900 leading-tight">
            {{ __('Crear Nueva Diapositiva') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-zinc-200">
                        <form action="{{ route('intranet.sliders.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="imagen" class="block text-zinc-700 text-sm font-bold mb-2">Imagen:</label>
                                <input type="file" name="imagen" id="imagen" class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="descripcion" class="block text-zinc-700 text-sm font-bold mb-2">Texto (opcional):</label>
                                <textarea name="descripcion" id="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="enlace" class="block text-zinc-700 text-sm font-bold mb-2">Enlace:</label>
                                <input type="url" name="enlace" id="enlace" class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="activo" class="inline-flex items-center">
                                    <input type="checkbox" name="activo" id="activo" class="form-checkbox h-5 w-5 text-red-600" checked>
                                    <span class="ml-2 text-zinc-700">Activo</span>
                                </label>
                            </div>
                            <div class="mb-4">
                                <label for="fecha" class="block text-zinc-700 text-sm font-bold mb-2">Fecha de inicio:</label>
                                <input type="date" name="fecha" id="fecha" class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Crear Slider
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            



            {{-- <form action="{{ route('intranet.sliders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="imagen">Image:</label>
                    <input type="file" class="form-control" id="imagen" name="imagen">
                </div>
                <button type="submit" class="p-2 bg-oscuro hover:bg-red-500 border border-red-500 rounded-lg">Añadir diapositiva</button>
            </form> --}}
        </div>
    </div>
    @endsection
</x-privado-layout>