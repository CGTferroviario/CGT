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
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-2xl font-bold mb-4">Editar Slider</h2>
                        <form action="{{ route('sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Imagen actual:</label>
                                <img src="{{ asset('storage/' . $slider->image) }}" alt="Current Slider Image" class="w-64 h-40 object-cover mb-2">
                                <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="text" class="block text-gray-700 text-sm font-bold mb-2">Texto (opcional):</label>
                                <textarea name="text" id="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $slider->text }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="link" class="block text-gray-700 text-sm font-bold mb-2">Enlace:</label>
                                <input type="url" name="link" id="link" value="{{ $slider->link }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="active" class="inline-flex items-center">
                                    <input type="checkbox" name="active" id="active" class="form-checkbox h-5 w-5 text-blue-600" {{ $slider->active ? 'checked' : '' }}>
                                    <span class="ml-2 text-gray-700">Activo</span>
                                </label>
                            </div>
                            <div class="mb-4">
                                <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Fecha de inicio:</label>
                                <input type="date" name="start_date" id="start_date" value="{{ $slider->start_date ? $slider->start_date->format('Y-m-d') : '' }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">Fecha de fin:</label>
                                <input type="date" name="end_date" id="end_date" value="{{ $slider->end_date ? $slider->end_date->format('Y-m-d') : '' }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Actualizar Slider
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-privado-layout>