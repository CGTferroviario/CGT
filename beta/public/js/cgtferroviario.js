// DataTables para Comunicados

new DataTable('#comunicadosAdmin', {
    responsive: true,
    order: [[1, 'desc']],
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
    },
});

new DataTable('#equipoSP', {
    responsive: true,
    rowReorder: true,
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
    },
});



// new DataTable('#tablaComunicados', {
//     responsive: true,
//     order: [[1, 'desc']],
//     language: {
//         url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
//     },
//     serverSide: true,
// });

// $('#tablaComunicados').DataTable({
//     responsive: true,
//     processing: true,
//     serverSide: true,
//     ajax: "{{ route('comunicados.ajax') }}", // Adjust this to your actual route
//     deferLoading: 2, // Adjust this based on how many pages you want to preload
//     columns: [
//         // Define your columns here
//         { data: 'numero', name: 'numero' },
//         { data: 'action', name: 'action', orderable: false, searchable: false },
//         { data: 'fecha', name: 'fecha' },
//         { data: 'user.nombre', name: 'user.nombre' },
//         { data: 'titulo', name: 'titulo' },
//         { data: 'empresa.nombre', name: 'empresa.nombre' },
//         { data: 'categoria.nombre', name: 'categoria.nombre' },
//         { data: 'etiquetas', name: 'etiquetas', orderable: false, searchable: false },
//         { data: 'subtitulo', name: 'subtitulo' },
//         { data: 'cuerpo', name: 'cuerpo' },
//         { data: 'pdf', name: 'pdf' },
//         { data: 'imagen', name: 'imagen' },
//         { data: 'adjunto', name: 'adjunto' },
//         { data: 'visualizaciones', name: 'visualizaciones' }
//     ],
//     // Additional options as needed
// });


// $('#tablaComunicados').DataTable({
//     language: {
//         url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
//     },
//     processing: true,
//     serverSide: true,
//     ajax: "comunicados.ajax.php",
//     columns: [
//         { data: 'numero', name: 'numero' },
//         { data: 'action', name: 'action', orderable: false, searchable: false },
//         { data: 'fecha', name: 'fecha' },
//         { data: 'user.nombre', name: 'user.nombre' },
//         { data: 'titulo', name: 'titulo' },
//         { data: 'empresa.nombre', name: 'empresa.nombre' },
//         { data: 'categoria.nombre', name: 'categoria.nombre' },
//         { data: 'etiquetas', name: 'etiquetas', orderable: false, searchable: false },
//         { data: 'subtitulo', name: 'subtitulo' },
//         { data: 'cuerpo', name: 'cuerpo' },
//         { data: 'pdf', name: 'pdf' },
//         { data: 'imagen', name: 'imagen' },
//         { data: 'adjunto', name: 'adjunto' },
//         { data: 'visualizaciones', name: 'visualizaciones' }
//     ]
// });

// Fin Datatables

// Convertir los Toggle Switch del valor on/off a 1/0
// document.getElementById('activa_toggle').addEventListener('change', function() {
//     document.getElementById('activa').value = this.checked ? 1 : 0;
// });

// document.getElementById('comunicados_toggle').addEventListener('change', function() {
//     document.getElementById('comunicados').value = this.checked ? 1 : 0;
// });

// document.getElementById('vales_toggle').addEventListener('change', function() {
//     document.getElementById('vales').value = this.checked ? 1 : 0;
// });

// Fin Toggle Switch

// Sort
// window.Sortable = require('sortablejs').default

// Simple list
// Sortable.create(simpleList, { 
//     handle: '.glyphicon-move',
//     animation: 150
// });

// List with handle
// Sortable.create(listWithHandle, {
//     handle: '.glyphicon-move',
//     animation: 150
// });