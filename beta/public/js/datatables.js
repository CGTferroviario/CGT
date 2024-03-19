import './bootstrap';
import 'laravel-datatables-vite';

new DataTable('#tablaComunicados', {
    processing: true,
    serverSide: true,
    ajax: "{{ route('intranet.comunicados.ajax') }}",
    columns: [
        { data: 'numero', name: 'numero' },
        { data: 'action', name: 'action', orderable: false, searchable: false },
        { data: 'fecha', name: 'fecha' },
        { data: 'user.nombre', name: 'user.nombre' },
        { data: 'titulo', name: 'titulo' },
        { data: 'empresa.nombre', name: 'empresa.nombre' },
        { data: 'categoria.nombre', name: 'categoria.nombre' },
        { data: 'etiquetas', name: 'etiquetas', orderable: false, searchable: false },
        { data: 'subtitulo', name: 'subtitulo' },
        { data: 'cuerpo', name: 'cuerpo' },
        { data: 'pdf', name: 'pdf' },
        { data: 'imagen', name: 'imagen' },
        { data: 'adjunto', name: 'adjunto' },
        { data: 'visualizaciones', name: 'visualizaciones' }
    ]
});