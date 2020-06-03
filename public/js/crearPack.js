$(function(){

    $('small').hide();

    $('#formPack :input').blur(function(){

        if($(this).attr('name') == 'name'){
            if($(this).val().match( /^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{5,50}$/)){
                $(this).removeClass('error')
                $('#avisoNombre').hide();
            }else{
                $(this).addClass('error')
                $('#avisoNombre').show();
            }
        }else if($(this).attr('name') == 'servicio1'){
            if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{5,50}$/)){
                $(this).removeClass('error')
                $('#avisoServicio1').hide();
            }else{
                $(this).addClass('error')
                $('#avisoServicio1').show();
            }
        }else if($(this).attr('name') == 'servicio2'){
            if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{5,50}$/)){
                $(this).removeClass('error')
                $('#avisoServicio2').hide();
            }else{
                $(this).addClass('error')
                $('#avisoServicio2').show();
            }
        }else if($(this).attr('name') == 'servicio3'){
            if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{5,50}$/)){
                $(this).removeClass('error')
                $('#avisoServicio3').hide();
            }else{
                $(this).addClass('error')
                $('#avisoServicio3').show();
            }
        }else if($(this).attr('name') == 'servicio4'){
            if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{5,50}$/)){
                $(this).removeClass('error')
                $('#avisoServicio4').hide();
            }else{
                $(this).addClass('error')
                $('#avisoServicio4').show();
            }
        }else if($(this).attr('name') == 'servicio5'){
            if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{5,50}$/)){
                $(this).removeClass('error')
                $('#avisoServicio5').hide();
            }else{
                $(this).addClass('error')
                $('#avisoServicio5').show();
            }
        }

    });

    $('#crear').click(function(){

        $(this).preventDefault;

        var inputs = $('#formPack :input');
        var error = false;

        for(var i=0 ; i<inputs.length ; i++){
            inputs[i].focus();
            inputs[i].blur();

            if($(inputs[i]).hasClass('error')){
                error = true;
            }
        }

        if(error == false){
            $('#crear').submit();
        }
    });

});