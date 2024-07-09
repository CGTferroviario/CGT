<x-publico-layout>
    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">COMUNICADO {{ $comunicado->numero }}</h1>
        <div class="fondo comunicados">
            {{-- border border-zinc-900 rounded-xl shadow-md overflow-hidden  flex flex-col min-h-0 --}}
            <div class="p-4 max-w-md mx-auto md:max-w-2xl">
                <a href="{{ url()->previous() }}" class="p-4 bg-red-500">
                    Volver
                </a>
            </div>
            <x-comunicado :comunicado=$comunicado></x-comunicado>
        </div>
    @endsection
</x-publico-layout>
