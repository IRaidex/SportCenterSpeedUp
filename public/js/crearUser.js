$(function(){

    $('small').hide();

    //Funcion que comprueba que los datos del formulario son correctos , mediante el evento blur y expresiones regulares
    $('#formRegister :input').blur(function(){

        if($(this).attr('name') == 'name'){
            if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,50}$/)){
                $(this).removeClass('error')
                $('#avisoNombre').hide();
            }else{
                $(this).addClass('error');
                $('#avisoNombre').show();
            }
        }else if($(this).attr('name') == 'firts_surname'){
            if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,50}$/)){
                $(this).removeClass('error')
                $('#avisoApellido1').hide();
            }else{
                $(this).addClass('error');
                $('#avisoApellido1').show();
            }
        }else if($(this).attr('name') == 'second_surname'){
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
        }else if($(this).attr('name') == 'sex'){
            if($(this).val() == 'hombre'){
                if($(this).is(':checked') || $('input:radio[value="mujer"]').is(':checked')){
                    var radios = $('input:radio');
                    radios.removeClass('error')
                    $('#avisoSex').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoSex').show();
                }
            }if($(this).is(':checked') || $('input:radio[value="hombre"]').is(':checked')){
                var radios = $('input:radio');
                radios.removeClass('error')
                $('#avisoSex').hide();
            }else{
                $(this).addClass('error');
                $('#avisoSex').show();
            }
        }else if($(this).attr('name') == 'email'){
            if($(this).val().match(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/)){
                $(this).removeClass('error')
                $('#avisoEmail').hide();
            }else{
                $(this).addClass('error');
                $('#avisoEmail').show();
            }

        }else if($(this).attr('name') == 'password'){
            if($(this).val().match( /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/)){
                $(this).removeClass('error')
                $('#avisoPass').hide();
            }else{
                $(this).addClass('error');
                $('#avisoPass').show();
            }
        }else if($(this).attr('name') == 'password_confirmation'){
            if($(this).val() == $('#password').val()){
                $(this).removeClass('error')
                $('#avisoConfirm').hide();
            }else{
                $(this).addClass('error');
                $('#avisoConfirm').show();
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
        else if($(this).attr('name') == 'terminos'){
            if($(this).is(':checked')){
                $('#avisoTerm').hide();
                $(this).removeClass('error');
            }else{
                $('#avisoTerm').show();
                $(this).addClass('error');
            }
        }
    });

    //Funcion donde evitamos el evento submit, recorremos todos los inputs para confirmar que son correctos y enviamos el formulario
    $('#registro').click(function(event){
        event.preventDefault();

        var inputs = $('#formRegister :input');
        var error = false;

        for(var i=0 ; i<inputs.length ; i++){

            $(inputs[i]).focus();
            $(inputs[i]).blur();

            if($(inputs[i]).hasClass('error')){
                error = true;
            }
        }
        if(error == false){
            $('#formRegister').submit();    
        }
    });
});