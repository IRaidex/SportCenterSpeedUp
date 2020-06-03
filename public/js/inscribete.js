$(function(){

    $('small').hide();
    
    //Funcion donde se llenan los datos de los inputs si el usuario ha elegido una tarjeta ya registrada
    $('#tarjetas').change(function(){

        if($(this).val() == "-"){
            $('#numTarjeta').val('').removeAttr('disabled');
            $('#mesExpira').val('').removeAttr('disabled');
            $('#anyoExpira').val('').removeAttr('disabled');
            $('#dueñoTarjeta').val('').removeAttr('disabled');
        }else{
            $('#numTarjeta').attr('disabled','disabled');
            $('#mesExpira').attr('disabled','disabled');
            $('#anyoExpira').attr('disabled','disabled');
            $('#dueñoTarjeta').attr('disabled','disabled');
            $.ajax({
                url: "/card/"+$(this).val(),
                method: "GET",
                success: function(data){
                    $('#numTarjeta').val(data.number_card);

                    if(data.month < 10){
                        var numeroMes = data.month.toString();
                        var mes = 0+numeroMes;
                        $('#mesExpira').val(mes);
                    }

                    $('#anyoExpira').val(data.year);
                    $('#dueñoTarjeta').val(data.titular);

                },dataType: 'json',
            });
        }

    });

    //Funcion que comprueba que los datos del formulario son correctos mediante el evento blur y expresiones regulares
    $('#formCard :input').blur(function(){

        if($(this).attr('name') == 'numTarjeta'){
            if($(this).val().match(/^[0-9]{16}$/)){
                $(this).removeClass('error')
                $('#avisoNum').hide();
            }else{
                $(this).addClass('error');
                $('#avisoNum').show();
            }
        }else if($(this).attr('name') == 'mesExpira'){
            if($(this).val().match(/^[0-9]{2}$/)){

                var mesIntroducido = $(this).val();

                if(mesIntroducido[0] == 0){
                    mesIntroducido = mesIntroducido[1];
                }

                var mesActual = new Date();
                mesActual = mesActual.getMonth()+1;

                if(mesIntroducido>mesActual && mesIntroducido<=12){
                    $(this).removeClass('error')
                    $('#avisoMes').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoMes').show();
                }
            }else{
                $(this).addClass('error');
                $('#avisoMes').show();
            }
        }else if($(this).attr('name') == 'anyoExpira'){
            if($(this).val().match(/^[0-9]{2}$/)){

                var anyoIntroducido = $(this).val();

                var anyoActual = new Date();
                anyoActual = anyoActual.getFullYear().toString();
                anyoActual = anyoActual[2]+''+anyoActual[3];

                if(anyoIntroducido>anyoActual && anyoIntroducido<=28){
                    $(this).removeClass('error')
                    $('#avisoYear').hide();
                }else{
                    $(this).addClass('error');
                    $('#avisoYear').show();
                }
            }else{
                $(this).addClass('error');
                $('#avisoYear').show();
            }
        }else if($(this).attr('name') == 'cvv'){
            if($(this).val().match(/^[0-9]{3}$/)){
                $(this).removeClass('error')
                $('#avisoCvv').hide();
            }else{
                $(this).addClass('error')
                $('#avisoCvv').show();
            }
        }else if($(this).attr('name') == 'dueñoTarjeta'){
            if($(this).val().match( /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]{3,100}$/)){
                $(this).removeClass('error')
                $('#avisoTitular').hide();
            }else{
                $(this).addClass('error')
                $('#avisoTitular').show();
            }
        }else if($(this).attr('name') == 'pack'){
            if($(this).val() != "-"){
                $(this).removeClass('error')
                $('#avisoPack').hide();
            }else{
                $(this).addClass('error')
                $('#avisoPack').show();
            }
        }
    });
    
    //Funcion que recorre los inputs del formulario para comprobar que estan bien,
    $('#aceptarPago').click(function(){
        var inputs = $('#formCard :input');
        var error = false;

        for(var i=0 ; i<inputs.length ; i++){
            inputs[i].focus();
            inputs[i].blur();

            if($(inputs[i]).hasClass('error')){
                error = true;
            }
        }

        if(error == false){
            //Si el checkbox de guardar datos esta seleccioanda guardamos los datos de la tarjeta, creamos el contrato y sino solo se crea el contrato
            if($('#datosTarjeta').is(':checked')){
                $.ajax({
                    url: "/card/save",
                    type: "POST",
                    data: $('#formCard :input').serialize() ,
                    success: function(data){
                        $('#pagoRealizado').modal('show');
                    }
                });   
            }else{
                $.ajax({
                    url: "/contract",
                    type: "POST",
                    data: $('#formCard :input').serialize() ,
                    success: function(data){
                        $('#pagoRealizado').modal('show');
                    }
                });   
            }
        }
    });

});