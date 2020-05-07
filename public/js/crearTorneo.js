$(function(){
    $('#crear').click(function(){
        $.ajax({
            url: "/createTournament",
            method: "GET",
            data: $('#tournament').serialize(),
            success: function(data){
                console.log(data);
            }
        });
    });





});
