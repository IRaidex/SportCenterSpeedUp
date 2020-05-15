$(function(){

    var total_letras = 200;
    $('#coment').keyup(function() {
        var longitud = $(this).val().length;
        var resto = total_letras - longitud;
        $('#numero').html(resto).css('color','#E1523D');
        if(resto <= 0){
            $('#coment').attr("maxlength", 200);
        }
    });

});