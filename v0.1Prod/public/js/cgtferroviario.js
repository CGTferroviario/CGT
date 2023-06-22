// Tablas ordenables de DataTables

// var table = new DataTable('#tablaComunicados', {
//     language: {
//         url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
//     },
//     responsive: true,
//     "order": []
// });
$(document).ready(function() {
    $('#tablaComunicados').DataTable( {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
        },
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Comunicado '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
} );

// Fin de DataTables

// Google Analytics

window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PTSDGJ7SBK');

// Fin de Google Analytics

// Esto es de la pestaña equipo dentro de la página SFFCGT Equipo

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("activo");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
        content.style.maxHeight = null;
        } else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
    });
}
// Fin A Equipo