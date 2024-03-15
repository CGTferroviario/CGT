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

new DataTable('#comunicados1', {
    responsive: true,
    order: [[1, 'desc']],
    pagingType: 'simple_numbers',
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
    },
});

// Fin Datatables

// Convertir los Toggle Switch del valor on/off a 1/0
document.getElementById('activa_toggle').addEventListener('change', function() {
    document.getElementById('activa').value = this.checked ? 1 : 0;
});

document.getElementById('comunicados_toggle').addEventListener('change', function() {
    document.getElementById('comunicados').value = this.checked ? 1 : 0;
});

document.getElementById('vales_toggle').addEventListener('change', function() {
    document.getElementById('vales').value = this.checked ? 1 : 0;
});

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