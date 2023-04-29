

$(document).on('click', '#btn-grupos', function () {
    $(this).prop('disabled', true);
    let id = $("#id-classroom").val();
    $.ajax({
        type: "get",
        url: "/Grupos/GestionGrupos",
        data: "",
        success: function (response) {
            $.ajax({
                type: "get",
                url: "/Grupos/GestionGrupos/" + id + "/",
                data: { _token: $("#gestio input[name='csrf-token']").val() },
                dataType: "json",
                success: function (response) {
                    let ob = response;
                    $.each(ob, function (indexInArray, ob) { 
                        $("#id_horario").append($("<option></option>").attr("value", ob.idHorario).text(ob.area + "/" + ob.turno + "/" + ob.dia + "/" + ob.horaInicio + "/" + ob.horaFin));

                    });
                }
            });
            $("#div-assistance").html(response);

        }
    });

});
var table = "";
$(document).on('change', '#id_horario', function () {
    let horario = $('#id_horario option:selected').val();
    let texto_horario = $('#id_horario option:selected').text();
    $("#area").text(texto_horario.split("/")[0]);
    let id = horario;
    let aula = $("#id-classroom").val();
    if (horario == '0') {
        error("Seleccione Un Horario Valido");
        $("#area").text("Seleccione un Horario");
        $('#btn-crear').prop('disabled', true);
        $('#numero-de-alumnos').text("0");

    } else {

        $.ajax({
            type: "get",
            url: "/Grupos/Horarios/" + id,
            data: "",
            dataType: "json",
            success: function (response) {
                console.log(response);
                if (response.value == 'error') {
                    error("No Existen Alumnos Registrados en el Aula del Horario Elegido");
                } else {
                    $('#id_horario').prop('disabled', true);
                    $('#numero-de-alumnos').text(response.cantidad_de_alumnos);
                    table = $('#order-listing10').DataTable();
                    $.each(response.alumnos, function (indexInArray, valueOfElement) {
                        let newrow = [valueOfElement.id, valueOfElement.apellidos, valueOfElement.nombres, '<button class="btn btn-info btn-icon-text" title="Click para Asignar" id="btn-modal-asignar"><i class="fas fa-share-square btn-icon-prepend"></i></button>'];
                        table.row.add(newrow).draw();
                    });
                    $('#cards-de-grupos').empty();

                    $.each(response.grupos, function (indexInArray, valueOfElement) {
                        let alumnos = 0;
                        let cant = 0;
                        if (JSON.parse(valueOfElement.alumno_id) == null) {
                            cant = Object.keys(alumnos).length;
                        } else {
                            cant = Object.keys(JSON.parse(valueOfElement.alumno_id)).length;
                        }

                        $('#cards-de-grupos').append('<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="g' + valueOfElement.grupo_id + '"> <div class="card"><div class="card mb-3"><div class="card-body"><div class="row"><div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"><b>GRUPO N°: ' + valueOfElement.grupo_id + '</b></div><div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5"><b>NUMERO DE INTEGRANTES:</b> <b id="integrantes' + valueOfElement.grupo_id + '"> ' + cant + ' </b></div><div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"><button id="ver_detalles" title="Click para Ver los Detalles del Grupo" class="btn btn-dark btn-icon-text"><i class="fas fa-eye btn-icon-prepend"></i><input type="hidden" id="n-grupo" value="' + valueOfElement.grupo_id + '"> </button></div></div><div class="dropdown-divider"></div><div id="imagen-card"><img src="/imagenes/grupos/img'+valueOfElement.grupo_id+'.jpg" alt=""> </div></div></div></div></div>');
                    });
                    $("#cantidad-grupos").text(response.cantidad_grupos);
                    $("#cantidad-sin-grupo").text(response.sinasignar);
                    $("#btn-asignar").prop('disabled', false);
                    if (response.grupos.length>0) {
                        $("#btn-nuevo-grupo").prop('disabled', false);
                    } else {
                        $('#btn-crear').prop('disabled', false);

                    }

                }

            }
        });
    };
    $(document).on('click', '#btn-crear', function () {
        let cantidad_grupos = $("#numero-de-grupos").val();
        let horario = $('#id_horario option:selected').val();

        if (cantidad_grupos == "" || parseInt(cantidad_grupos) <= 0) {
            error('Ingrese una Cantidad Valida');
        } else {
            if (parseInt(cantidad_grupos) > 10) {
                error('El Maximo de grupos es de 10, Si Necesita grupos Adicionales Contactarse con Soporte.');
            } else {

                $.ajax({
                    type: "get",
                    url: " /Grupos/CrearGrupos/" + cantidad_grupos,
                    data: { 'horario': horario },
                    dataType: "json",
                    success: function (response) {
                        if (response.value == true) {
                            $('#cantidad-grupos').text(cantidad_grupos);
                            $('#cards-de-grupos').empty();
                            for (let index = 1; index <= parseInt(cantidad_grupos); index++) {
                                $('#cards-de-grupos').append('<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="g' + index + '"> <div class="card"><div class="card mb-3"><div class="card-body"><div class="row"><div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"><b>GRUPO N°: ' + index + '</b></div><div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5"><b>NUMERO DE INTEGRANTES:</b> <b id="integrantes' + index + '"> 0 </b></div><div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"><button id="ver_detalles" title="Click para Ver los Detalles del Grupo" class="btn btn-dark btn-icon-text"><i class="fas fa-eye btn-icon-prepend"></i><input type="hidden" id="n-grupo" value="' + index + '"> </button></div></div><div class="dropdown-divider"></div><div id="imagen-card"><img src="/imagenes/grupos/img'+index+'.jpg" alt=""> </div></div></div></div></div>');

                            }
                            showSuccessToast("Grupos Creados Correctamente");
                        } else {
                            error("ERROR..Ya Existen Grupos Creados");
                        }
                    }
                });
            }
        }
    });
    $(document).on('click', '#btn-asignar', function () {
        $("#modalGrupos").modal();
    });
    var id_alumno = {};
    var id_alu = "";
    var name = "";
    var surnames = "";
    var fila = "";
    $(document).on('click', '#btn-modal-asignar', function () {
        fila = $(this).closest('tr');
        name = $(fila.find('td')[1]).text();
        surnames = $(fila.find('td')[2]).text();
        id_alu = $(fila.find('td')[0]).text().trim();
        $("#modal-numero-de-grupo").modal();


    });

    $(document).on('click', '#btn-modal-asignar-grupo', function () {
        let numero_grupo = $("#numero-de-grupo").val();
        let nombres = name;
        let apellidos = surnames;
        let integrantes = $('#integrantes' + numero_grupo).text().trim();
        let cantidad_grupos = $('#cantidad-grupos').text().trim();
        if (numero_grupo == "" || parseInt(numero_grupo) <= 0 || parseInt(numero_grupo) > cantidad_grupos) {
            error("Ingresa un Numero de Grupo Valido");
        } else {
            $.ajax({
                type: "get",
                url: "/Grupos/VerificarExistencia/" + id_alu + "/" + numero_grupo,
                data: {
                    'horario': $('#id_horario option:selected').val()
                },
                dataType: "json",
                success: function (response) {
                    if (response.value == true) {
                        let c = $("#cantidad-sin-grupo").text();
                        let id_grupo = $("#g" + numero_grupo + "").find('#imagen-card');
                        $("#modal-numero-de-grupo").modal('hide');
                        let new_integrantes = parseInt(integrantes) + 1;
                        $('#integrantes' + numero_grupo).text(new_integrantes);
                        showSuccessToast("Alumno Añadido Correctamente al Grupo N°" + numero_grupo);
                        $("#cantidad-sin-grupo").text(parseInt(c - 1));
                        table.row(fila).remove().draw();

                    } else {
                        error("Hubo un Error al Tratar de Asignar un Alumno al Grupo , Actualize la Pagina e intentelo Nuevamente")
                    }

                }
            });



        }
    });
});
var id_grupo2 = "";
$(document).on('click', '#ver_detalles', function () {
    id_grupo2 = $(this).find('#n-grupo').val();
    let horario = $('#id_horario option:selected').val();
    $("#tabla_detalles tbody tr").remove();

    $.ajax({
        type: "get",
        url: "/Grupos/DetallesGrupo/" + id_grupo2,
        data: { 'horario': horario },
        dataType: "json",
        success: function (response) {
            if (response.value.length > 0) {
                $.each(response.value, function (indexInArray, e) {
                    var nuevaFila = $("<tr>");
                    var id = $("<td>").text(e.id);
                    var apellidos = $("<td>").text(e.apellidos);
                    var nombres = $("<td>").text(e.nombres);
                    var div = $("<div>").html("<button class='btn btn-warning btn-icon-text' id='mover-alumno-grupo' title='Click para  Mover Integrante '><i class='fas fa-rocket'></i></button><button class='btn btn-danger btn-icon-text' id='eliminar-alumno-grupo' title='Click para  Quitar Integrante '><i class='fas fa-trash'></i></button>");
                    var opciones = $("<td>").html(div);
                    nuevaFila.append(id);
                    nuevaFila.append(apellidos);
                    nuevaFila.append(nombres);
                    nuevaFila.append(opciones);

                    $("#tabla_detalles tbody").append(nuevaFila);
                });
            }

        }
    });
    $("#grupito").text(id_grupo2);

    $("#modal_detalles_de_grupo").modal();
});
var alumno_a_mover = "";
$(document).on('click', '#mover-alumno-grupo', function () {
    $("#modal-mover").modal();
    let row = $(this).closest('tr');
    alumno_a_mover = $(row.find('td')[0]).text().trim();
});
$(document).on('click', '#OK', function () {
    let horario = $('#id_horario option:selected').val();
    let n_grupo = $("#numero_de_grupo_para_mover").val();
    let grupo = id_grupo2;
    let numero_integrantes_grupo = $('#integrantes' + grupo).text();
    let numero_integrantes_nuevo_grupo = $('#integrantes' + n_grupo).text();
    if (parseInt(n_grupo) <= 0 || n_grupo == "") {
        error("Ingresa Un Numero de Grupo Valido");
    } else {
        $.ajax({
            type: "get",
            url: "/Grupos/MoverAlumno/" + n_grupo + "/" + alumno_a_mover + "/" + grupo,
            data: { 'horario': horario },
            dataType: "json",
            success: function (response) {
                if (response.value == true) {
                    showSuccessToast("Se Movio al Alumno Correctamente al Grupo N°" + " " + n_grupo);
                    $('#integrantes' + grupo).text(parseInt(numero_integrantes_grupo) - 1);
                    $('#integrantes' + n_grupo).text(parseInt(numero_integrantes_nuevo_grupo) + 1);

                    $("#modal-mover").modal('hide');
                    $("#modal_detalles_de_grupo").modal('hide');


                }
            }
        });
    }
});
$(document).on('click', '#eliminar-alumno-grupo', function () {
    let row = $(this).closest('tr');
    let alumno = $(row.find('td')[0]).text().trim();
    let nombre_alumno = $(row.find('td')[1]).text().trim() + " " + $(row.find('td')[2]).text().trim();
    let grupo = id_grupo2;
    let horario = $('#id_horario option:selected').val();
    let alumno_a_eliminar = nombre_alumno;
    let id_alumno_a_eliminar = alumno;
    let cantidad_sin_grupo = parseInt($("#cantidad-sin-grupo").text());
    let numero_integrantes_grupo = $('#integrantes' + grupo).text();
    table = $('#order-listing10').DataTable();

    swal({
        title: 'Cuidado!',
        text: 'Seguro de Eliminar al Alumno ' + alumno_a_eliminar + " " + "?",
        icon: 'warning',
        buttons: {
            cancel: {
                text: "Cancel",
                value: null,
                visible: true,
                className: "btn btn-danger",
                closeModal: true,
            },
            confirm: {
                text: "OK",
                value: true,
                visible: true,
                className: "btn btn-success",
                closeModal: true
            }
        }
    }).then((value) => {
        if (value == true) {
            $.ajax({
                type: "get",
                url: "/Grupos/EliminarAlumno/" + id_alumno_a_eliminar + "/" + grupo,
                data: { 'horario': horario },
                dataType: "json",
                success: function (response) {
                    if (response.value == true) {
                        row.remove();
                        $('#integrantes' + grupo).text(parseInt(numero_integrantes_grupo) - 1);
                        $("#cantidad-sin-grupo").text(cantidad_sin_grupo + 1);
                        let newrow = [id_alumno_a_eliminar, $(row.find('td')[1]).text().trim(), $(row.find('td')[2]).text().trim(), '<button class="btn btn-info btn-icon-text" title="Click para Asignar" id="btn-modal-asignar"><i class="fas fa-share-square btn-icon-prepend"></i></button>'];
                        table.row.add(newrow).draw();
                        confirmation("Se Ha Eliminado Correctamente al Alumno" + " " + alumno_a_eliminar + " " + " ,Los Cambios ya Se Deberian Reflejar");
                    } else {
                        error("Hubo un Error Al Eliminar El Alumno del Grupo ,Recargue la Pagina e Intentelo Nuevamente");
                    }
                }
            });
        }
    });
});
$(document).on('click', '#btn-nuevo-grupo', function () {
    let horario = $('#id_horario option:selected').val();
    let cantidad_grupos = parseInt($('#cantidad-grupos').text().trim());

    $.ajax({
        type: "get",
        url: "/Grupos/CrearNuevoGrupo",
        data: {'horario': horario },
        dataType: "json",
        success: function (response) {
            if (response.value == true) {
                $('#cards-de-grupos').append('<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="g' + response.id + '"> <div class="card"><div class="card mb-3"><div class="card-body"><div class="row"><div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"><b>GRUPO N°: ' + response.id + '</b></div><div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5"><b>NUMERO DE INTEGRANTES:</b> <b id="integrantes' + response.id + '"> 0 </b></div><div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"><button id="ver_detalles" title="Click para Ver los Detalles del Grupo" class="btn btn-dark btn-icon-text"><i class="fas fa-eye btn-icon-prepend"></i><input type="hidden" id="n-grupo" value="' + response.id + '"> </button></div></div><div class="dropdown-divider"></div><div id="imagen-card"><img src="/imagenes/grupos/img'+response.id+'.jpg" alt=""> </div></div></div></div></div>');
                $('#cantidad-grupos').text(cantidad_grupos+1);
                confirmation("Se Ha Creado otro Grupo Correctamente ,Los Cambios ya Se Deberian ver Reflejados");

            } else {
                error("Hubo un Error al Crear Un Nuevo grupo Porque ya se Excedieron los 10 grupos Maximos");
            }

        }
    });
});
function confirmation(text) {
    swal({
        title: "Felicitaciones",
        icon: "success",
        text: text,
        value: true,
        confirmButtonText: "Ok",
    }).then((value) => {

    });
}
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