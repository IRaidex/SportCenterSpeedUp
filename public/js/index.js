$(function(){

    $.ajax({
        url: "/articulos/ultimos",
        method: "GET",
        success: function(data){
            for(var i=0 ; i<data.length ; i++){

                var ruta = data[i]['picture'];
                var id = data[i]['idArticle'];
                
                var card = $('<div>').addClass('card m-5 articulos');
                var img = $('<img>').addClass('card-img-top fotoCard').attr({src: '/articulos/'+ruta , alt: 'imgArticulo' , title: 'imgArticulo'});
                var cardBody = $('<div>').addClass('card-body text-center');
                var h5 = $('<h5>').addClass('card-title font-weight-bold subtitulo').html(data[i]['title']);
                var p = $('<span>').addClass('card-text limitado').html(data[i]['content']);
                var cardFooter = $('<div>').addClass('card-footer bg-white text-center bg-light');
                var enlace = $('<a>').addClass('btn titulo text-white botonArticulo').attr('href' ,"/articulo/"+id ).html('Leer más...');
                
                cardFooter.append(enlace);
                cardBody.append(h5);
                cardBody.append(p);
                card.append(img);
                card.append(cardBody);
                card.append(cardFooter);
                $('.rowArticulos').append(card);

            }

            function ellipsis_box(elemento, max_chars){
                limite_text = $(elemento).text();
                if (limite_text.length > max_chars)
                {
                    limite = limite_text.substr(0, max_chars)+" ...";
                    $(elemento).text(limite);
                }
            }

            var elemento = $('.limitado');

            for(var i=0 ; i<elemento.length ; i++){
                ellipsis_box(elemento[i], 120);
            }
        }
    });

    $('.rowArticulos').on('click','.botonArticulo',function(){

        var id = $(this).attr('id');

        $.ajax({
            url: "/articulo/{id}"+id,
            method: "GET",
            success: function(data){

            }
        });

    });

});