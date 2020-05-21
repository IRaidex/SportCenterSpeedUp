$(function(){

    $('.error').hide();
    $('.save').hide();
    $('.icono').hide();
    $('small').hide();

    var error = false;

    $('.mod').click(function(){
        $('.error').show('low');
        $('.save').show('low');
        $(this).hide('low');
        var inputs = $('#formPerfil :input').removeAttr('disabled');

        for(var i=0 ; i<inputs.length ; i++){
            localStorage.setItem($(inputs[i]).attr('name'),$(inputs[i]).val());
        }

    });

    $('#formPerfil :input').blur(function(){

        error = false;

        if($(this).val() != localStorage.getItem($(this).attr('name'))){
            if($(this).attr('name') == 'nombre' || $(this).attr('name') == 'apellido1' || $(this).attr('name') == 'apellido2'){
                if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,50}$/)){
                    error = false;
                    $('#aviso1').hide();
                }else{
                    error = true;
                    $('#aviso1').show();
                }
            }else{
                if($(this).val().match(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/)){
                    error = false;
                    $('#aviso2').hide();
                }else{
                    error = true;
                    $('#aviso2').show();
                }
            }
        }
    });

    $('.error').click(function(){
        location.reload();
    });

    $('.save').click(function(){

        if(error == false){

            var data = $('#formPerfil').serialize();
            data = new FormData($('#formPerfil')[0]);       

            $.ajax({
                url: "/perfil/edit",
                processData: false,
                contentType: false,
                type: "POST",
                data: data,
                success: function(data){
                    if(data == 1){
                        location.reload();
                    }else{
                        $('#error').show();
                    }
                    $('.error').hide('low');
                    $('.save').hide('low');
                    $('.mod').show('low');
                    $('#formPerfil :input').attr('disabled','disabled');

                }
            });   
        }
    });

});