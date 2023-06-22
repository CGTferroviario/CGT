<x-admin-layout>

@section('contenido')

<h1 class="m-0 py-3 text-center font-bold bg-rojoBrillante">ETIQUETAS</h1>
<div class="container-fluid fondo documentacion">
    <div class="row">
        <div class="col-md-4 pl-20 mt-4 sm:flex sm:items-center sm:justify-between">
            <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg rtl:flex-row-reverse">
                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm">
                    Todas
                </button>
                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm hover:bg-gray-100">
                    Activas
                </button>
                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm hover:bg-gray-100">
                    Inactivas
                </button>
            </div>
        </div>
        <div class="col-md-4 mt-4 mx-auto sm:flex sm:items-center sm:justify-between">
            <div class="flex items-center gap-x-3">
                <h2 class="text-lg font-medium text-gray-800">Etiquetas</h2>
                <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $etiquetas->count() }}</span>
                <p class="mt-1 text-sm text-gray-500">Estas son las etiquetas que tenemos en el sector ferroviario.</p>
            </div>
        </div>
        <div class="col-md-4 pr-20 mt-4 sm:flex sm:items-center sm:justify-end">
            <div class="flex items-center mt-4 gap-x-3">
                <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-rojoBrillante hover:text-red-500">
                    <i class="fa-solid fa-file-import"></i>
                    <span>Importar CSV</span>
                </button>
                <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante border rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500">
                    <i class="fa-solid fa-circle-plus"></i>
                    <a href="{{ route('etiquetas.create') }}" class="">Añadir etiqueta</a>
                </button>
            </div>
        </div>
        <div class="px-20">
            <div class="col-md-12 p-4 mt-4 bordeRojo bg-blanco-transp rounded-md">
                <table id="example" class="display" style="width:100%">
                    <thead class="">
                        <tr>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($etiquetas as $etiqueta)
                        <tr>
                            <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-{{ $etiqueta->nombre }}">{{ $etiqueta->nombre }}</span></td>
                            
                            {{-- <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-{{ $etiqueta->etiqueta?->nombre }}">{{ $etiqueta->etiqueta?->nombre }}</span></td>
                            <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-{{ $etiqueta->categoria?->nombre }}">{{ $etiqueta->categoria?->nombre }}</span></td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

</x-admin-layout>