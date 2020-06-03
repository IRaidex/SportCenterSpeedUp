$(function(){
    //Peticion AJax que carga los packs de la BBDD y los montan en la vista index
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

    //Peticion AJax que carga los 3 ultimos articulos de la BBDD y los montan en la vista index
    $.ajax({
        url: "/pack/all",
        method: "GET",
        success: function(data){
            for(var i=0 ; i<data.length ; i++){

                var card = $('<div>').addClass('card m-5 inscribete');
                var header = $('<div>').addClass('card-header titulo text-center');
                var h2 = $('<h2>').addClass('text-white text-uppercase font-weight-bold').html(data[i].name);
                var h1 = $('<h1>').addClass('text-white text-uppercase font-weight-bold').html(data[i].price);
                var h3 = $('<h3>').addClass('text-white').html('€ / Mes');
                var body = $('<div>').addClass('card-body text-center');
                var h5 = $('<h5>').addClass('card-title font-weight-bold subtitulo').html('Matrícula 0.00 €');
                var span = $('<span>').addClass('card-text');

                var footer = $('<div>').addClass('card-footer bg-white text-center');
                var a = $('<a>').addClass('btn titulo text-white').attr('href','/inscribete').html('INSCRÍBETE');

                footer.append(a);

                for(var j=0 ; j<data[i]['servicios'].length ; j++){
                    span.append($('<p>').html(data[i]['servicios'][j]['name']));
                }

                body.append(h5);
                body.append(span);
                header.append(h2);
                header.append(h1);
                header.append(h3);
                card.append(header);
                card.append(body);
                card.append(footer);
                $('.rowPacks').append(card);

            }
        },dataType: 'json',
    });

});