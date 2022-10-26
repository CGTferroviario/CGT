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
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
        content.style.maxHeight = null;
        } else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
    });
}

// Esto es la parte de navbar activa



