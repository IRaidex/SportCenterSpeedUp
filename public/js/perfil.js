$(function(){

    $('.cancelar').hide();
    $('.save').hide();
    $('.icono').hide();
    $('small').hide();

    //Funcion que al hacer click en el boton modificar, se guardan los datos de los inputs en el localStorage y se habilitan los inputs
    $('.mod').click(function(){
        $('.cancelar').show('low');
        $('.save').show('low');
        $(this).hide('low');
        var inputs = $('#formPerfil :input').removeAttr('disabled');

        for(var i=0 ; i<inputs.length ; i++){
            localStorage.setItem($(inputs[i]).attr('name'),$(inputs[i]).val());
        }

    });

    //Funcion que comprueba que los datos del formulario son correctos mediante el evento blur y expresiones regulares
    $('#formPerfil :input').blur(function(){

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

    //Funcion que al hacer click en el boton cancelar se deshabiltian los inputs y se eliminan los valores del locoalStorage
    $('.cancelar').click(function(){
        $('.cancelar').hide('low');
        $('.save').hide('low');
        $('.mod').show('low');
        $('small').hide();
        $('#numero').hide('low');
        $('#formPerfil')[0].reset();
        var inputs = $('#formPerfil :input').attr('disabled','disabled');


        for(var i=0 ; i<inputs.length ; i++){
            localStorage.removeItem($(inputs[i]).attr('name'));
        }
    });
    
      //Funcion que recorremos todos los inputs para confirmar que son correctos, enviamos el formulario mediante una peticion ajax y al terminar borramos los datos del localStorage
    $('.save').click(function(){

        var inputs = $('#formPerfil :input');
        var error = false;

        for(var i=0 ; i<inputs.length ; i++){
            $(inputs[i]).focus();
            $(inputs[i]).blur();

            if($(inputs[i]).hasClass('error')){
                error = true;
            }
        }

        if(error == false){

            var id = $('.save').attr('id');
            var data = $('#formPerfil').serialize();
            data = new FormData($('#formPerfil')[0]);       

            $.ajax({
                url: "/perfil/update/"+id,
                processData: false,
                contentType: false,
                type: "POST",
                data: data ,
                success: function(data){
                    console.log(data);
                    if(data == 1){
                        location.reload();
                    }else{
                        $('#error').show();
                    }
                    $('.cancelar').hide('low');
                    $('.save').hide('low');
                    $('.mod').show('low');
                    var inputs = $('#formPerfil :input').attr('disabled','disabled');
                    
                    for(var i=0 ; i<inputs.length ; i++){
                        localStorage.removeItem($(inputs[i]).attr('name'));
                    }
                }
            });   
        }
    });

});