<div class="border-b border-zinc-700">
    <ul class="flex flex-wrap -mb-px p-1 text-base font-medium text-center bg-zinc-900 rounded-t-xl" id="tabs" data-tabs-toggle="#contenido-tabs" data-tabs-active-classes="" data-tabs-inactive-classes="" role="tablist">
        {{-- Ponemos este condicional para que si no hay comunicados, no se muestre la pestaña --}}
        @if($comunicados->count())
            <li class="me-1 group" role="presentation">
                <button class="inline-block p-4 rounded-t-xl bg-zinc-800 hover:bg-red-500 text-zinc-200 hover:text-zinc-800 border-b-2 border-red-500 hover:border-zinc-200" id="comunicados-tab-button" data-tabs-target="#comunicados-tab" type="button" role="tab" aria-controls="comunicados" aria-selected="false">
                    <i class="lni lni-bullhorn text-red-500 group-hover:text-white mr-2 transition duration-75"></i>
                    <span class="group-hover:text-zinc-800">Comunicados</span>
                </button>
            </li>
        @endif
        {{-- Ponemos este condicional para que si no hay documentos, no se muestre la pestaña --}}
        @if($documentos->count())
            <li class="me-1 group" role="presentation">
                <button class="inline-block p-4 rounded-t-xl bg-zinc-800 hover:bg-red-500 text-zinc-200 hover:text-zinc-800 border-b-2 border-red-500 hover:border-zinc-200" id="documentos-tab-button" data-tabs-target="#documentos-tab" type="button" role="tab" aria-controls="documentos" aria-selected="false">
                    <i class="lni lni-files text-red-500 group-hover:text-white mr-2 transition duration-75"></i>
                    <span class="group-hover:text-zinc-800">Documentos</span>
                </button>
            </li>
        @endif
        {{-- Ponemos este condicional para que si no hay noticias, no se muestre la pestaña --}}
        @if($noticias->count())
            <li class="me-1 group" role="presentation">
                <button class="inline-block p-4 rounded-t-xl bg-zinc-800 hover:bg-red-500 text-zinc-200 hover:text-zinc-800 border-b-2 border-red-500 hover:border-zinc-200" id="noticias-tab-button" data-tabs-target="#noticias-tab" type="button" role="tab" aria-controls="noticias" aria-selected="false">
                    <i class="lni lni-train text-red-500 group-hover:text-white mr-2 transition duration-75"></i>
                    <span class="group-hover:text-zinc-800">Noticias</span>
                </button>
            </li>
        @endif
    </ul>
</div>