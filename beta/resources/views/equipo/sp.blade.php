<x-publico-layout>

@section('contenido')
<h1 class="m-0 py-3 negro text-center text-bold bg-rojoBrillante">Equipo Estatal del SECTOR FEDERAL FERROVIARIO - CGT</h1>
<div class="fondo ayudas">
    <div class="row">
        <div class="px-10 pt-4 mx-4">
            <div class="col-md-12 p-4 mt-2 bordeRojo bg-blanco-transp rounded-md">
            <br>
                <div class="grid grid-cols-2 gap-8">
                    @foreach ($tipos as $tipo)
                        <table class="w-full text-sm rounded-t-lg text-left rtl:text-right text-gray-400">
                            <thead class="text-lg rounded-t-lg uppercase bg-red-500 text-black text-center">
                                <tr class="rounded-t-lg">
                                    <th colspan="3" class="p-2 rounded-t-lg">{{ $tipo }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (${'equipo' . str_replace(' ', '', $tipo)} as $equipo)
                                    <tr class="odd:bg-gray-900 even:bg-gray-800 border-b border-gray-700">
                                        <td class="p-2">{{ $equipo->cargo }}</td>
                                        <td>{{ $equipo->usuario }}</td>
                                        <td><a href="mailto:{{ $equipo->email }}" class="">{{ $equipo->email }}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</x-publico-layout>