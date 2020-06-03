$(function(){

    $('#avisoTitle').hide();
    $('#avisoContent').hide();
    $('#avisoTag').hide();
    $('#avisoFile').hide();
    
     //Funcion que limita la cantidad de caracteres del selector '#articulo' y se muestra una contador con los caracteres que faltan para llegar al limite
    var total_letras = 5000;
    $('#articulo').keyup(function() {
        var longitud = $(this).val().length;
        var resto = total_letras - longitud;
        $('#numero').html(resto).css('color','#E1523D');
        if(resto <= 0){
            $('#content').attr("maxlength", 5000);
        }
    });

    //Funcion que comprueba que los datos del formulario son correctos , mediante el evento blur y expresiones regulares
    $('#formArticle :input').blur(function(){

        if($(this).attr('name') == 'title'){
            if($(this).val().match( /^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,150}$/)){
                $(this).removeClass('error')
                $('#avisoTitle').hide();
            }else{
                $(this).addClass('error');
                $('#avisoTitle').show();
            }
        }else if($(this).attr('name') == 'content'){
            if($(this).val().match( /^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{150,5000}$/)){
                $(this).removeClass('error')
                $('#avisoContent').hide();
            }else{
                $(this).addClass('error');
                $('#avisoContent').show();
            }
        }else if($(this).attr('name') == 'tag1' || $(this).attr('name') == 'tag2' || $(this).attr('name') == 'tag3'){
            if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,15}$/)){
                $(this).removeClass('error')
                $('#avisoTag').hide();
            }else{
                $(this).addClass('error');
                $('#avisoTag').show();
            }
        }


    });
    
    //Funcion donde evitamos el evento submit, recorremos todos los inputs para confirmar que son correctos y enviamos el formulario
    $('#crear').click(function(){

        $(this).preventDefault;

        var inputs = $('#formArticle :input');
        var error = false;

        for(var i=0 ; i<inputs.length ; i++){
            $(inputs[i]).focus();
            $(inputs[i]).blur();

            if($(inputs[i]).hasClass('error')){
                error = true;
            }
        }
        
        if(error = false){
             $('#crear').submit();
        }
        
        $('#avisoTitle').hide();
        $('#avisoContent').hide();
        $('#avisoTag').hide();
        $('#avisoFile').hide();

    });    


});
