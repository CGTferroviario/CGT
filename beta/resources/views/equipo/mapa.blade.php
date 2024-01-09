<x-publico-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('MAPA SINDICAL - Sector Federal Ferroviario CGT') }}
        </h2>
    </x-slot>
    @section('contenido')
        <div class="p-8 fondo comunicados">

            <div class="container mx-auto mt-4">
                <form action="{{ route('equipo.mapa') }}" method="post">
                    {{ csrf_field() }}
                    <div class="my-4 inline-flex">
                        <div class="">
                            <label for="ccaa" class="block mb-2 text-lg font-medium text-zinc-900">Secciones por Comunidad Autónoma:</label>
                            <div class="inline-flex">
                                <select name="ccaa" class="mr-4 bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400">
                                    @foreach ($ccaas as $ccaa)
                                        @if ($comunidades_autonomas_con_secciones->contains($ccaa->id))
                                            <option value="{{ $ccaa->id }}" {{ (isset($seccion_seleccionada) && $seccion_seleccionada == $ccaa->id) ? 'selected' : '' }}>
                                                {{ $ccaa->nombre }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            
                                <button type="submit" class="items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-zinc-900 hover:text-red-500">Seleccionar</button>
                            </div>
                        </div>
                    </div>

                    
                </form>

                @if ($seccions->count() > 0)
                    <table class="w-full text-sm rounded-t-lg text-left rtl:text-right text-zinc-200">
                        <thead class="text-lg bg-red-500 text-black text-center">
                            <tr class="">
                                <th class="p-2 rounded-tl-lg">Nombre</th>
                                <th>Responsable</th>
                                <th>Email</th>
                                <th class="rounded-tr-lg">Teléfono</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seccions as $seccion)
                                <tr class="odd:bg-zinc-900 even:bg-zinc-800 border-b border-zinc-700 text-center">
                                    <td class="p-2 w-1/4">{{ $seccion->nombre }}</td>
                                    <td class=" w-1/4">{{ $seccion->responsable }}</td>
                                    <td class=" w-1/4"><a href="mailto:{{ $seccion->email }}" class="">{{ $seccion->email }}</a></td>
                                    <td class=" w-1/4">{{ $seccion->telefono }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No hay secciones para mostrar.</p>
                @endif
            </div>
        </div>
    @endsection

</x-publico-layout>
