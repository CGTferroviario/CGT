<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-zinc-900 leading-tight">
            {{ __('Slider') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <form action="{{ route('intranet.sliders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="imagen">Image:</label>
                    <input type="file" class="form-control" id="imagen" name="imagen">
                </div>
                <button type="submit" class="p-2 bg-oscuro hover:bg-red-500 border border-red-500 rounded-lg">Añadir diapositiva</button>
            </form>
        </div>
    </div>
    @endsection
</x-privado-layout>