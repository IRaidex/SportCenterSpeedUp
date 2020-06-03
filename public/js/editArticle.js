$(function(){

    var id = $('.save').attr('id');

    $('.volver').attr('href','/articulo/'+id);

    $('small').hide();
    $('.icono').hide();
    $('.save').hide();
    $('.cancelar').hide();

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
    
    //Funcion que al hacer click en el boton modificar, se guardan los datos de los inputs en el localStorage y se habilitan los inputs
    $('.mod').click(function(){
        $('.eliminar1').hide('low');
        $('.eliminar2').hide('low');
        $('.icono').hide();
        $('.cancelar').show('low');
        $('.save').show('low');
        $(this).hide('low');
        $('#numero').show('low');
        var inputs = $('#formArticle :input').removeAttr('disabled');

        for(var i=0 ; i<inputs.length ; i++){
            localStorage.setItem($(inputs[i]).attr('name'),$(inputs[i]).val());
        }

    });
    
    //Funcion que al hacer click en el boton cancelar se deshabiltian los inputs y se eliminan los valores del locoalStorage
    $('.cancelar').click(function(){
        $('.eliminar1').show('low');
        $('.eliminar2').show('low');
        $('.cancelar').hide('low');
        $('.save').hide('low');
        $('.mod').show('low');
        $('small').hide();
        $('#numero').hide('low');
        $('#formArticle')[0].reset();
        var inputs = $('#formArticle :input').attr('disabled','disabled');

        for(var i=0 ; i<inputs.length ; i++){
            localStorage.removeItem($(inputs[i]).attr('name'));
        }
    });

     //Funcion que comprueba que los datos del formulario son correctos mediante el evento blur y expresiones regulares
    $('#formArticle :input').blur(function(){

        if($(this).val() != localStorage.getItem($(this).attr('name'))){
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
        }

    });

    //Funcion que elimina el articulo si eres un usuario con rol de Admin
    $('.eliminar1').click(function(){
        var id = $(this).attr('id');
        id = id.split('admin')[1];
        $('.eliminarUsuario').attr('href','/articulo/deleteAdmin/'+id);
        $('#modalEliminar').modal('show');
    }); 
    
    //Funcion que elimina el articulo si eres un usuario con rol de Monitor
    $('.eliminar2').click(function(){
        var id = $(this).attr('id');
        id = id.split('monitor')[1];
        $('.eliminarUsuario').attr('href','/articulo/delete/'+id);
        $('#modalEliminar').modal('show');
    });
    
     //Funcion que recorremos todos los inputs para confirmar que son correctos y enviamos el formulario mediante una peticion ajax.
    $('.save').click(function(){

        var inputs = $('#formArticle :input');
        var error = false;

        for(var i=0 ; i<inputs.length ; i++){
            $(inputs[i]).focus();
            $(inputs[i]).blur();

            if($(inputs[i]).hasClass('error')){
                error = true;
            }
        }

        if(error == false){
            var id = $(this).attr('id');

            var data = $('#formArticle').serialize();
            data = new FormData($('#formArticle')[0]);       

            $.ajax({
                url: "/articulo/update/"+id,
                processData: false,
                contentType: false,
                type: "POST",
                data: data,
                success: function(data){
                    if(data == 1){
                        location.reload();
                    }else{
                        $('#error').show('low');
                    }
                    $('.eliminar1').show('low');
                    $('.eliminar2').show('low');
                    $('.cancelar').hide('low');
                    $('.save').hide('low');
                    $('.mod').show('low');
                    var inputs = $('#formArticle :input').attr('disabled','disabled');
                    for(var i=0 ; i<inputs.length ; i++){
                        localStorage.removeItem($(inputs[i]).attr('name'));
                    }
                }
            });  
        }

    });
});