


$('#submit').click(function (event) {
    event.preventDefault();
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var email = $("#email").val();
    var comentarios = $("#comentarios").val();
    // console.log(precio);

    if( nombre != '' && apellido != '' && email !=''){
        $.ajax({
            method: "POST",
            url: "welcome/guardar",
            data: { nombre: nombre, apellido: apellido, email: email, comentarios: comentarios },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                // $("#container").html("no existe el token o no esta autorizado");
            }
        })
            .done(function (msg) {
                console.log(msg);
               // $(".container").hide();
                $("#nombre").val('');
                $("#email").val('');
                $("#apellido").val('');
                $("#comentarios").val('');
                $("#notificacion").html("<p>Gracias por elegirnos </p>");
    
    
    
            });
    }else{
        $("#notificacion").html("<p>Favor cargar los datos, algun dato aun no se encuentra listo </p>");
        $("#notificacion").fadeIn(1500);
        setTimeout(function() {
        $("#notificacion").fadeOut(1500);
    }, 5000);
    }
 

});


