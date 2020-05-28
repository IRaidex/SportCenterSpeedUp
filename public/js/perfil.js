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
            if($(this).attr('name') == 'nombre'){
                if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,50}$/)){
                    $(this).removeClass('error')
                    $('#avisoNombre').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoNombre').show();
                }
            }else if($(this).attr('name') == 'apellido1'){
                if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,50}$/)){
                    $(this).removeClass('error')
                    $('#avisoApellido1').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoApellido1').show();
                }
            }else if($(this).attr('name') == 'apellido2'){
                if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,50}$/)){
                    $(this).removeClass('error')
                    $('#avisoApellido2').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoApellido2').show();
                }
            }else if($(this).attr('name') == 'date_birth'){
                var fechaActual = new Date();
                var birthday = new Date($(this).val());

                if($(this).val() != ""){
                    if((fechaActual.getFullYear() - birthday.getFullYear()) >=16){
                        if(fechaActual.getMonth == birthday.getMonth){
                            if(fechaActual.getDate == birthday.getDate){
                                $(this).removeClass('error')
                                $('#avisoFecha').hide();
                            }else{
                                if(fechaActual.getDate < birthday.getDate){
                                    $(this).removeClass('error')
                                    $('#avisoFecha').hide();
                                }else{
                                    $(this).addClass('error');
                                    $('#avisoFecha').show();
                                }
                            }
                        }else{
                            if(fechaActual.getMonth < birthday.getMonth){
                                $(this).removeClass('error')
                                $('#avisoFecha').hide();
                            }else{
                                $(this).addClass('error');
                                $('#avisoFecha').show();
                            }
                        }
                    }else{
                        $(this).addClass('error');
                        $('#avisoFecha').show();
                    }
                }else{
                    $(this).addClass('error');
                    $('#avisoFecha').show();
                }
            }else if($(this).attr('name') == 'email'){
                if($(this).val().match(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/)){
                    $(this).removeClass('error')
                    $('#avisoEmail').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoEmail').show();
                }
            }else if($(this).attr('name') == 'via'){

                if($(this).val().match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,50}$/)){
                    $(this).removeClass('error')
                    $('#avisoVia').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoVia').show();
                }
            }else if($(this).attr('name') == 'numero'){
                if($(this).val() != ""){
                    if($(this).val().match(/^[0-9]{1,3}$/)){
                        $(this).removeClass('error')
                        $('#avisoNumero').hide();
                    }else{
                        $(this).addClass('error');
                        $('#avisoNumero').show();
                    }
                }
            }else if($(this).attr('name') == 'piso'){
                if($(this).val() != ""){
                    if($(this).val().match(/^[0-9]{1,2}$/)){
                        $(this).removeClass('error')
                        $('#avisoPiso').hide();
                    }else{
                        $(this).addClass('error');
                        $('#avisoPiso').show();
                    }
                }
            }else if($(this).attr('name') == 'puerta'){
                if($(this).val().match(/^[0-9]{1,2}$/)){
                    $(this).removeClass('error')
                    $('#avisoPuerta').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoPuerta').show();
                }
            }else if($(this).attr('name') == 'provincia'){
                if($(this).val().match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,35}$/)){
                    $(this).removeClass('error')
                    $('#avisoProvincia').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoProvincia').show();
                }
            }else if($(this).attr('name') == 'localidad'){
                if($(this).val().match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,35}$/)){
                    $(this).removeClass('error')
                    $('#avisoLocalidad').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoLocalidad').show();
                }
            }else if($(this).attr('name') == 'cp'){
                if($(this).val().match(/^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/)){
                    $(this).removeClass('error')
                    $('#avisoCp').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoCp').show();
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
                    console.log(data);
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