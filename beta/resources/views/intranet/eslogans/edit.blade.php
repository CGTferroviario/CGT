<x-privado-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Editar un eslogan') }}
        </h2>
    </x-slot>
    @section('contenido')
        <div class="p-8 fondo documentos">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-zinc-200">
                            <h2 class="text-2xl font-bold mb-4">{{ isset($eslogan) ? 'Editar' : 'Crear' }} Slogan</h2>
                            <form action="{{ isset($eslogan) ? route('intranet.eslogans.update', $eslogan) : route('intranet.eslogans.store') }}" method="POST">
                                @csrf
                                @if(isset($eslogan))
                                    @method('PUT')
                                @endif
                                <div class="grid grid-cols-2">
                                    <div class="mb-4">
                                        <label for="frase" class="block text-zinc-700 text-sm font-bold mb-2">Frase:</label>
                                        <input type="text" name="frase" id="frase" value="{{ $eslogan->frase ?? old('frase') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 leading-tight focus:outline-none focus:shadow-outline">
                                    </div>
                                    <div class="text-center">
                                        <label for="activo" class="block text-zinc-700 text-sm font-bold mb-2">Activo:</label>
                                        <label class="relative inline-flex items-center mt-2 cursor-pointer">
                                            <input type="checkbox" name="activo_toggle" id="activo_toggle" {{  ($eslogan->activo == 1 ? ' checked' : '') }} class="sr-only peer">
                                            <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-zinc-600 peer-checked:bg-red-600"></div>
                                        </label>
                                        {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                        <input type="hidden" id="activo" name="activo" value="{{ $eslogan->activo ? 1 : 0 }}">
                                    </div>
                                </div>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    {{ isset($eslogan) ? 'Actualizar' : 'Crear' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-privado-layout>