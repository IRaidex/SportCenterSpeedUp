$(function(){
    
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
        ellipsis_box(elemento[i], 500);
    }

});