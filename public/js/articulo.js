$(function(){

    var error = false;
    var comentario = $('#content');

    comentario.keyup(function(){

        if(comentario.val() != ""){
            $('#enviar').removeClass('disabled');
            error = true;
            console.log(error);
        }else{
            $('#enviar').addClass('disabled');
            error = false;
            console.log(error);
        }

    });

    $('#enviar').click(function(){

        if(!$(this).hasClass('disabled')){
            $('#caja').fadeOut('slow', function(){
                $.ajax({
                    url: "/articulo/comentario/create",
                    method: "POST",
                    data: $('#formComent').serialize(),
                    success: function(data){
             
                        var divPadre = $('<div>').addClass('ml-lg-5 row my-4 justify-content-end');
                        var div1 = $('<div>').addClass('col-lg-1 col-md-2 col-3 align-self-md-center');
                        var enlace = $('<a>');
                        var img = $('<img>').attr({src: '/perfil/'+data['picture'] , alt: 'imagenPerfil'}).addClass('imgPerfil');
                        var div2 = $('<div>').addClass('col-lg-8  col-md-7 col-8 align-self-md-center');
                        var span = $('<span>').addClass('text-left font-weight-bold text-sm-left').html(data['nombre']+' '+data['apellido1']+' '+data['apellido2']);
                        var parrafo1 = $('<p>').addClass('text-left').html(data['date']);
                        var parrafo2 = $('<p>').addClass('mt-2 text-justify limitado').html(data['content']);
                        var hr = $('<hr>').addClass('w-50 justify-content-end');

                        enlace.append(img);
                        div1.append(enlace);
                        divPadre.append(div1);
                        div2.append(span);
                        div2.append(parrafo1);
                        div2.append(parrafo2);
                        divPadre.append(div2);

                        $('#comentario').after(divPadre);
                        $('#comentario').after(hr);

                        $('#content').val("");

                    },dataType:'json',
                });
            });
            $('#caja').fadeIn('slow')
        }
    });





});
