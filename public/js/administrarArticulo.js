$(function(){
    
    //Funcion que filtra la tabla de articulos
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    
    //Funcion que captura el evento click en la papelera, cambia el href del elemento con id eliminarUsuario y muestra un modal
    $('.papelera').click(function(){
        var id = $(this).attr('id');
        id = id.split('papelera')[1];
        $('.eliminarUsuario').attr('href','/articulo/deleteAdmin/'+id);
        $('#modalEliminar').modal('show');
    });
    
    //Funcion que que recibe un elemento y una cantidad de caracteres, y cuando el elemento llega a esa cantidad de caracteres añade '...' y el texto restante desaparece
    function ellipsis_box(elemento, max_chars){
        limite_text = $(elemento).text();
        if (limite_text.length > max_chars)
        {
            limite = limite_text.substr(0, max_chars)+" ...";
            $(elemento).text(limite);
        }
    }

    var elemento = $('.limitado');

    for(var i=0 ; i<elemento.length ; i++){
        ellipsis_box(elemento[i], 120);
    }

});
