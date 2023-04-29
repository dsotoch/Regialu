$(document).on('click', '#olvidado', function (e) {
    e.preventDefault();
    $("#exampleModal").modal();
});
$(document).on('click', '#recuperar', function (e) {
    e.preventDefault();
    var tokenFormulario1 = $('#miform2 input[name="csrf_token"]').val();

    let email = $("#email").val();
    let dni = $("#dni").val();
    let da = { 'email': email, 'dni': dni, _token: tokenFormulario1 };

    if (email == "" || dni == "") {
        error("Completa todos los Campos");
    } else {
        $("#exampleModal").modal('hide');

        $("#exampleModal2").modal();

        $.ajax({

            type: "get",
            url: "/Login/RecuperarPass",
            data: da,
            dataType: "json",
            success: function (response) {
                if (response.value == false) {
                    $("#exampleModal").modal();
                    $("#exampleModal2").modal('hide');
                    error("El email Proporcionado no es Valido o no esta Asociado a Su cuenta");
                } else {
                    $("#exampleModal2").modal('hide');
                    confirmation("Se Ha enviado un Correo Electronico al Email con Instrucciones.. Revise su Bandeja de Mensajes");
                }
            }
        });


    }
});
$(document).on('click', '#pass', function (e) {
    e.preventDefault();
    $("#pas").modal();
});
$(document).on('click', '#cambi', function (e) {
    e.preventDefault();
    var tokenFormulario1 = $('#miForm input[name="csrf_token"]').val();

    let pass = $("#contra").val();
    let da = { 'password': pass,_token:tokenFormulario1};
    if (pass == "") {
        error("Completa todos los Campos");
    } else {
        $.ajax({
            type: "get",
            url: "/Cuenta/CambiarPassword",
            data: { 'password': pass, _token: $('#csrf[name="csrf_token"]').val() },
            dataType: "json",
            success: function (response) {
                $("#pas").modal('hide');
                if (response.value == true) {
                    swal({
                        title: "Confirmación",
                        icon: "success",
                        text: "Se Ha Actualizado Correctamente su Constraseña,Inicie Sesion Nuevamente para que Se Reflejen los Cambios",
                        value: true,
                        confirmButtonText: "Ok",
                    }).then((value) => {
                        window.location.href = '/Login/IniciarSesion';


                    });
                } else {
                    error("Hubo un Error Al cambiar El Passowrd ,recargue la Pagina e Intentelo Nuevamente");
                }
            }
        });


    }
});
function error(text) {
    swal({
        title: "ERROR",
        icon: "error",
        text: text,
        value: true,
        confirmButtonText: "Ok",
    }).then((value) => {

    });
}
function confirmation2(text, dni) {
    swal({
        title: "Felicitaciones",
        icon: "success",
        text: text,
        value: true,
        confirmButtonText: "Ok",
    }).then((value) => {

        window.location.href = '/Login/IniciarSesion'

    });
}
function confirmation(text, dni) {
    swal({
        title: "Felicitaciones",
        icon: "success",
        text: text,
        value: true,
        confirmButtonText: "Ok",
    }).then((value) => {
        window.location.reload();


    });
}