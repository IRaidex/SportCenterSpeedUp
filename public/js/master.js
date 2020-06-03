$(function(){
    //Funcion que comprueba el valor de la clase Strong al hacer login y si salta un mensaje de error se vuelve a mostrar el login
    $('.strong').each(function(){
        if($(this).html() != ""){
            $('#log').trigger('click');
        }
    });
    
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('a.scroll-top').fadeIn('slow');
        } else {
            $('a.scroll-top').fadeOut('slow');
        }
    });
    $('a.scroll-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 600);
    });

});