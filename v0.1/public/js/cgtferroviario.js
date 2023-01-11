// Esto es lo de los Checkbox
$(document).ready(function() {
    $('input[type="checkbox"]').click(function() {
        var inputValue = $(this).attr("value");
        $("." + inputValue).toggle();
    });
});

// Esto es de la pestaña equipo dentro de la página SFFCGT

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

// Esto es la parte de cambiar la hoja de estilo

// <link id="style1" rel="stylesheet" type="text/css" href="resumecss.css" />

function toggle() {
    var el = document.getElementById("hojaEstilo");
    if (el.href.match("cgtferroviario.css")) {
        el.href = "cgtferroviario_claro.css";    
    }
    else {
        el.href = "cgtferroviario.css";  
    }
    alert("<link> href is now: " + el.href)
}



