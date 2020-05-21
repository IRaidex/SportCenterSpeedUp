$(function(){

    $('#avisoTitle').hide();
    $('#avisoContent').hide();
    $('#avisoTag').hide();
    $('#avisoFile').hide();

    var total_letras = 5000;
    $('#articulo').keyup(function() {
        var longitud = $(this).val().length;
        var resto = total_letras - longitud;
        $('#numero').html(resto).css('color','#E1523D');
        if(resto <= 0){
            $('#content').attr("maxlength", 5000);
        }
    });


    $('#crear').click(function(){

        $(this).preventDefault;

        var error = false;

        var campos = $('#formArticle :input');

        $('#avisoTitle').hide();
        $('#avisoContent').hide();
        $('#avisoTag').hide();
        $('#avisoFile').hide();

        for(var i=0 ; i<campos.length ; i++){

            error = false;

            if(campos[i].type == 'text'){
                if(campos[i].name == 'title'){
                    if(campos[i].value == "" || campos[i].value.length > 75 || campos[i].value.length < 5){
                        $('#avisoTitle').show();
                        error = true;
                    }else{

                    }
                }else if(campos[i].name == 'tag1' || campos[i].name == 'tag2' || campos[i].name == 'tag3'){
                    if(campos[i].value == "" || campos[i].value.length < 3 || campos[i].value.length > 15){
                        $('#avisoTag').show();
                        error = true;
                    }
                }
            }
        }

        var articulo = $('textarea');
        if(articulo.val() == "" || articulo.val().length < 5){
            $('#avisoContent').show();
            error = true;
        }

        var file = $('#file');
        if(file.val() == ""){
            $('#avisoFile').show();
            error = true;
        }

        if(!error){
            $('#crear').submit();
        }

    });    


});
