<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Crear un nuevo eslogan') }}
        </h2>
    </x-slot>

    @section('contenido')
        <div class="p-8 fondo documentos">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h2 class="text-2xl font-bold mb-4">{{ isset($eslogan) ? 'Editar' : 'Crear' }} Slogan</h2>
                            <form action="{{ isset($eslogan) ? route('intranet.eslogans.update', $eslogan) : route('intranet.eslogans.store') }}" method="POST">
                                @csrf
                                @if(isset($eslogan))
                                    @method('PUT')
                                @endif
                                <div class="mb-4">
                                    <label for="frase" class="block text-gray-700 text-sm font-bold mb-2">Frase:</label>
                                    <input type="text" name="frase" id="frase" value="{{ $eslogan->frase ?? old('frase') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
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