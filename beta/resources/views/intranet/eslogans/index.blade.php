<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight titular">
            {{ __('Eslogans') }}
        </h2>
    </x-slot>

    @section('contenido')
        <div class="p-8 fondo comunicados">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-zinc-200">
                            <a href="{{ route('intranet.eslogans.create') }}" class="bg-red-500 hover:bg-zinc-800 text-white hover:text-red-500 font-bold py-2 px-4 rounded">Crear nuevo eslogan</a>
                            <table class="mt-4 w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Frase</th>
                                        <th class="px-4 py-2">Activo</th>
                                        <th class="px-4 py-2">Fecha</th>
                                        <th class="px-4 py-2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($eslogans as $eslogan)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $eslogan->frase }}</td>
                                        <td class="border px-4 py-2 text-center">
                                            <label class="relative inline-flex items-center mt-2 cursor-not-allowed">
                                                <input type="checkbox" name="" id="" {{  ($eslogan->activo == 1 ? ' checked' : '') }} disabled class="sr-only peer">
                                                <div class="w-11 h-6 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-800 bg-zinc-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all border-zinc-600 peer-checked:bg-red-600"></div>
                                            </label>
                                            {{-- Input oculto que se usa para convertir el valor on/off en binario --}}
                                            <input type="hidden" id="" name="" value="{{ $eslogan->activo ? 1 : 0 }}">
                                        </td>
                                        {{-- <td class="border px-4 py-2">{{ $eslogan->activo }}</td> --}}
                                        <td class="border px-4 py-2">{{ $eslogan->fecha->format('d-m-Y') }}</td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('intranet.eslogans.edit', $eslogan) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Editar</a>
                                            <form action="{{ route('intranet.eslogans.destroy', $eslogan) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-privado-layout>