// DataTables para Comunicados

new DataTable('#comunicadosAdmin', {
    responsive: true,
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
// Fin Datatables

// Select etiquetas multiples formulario
var expanded = false;

function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if (!expanded) {
        checkboxes.style.display = "block";
        expanded = true;
    } else {
        checkboxes.style.display = "none";
        expanded = false;
    }
}
// Final etiquetas

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

// Drag and Drop Dropzone
Dropzone.options.logoDropzone = {
    acceptedFiles: 'image/*',
    dictDefaultMessage: 'Arrastra aquí los archivos para subir',
    dictInvalidFileType: 'No puedes subir este tipo de archivos',
    init: function() {
        this.on('success', function(file, response) {
            document.getElementById('logo').value = response.path;
        });
    }
};
Dropzone.options.comunicadosPdfDropzone = {
    acceptedFiles: 'pdf/*',
    dictDefaultMessage: 'Arrastra aquí los archivos para subir',
    dictInvalidFileType: 'No puedes subir este tipo de archivos',
    init: function() {
        this.on('success', function(file, response) {
            document.getElementById('pdf').value = response.path;
        });
    }
};
// Fin Drag and Drop

// Sort

// Simple list
Sortable.create(simpleList, { 
    handle: '.glyphicon-move',
    animation: 150
});

// List with handle
Sortable.create(listWithHandle, {
  handle: '.glyphicon-move',
  animation: 150
});