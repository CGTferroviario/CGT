<x-publico-layout>

@section('contenido')
    <h1 class="m-0 py-3 text-center bg-adif font-bold">ESTACIONES DE VIAJEROS</h1>
    <div class="fondo estaciones">
        <div class="p-6 grid grid-cols-2 gap-4">
            <div class="intro bg-oscuro-7 bordeRojo rounded-lg p-4 text-white">
                <p class="text-center">Bienvenid@ a la sección de Estaciones de Viajeros.</p>
                <p class="text-justify">Si desempeñas tu labor en alguna estación de Adif, aquí encontrarás información útil para tu trabajo.<br>
                    También podrás conocer el trabajo que hacemos en CGT para mejorar las condiciones laborales de l@s compañer@s que trabajan en las estaciones de viajeros.
                </p>
            </div>
        </div>
        <div class="grid sm:grid-cols-2 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
            <div class="col-span-4 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
                @foreach ($documentos as $documento)   
                    <x-documento :documento=$documento></x-documento>
                @endforeach
            <div class="col-span-4 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
        </div>
    </div>
@endsection

</x-publico-layout>