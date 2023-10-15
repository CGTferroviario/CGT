// DataTables para Comunicados

new DataTable('#comunicadosAdmin', {
    responsive: true,
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