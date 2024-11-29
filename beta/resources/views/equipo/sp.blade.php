<x-publico-layout>

@section('contenido')
<h1 class="m-0 py-3 font-semibold text-lg text-center text-zinc-900 bg-red-500 leading-tight titular">Equipo Estatal del SECTOR FEDERAL FERROVIARIO - CGT</h1>
<div class="fondo ayudas">
    <div class="row">
        <div class="px-10 pt-4 mx-4">
            <br>
            <div class="grid xl:grid-cols-2 lg:grid-cols-1 gap-8">
                @foreach ($equiposPorTipo as $tipo => $equipos)
                    <table class="w-full text-sm rounded-t-lg text-left rtl:text-right text-zinc-200 mb-8">
                        <thead class="text-lg rounded-t-lg uppercase bg-red-500 text-black text-center">
                            <tr class="rounded-t-lg">
                                <th colspan="3" class="p-2 rounded-t-lg">{{ $tipo }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($equipos as $equipo)
                                <tr class="odd:bg-zinc-900 even:bg-zinc-800 border-b border-zinc-700">
                                    <td class="p-2 w-1/3">{{ $equipo->cargo }}</td>
                                    <td class="w-1/3">{{ $equipo->usuario }}</td>
                                    <td class="w-1/3">
                                        <a href="mailto:{{ $equipo->email }}" class="hover:text-red-500">
                                            {{ $equipo->email }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
</x-publico-layout>