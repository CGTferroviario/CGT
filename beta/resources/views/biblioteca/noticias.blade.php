<x-publico-layout>

    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">NOTICIAS</h1>
        <div class="fondo comunicados">
            <div class="sm:w-full md:w-11/12 lg:w-10/12 mx-auto">
                <x-buscador :empresas=$empresas :categorias=$categorias :etiquetas=$etiquetas></x-buscador>
            </div>
            
            <div class="p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
                
                        <div class="w-full p-2">
                            {{-- {{ $paginator->links() }} --}}
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                            @foreach ($noticias as $noticia)
                                <x-noticia :noticia="$noticia" />
                            @endforeach
                        </div>
                        <!-- Muestra los enlaces de paginación para el grupo actual -->
                        <div class="w-full p-2">
                            {{-- {{ $paginator->links() }} --}}
                        </div>
                    </div>
            </div>
        </div>
    @endsection

</x-publico-layout>
