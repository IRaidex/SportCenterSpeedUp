$(function(){

    $('small').hide();
    $('.icono').hide();
    $('.save').hide();
    $('.cancelar').hide();

    var total_letras = 5000;
    $('#articulo').keyup(function() {
        var longitud = $(this).val().length;
        var resto = total_letras - longitud;
        $('#numero').html(resto).css('color','#E1523D');
        if(resto <= 0){
            $('#content').attr("maxlength", 5000);
        }
    });

    $('.mod').click(function(){
        $('.cancelar').show('low');
        $('.save').show('low');
        $(this).hide('low');
        $('#numero').show('low');
        var inputs = $('#formArticle :input').removeAttr('disabled');

        for(var i=0 ; i<inputs.length ; i++){
            localStorage.setItem($(inputs[i]).attr('name'),$(inputs[i]).val());
        }

    });

    $('.cancelar').click(function(){

        $('.cancelar').hide('low');
        $('.save').hide('low');
        $('.mod').show('low');
        $('small').hide();
        $('#numero').hide('low');
        $('#formArticle')[0].reset();
        $('#formArticle :input').attr('disabled','disabled');
    });


    $('#formArticle :input').blur(function(){

        var error = false;

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
                    console.log(data);
                  

                }
            });  
        }





    });
});