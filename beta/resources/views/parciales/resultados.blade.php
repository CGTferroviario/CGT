<div id="resultados">
    @if(!empty($comunicados))
        <h3>Comunicados</h3>
        <ul>
            @foreach($comunicados as $comunicado)
                <li>{{ $comunicado->titulo }}</li>
            @endforeach
        </ul>
    @endif

    @if(!empty($noticias))
        <h3>Noticias</h3>
        <ul>
            @foreach($noticias as $noticia)
                <li>{{ $noticia->titulo }}</li>
            @endforeach
        </ul>
    @endif

    @if(!empty($documentos))
        <h3>Documentos</h3>
        <ul>
            @foreach($documentos as $documento)
                <li>{{ $documento->titulo }}</li>
            @endforeach
        </ul>
    @endif
</div>