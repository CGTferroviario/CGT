<x-publico-layout>
    @section('contenido')
        <x-slot name="header">
            <h1 class="m-0 py-3 text-center bg-red-500 text-zinc-900 font-bold leading-tight titular">
                Etiqueta: {{ $etiqueta->nombre }}
            </h1>
        </x-slot>
        <div class="p-8 fondo {{ str_replace('-', ' ', $etiqueta->slug) }}">
            <div class="bg-blanco-transp bordeRojo rounded-lg">                
                <x-botones-tabs :comunicados=$comunicados :documentos=$documentos :noticias=$noticias></x-botones-tabs>
                <x-contenido-tabs :comunicados=$comunicados :documentos=$documentos :noticias=$noticias></x-contenido-tabs>
            </div>   
        </div>
    @endsection
</x-publico-layout>
