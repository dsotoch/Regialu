
var datos = {};
var filas = "";
var id = "";
$("#div-options").hide();
console.log("Trabajando gestion.js");
function getCookie(name) {
    let cookieValue = null;
    if (document.cookie && document.cookie !== "") {
        const cookies = document.cookie.split(";");
        for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i].trim();
            // Does this cookie string begin with the name we want?
            if (cookie.substring(0, name.length + 1) === name + "=") {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}
const csrftoken = getCookie("csrftoken");

$(document).on('click', '#new-management', function () {
    window.location.href = "/Gestiones/IndexGestion";
});
$(document).on('change', '#current_period', function () {
    let current_period = $(this).val().trim();
    let period = $('#current_period option:selected').text().trim();

    if (current_period != "0") {
        $.ajax({
            type: "GET",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            url: "/Gestiones/InstitucionPeriodo/" + current_period + "/",
            data: { _token: csrftoken },
            success: function (institutions_json) {
                var institutions = institutions_json;
                if (institutions.length > 0) {
                    $('#label_gestion').empty();
                    $('#label_gestion').html("Gestionando Periodo " + period);
                    $('#current_institution').empty();
                    $('#current_institution').prop("disabled", false);
                    $('#current_institution').append($('<option>', {
                        value: "0",
                        text: "Seleccione una Institución"
                    }));
                    for (var i = 0; i < institutions.length; i++) {
                        $('#current_institution').append($('<option>', {
                            value: institutions[i].id,
                            text: institutions[i].nombre
                        }));
                    }
                } else {
                    $('#label_gestion').empty();
                    $('#label_gestion').html("SELECCIONA OTRO PERIODO  PARA GESTIONAR");
                    $('#current_institution').empty();
                    $('#current_institution').append($('<option>', {
                        value: "0",
                        text: "Seleccione una Institución"
                    }));
                    $('#current_institution').prop("disabled", true);
                    error("No Existen Instituciones Activas en el Periodo Seleccionado");

                }
            }
        });
    } else {
        $('#current_institution').empty();
        $('#current_institution').append($('<option>', {
            value: "0",
            text: "Seleccione una Institución"
        }));
        $('#current_institution').prop("disabled", true);

        $('#label_gestion').empty();
        $('#label_gestion').html("SELECCIONA OTRO PERIODO PARA GESTIONAR");
        $('#current_classroom').prop("disabled", true);
        $('#current_classroom').empty();
        $('#current_classroom').append($('<option>', {
            value: "0",
            text: "Seleccione una Aula"
        }));
        error("Seleccione un Periodo Valido");
    }
});
$(document).on('change', '#current_institution', function () {
    let current_institution = $(this).val().trim();
    let institution = $('#current_institution option:selected').text().trim();
    let period = $('#current_period option:selected').text().trim();
    let table = $('.order-listing').DataTable();
    if (current_institution != "0") {

        $.ajax({
            type: "GET",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            url: "/Gestiones/InstitucionSeleccionada/" + current_institution + "/",
            data: "",
            success: function (response) {
                $('#label_gestion').empty();
                $('#label_gestion').html("Gestionando Periodo " + period + "/ Institución " + " " + institution);
                table.clear().draw();
                if (response != 'error') {
                    let classrooms = response
                    if (classrooms.length > 0) {
                        let level = "";
                        for (var i in classrooms) {
                            switch (classrooms[i].nivel) {
                                case 'Primaria':
                                    level = 'Primaria';
                                    break;
                                case 'Secundaria':
                                    level = 'Secundaria';
                                    break;
                                case 'Superior':
                                    level = 'Superior';
                                    break;
                                case 'Afianzamiento':
                                    level = 'Afianzamiento';
                                    break;

                                default:
                                    level = 'Otro';
                                    break;
                            }

                            let newrow = [classrooms[i].id, classrooms[i].grado, classrooms[i].seccion, level, classrooms[i].turno, '<center> <button style="background-color: yellow;" title="Gestionar" id="btn-management"> <i class="fas fa-edit"></i> </button> </center>'];
                            table.row.add(newrow).draw();
                        }
                        $('#titlemodal').html(institution);
                        $('#exampleModal').modal();

                    } else {
                        $('#title-modal').html(institution);
                        $('#exampleModal').modal();
                    }
                } else {

                    error("Seleccione una Institución Valida");

                }

            }
        });
    } else {
        $('#label_gestion').empty();
        $('#label_gestion').html("Gestionando Periodo " + period);
        error("Seleccione una Institución Valida");
    }
});
var aula = "";
$(document).on('click', '#btn-management', function () {

    let institution = $('#current_institution option:selected').text().trim();
    let period = $('#current_period option:selected').text().trim();
    let row = $(this).closest('tr');
    let classroom = $(row.find('td')[0]).text().trim();
    id = classroom;
    let classroom_grade = $(row.find('td')[1]).text().trim();
    let classroom_section = $(row.find('td')[2]).text().trim();
    let classroom_level = $(row.find('td')[3]).text().trim();
    let classroom_turno = $(row.find('td')[4]).text().trim();

    aula = classroom_grade + " " + classroom_section + " " + classroom_level;
    confirmation("Ahora Tienes Opciones de Gestion para el" + " Aula " + " " + classroom_grade + " " + classroom_section + " " + classroom_level +" "+classroom_turno);
    $("#id-classroom").val(classroom);
    $("#aula-asistencia").val(classroom);
    $("#name-classroom").val(aula);
    $("#current_period").prop("disabled", true);
    $("#current_institution").prop("disabled", true);
    $("#div-options").show();
    $('#label_gestion').empty();
    $('#label_gestion').html("Gestionando Periodo " + period + "/ Institución " + " " + institution + "/ Aula " + " " + classroom_grade + " " + classroom_section + " " + classroom_level +" "+classroom_turno);
});

$(document).on('click', '#btn-assistance', function () {
    $("#order-listing4").DataTable().destroy();

    let id = $("#id-classroom").val();
    let table = $('#order-listing3').DataTable();
    let classroom = aula;
    table.clear().draw();
    let parseaula = aula.replace(/ /g, "-");
    $.ajax({
        type: "GET",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        url: "/Gestiones/RetornarEstudiantes/" + id + "/",
        data: { _token: csrftoken },

        success: function (response) {
            console.log(response);
            let students = response;
            if (response != 'error') {
                if (students.length > 0) {
                    $("#div-asistencia").prop("hidden", false);

                    $("#btn-assistance").prop("disabled", true);

                    for (var n in students) {
                        let newrow = ['<button title="Click para Generar Reporte del Alumno Seleccionado" class="btn btn-info btn-icon-text" id="btn-report-assistance"> <i class="fas fa-file btn-icon-prepend"></i> Reporte de Asistencia </button>', students[n].id, students[n].apellidos, students[n].nombres, classroom, ' <div class="row"><div class="col-4"><input class="btn-success"  type="radio" name="state' + [n] + '"  id="state"  value="A"> A</div><div class="col-4"><input class="btn-success"  type="radio" name="state' + [n] + '" id="state"  value="F"> F</div><div class="col-4"><input class="btn-success"  type="radio"  name="state' + [n] + '"  id="state"  value="T"> T</div></div>'];
                        table.row.add(newrow).draw();
                    }

                } else{
                    error("No Existen Alumnos Inscritos en esta Aula");
                }
            }
        }
    });

    $.ajax({
        type: "GET",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        url: "/Gestiones/HorariosEstudiante/" + id + "/",
        data: { _token: csrftoken },
        success: function (response) {
            console.log(response);
                if(response.length>0){
                for (var n in response) {
                    $("#horario").append($("<option></option>").attr("value", response[n].idHorario).text(response[n].area + "/" + response[n].dia + "/" + response[n].horaInicio + "/" + response[n].horaFin + "/ TURNO :" + response[n].turno));

                }
            } else {
                error("No Existen Horarios Asociados a esta Aula ...Ocurrira un Error al tratar de Registrar la Asistencia")

            }

        }
    });
});

$(document).on('click', '#state', function () {
    let state = $(this).val();
    let row = $(this).closest('tr');
    let id_student = $(row.find('td')[1]).text().trim();
    datos[id_student] = state;
    let table = $("#order-listing3").DataTable();
    filas = table.rows().count();
    var count = Object.keys(datos).length;
    if (count < filas) {
        $('#save-assistance').prop("disabled", true);
    } else {
        $('#save-assistance').prop("disabled", false);

    }

});

function confirmation(text) {
    swal({
        title: "Felicitaciones",
        icon: "success",
        text: text,
        value: true,
        confirmButtonText: "Ok",
    }).then((value) => {
        $('#exampleModal').modal('hide');
    });
}


//ASISTENCIA.JS
console.log("Trabajando asistencia.js");
$(document).on('click', '#save-assistance', function () {
    let area = $("#area-oculta").val();
    let horario=$("#horario option:selected").val();
    if (area == "") {
        error("Seleccione Un Horario Para Poder Gestionar la Asistencia del Area que le pertenece A Dicho horario");
    } else {
        $.ajax({
            type: "get",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            url: "/Asistencias/GuardarAsistencia/" + id + "/",
            data: { 'data': datos, 'area': area,'horario':horario, _token: csrftoken },
            
            success: function (response) {
                if (response.response == 'success') {
                    confirmationassistance("Asistencia Registrada Correctamente");
                } else {
                    if (response.response == 'existe') {
                        error("Ya se Registró la Asistencia el día de Hoy .. Intenta Modificar la Asistencia");

                    } else {

                        error("Hubo un Error al Registrar la Asistencia...Intentalo Nuevamente");
                    }
                }
            }
        });
    }
});


$(document).on('click', '#btn-update-assistance', function () {
    $('#order-listing').DataTable().destroy();
    $('#order-listing2').DataTable().destroy();
    $('#order-listing3').DataTable().destroy();
    $("#order-listing4").DataTable().destroy();

    let parseaula = aula.replace(/ /g, "-");

    $("#div-asistencia").prop("hidden", true);
    $("#div-assistance").load("/Asistencias/UpdateAssistance/" + parseaula);


});
var updatedata = {};
var fecha = "";
$(document).on('click', '#search', function () {
    let horario=$("#horario option:selected").val();

    $('#order-listing2').DataTable().search(" ");
    let table = $('#order-listing2').DataTable();
    let date = $("#search-date").val();
    let idaula = id;
    if ($("#search-date").val() == "") {
        error("Seleccione la fecha para Buscar la Asistencia");
    } else {
        $("#label-search").text(date);
        $.ajax({
            type: "GET",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: { _token: csrftoken ,'horario':horario},
            url: "/Asistencias/GetAssistance/" + date + "/" + idaula + "/",
            success: function (response) {
                table.clear().draw();

                var students = response;
                if (response.response != 'error') {

                    if (students.length > 0) {
                        let newrow = [];

                        for (var n in students) {
                            let estado = students[n].estado;
                            switch (estado) {
                                case "A":
                                    newrow = [students[n].id, students[n].apellidos, students[n].nombres, aula, ' <div class="row"><div class="col-4"><input class="btn-success"  type="radio" name="state' + [n] + '"  id="state-update"  value="A" checked> A</div><div class="col-4"><input class="btn-success"  type="radio" name="state' + [n] + '" id="state-update"  value="F" > F</div><div class="col-4"><input class="btn-success"  type="radio"  name="state' + [n] + '"  id="state-update"  value="T"> T</div></div>'];

                                    break;
                                case "F":
                                    newrow = [students[n].id, students[n].apellidos, students[n].nombres, aula, ' <div class="row"><div class="col-4"><input class="btn-success"  type="radio" name="state' + [n] + '"  id="state-update"  value="A"> A</div><div class="col-4"><input class="btn-success"  type="radio" name="state' + [n] + '" id="state-update"  value="F" checked> F</div><div class="col-4"><input class="btn-success"  type="radio"  name="state' + [n] + '"  id="state-update"  value="T"> T</div></div>'];

                                    break;

                                default:
                                    newrow = [students[n].id, students[n].apellidos, students[n].nombres, aula, ' <div class="row"><div class="col-4"><input class="btn-success"  type="radio" name="state' + [n] + '"  id="state-update"  value="A"> A</div><div class="col-4"><input class="btn-success"  type="radio" name="state' + [n] + '" id="state-update"  value="F" > F</div><div class="col-4"><input class="btn-success"  type="radio"  name="state' + [n] + '"  id="state-update"  value="T" checked> T</div></div>'];

                                    break;
                            }
                            updatedata[students[n].id] = students[n].estado;
                            table.row.add(newrow).draw();
                        }
                        
                    } else {
                        error("No Existe Asistencia Registrada de esa fecha en esta Aula");

                    }
                } else {
                    error("No Existe Asistencia Registrada de esa fecha en esta Aula");
                }

            }
        });
    }
});
$(document).on('click', '#cancel', function () {
    $("#div-asistencia").prop("hidden", false);
    $('#save-assistance').prop("disabled", true);

});
$(document).on('click', '#state-update', function () {
    let row = $(this).closest('tr');
    let id = $(row.find('td')[0]).text().trim();
    let new_state = $(this).val();
    updatedata[id] = new_state;

});
$(document).on('click', '#update-assistance', function () {
    let horario=$("#horario option:selected").val();

    fecha = $("#search-date").val();
    $.ajax({
        type: "get",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        url: "/Asistencias/UpdateAssistanceData/" + id + "/" + fecha + "/",
        data: { 'data': updatedata,'horario':horario, _token: csrftoken },
        success: function (response) {
            if (response.response == 'success') {
                confirmationassistance("Asistencia Actualizada Correctamente");
            } else {
                error("Hubo un Error al Registrar la Asistencia...Intentalo Nuevamente");

            }

        }

    });
});

$(document).on('click', '#btn-report-assistance', function () {
    let horario=$("#horario option:selected").val();

    let row = $(this).closest('tr');
    let idstudent = $(row.find('td')[1]).text().trim();
    let aula = $("#aula-asistencia").val();
    let periodo = $("#current_period option:selected").text();
    let institucions = $("#current_institution option:selected").text();
    let area = $("#area-oculta").val();
    let data = {
        'aulas': aula,
        'periodo': periodo,
        'institucions': institucions,
        'area': area, _token: csrftoken,
        'horario':horario,
    }
    if (area == "") {
        error("Selecciona un Horario para Realizar el Reporte de la Asistencia del Area que Pertenece a Dicho Horario");
    } else {

        $.ajax({
            type: "get",
            url: "/Asistencias/ReportStudent/" + idstudent + "/",
            data: (data),
            success: function (response) {
                $("#modalReport").modal();
                $("#pdfReport").empty();
                $("#pdfReport").html(response);

            }
        });
    }
});

$(document).on('change', '#horario', function () {
    let area = $("#horario option:selected").val();
    let area2 = $("#horario option:selected").text();
    let parseArea = area2.split("/")[0];
    if (area == '0') {
        error("Seleccione una Opción Valida");
        $("#id_area_asistencia").empty();
        $("#id_area_asistencia").text("Seleccione un Horario");

        $("#area-oculta").val("");


    } else {
        $("#id_area_asistencia").empty();
        $("#id_area_asistencia").text(parseArea);
        $("#area-oculta").val(area);
    }



});
$(document).on('click', '#generatePDF', function () {
    $.ajax({
        type: "get",
        url: "/Asistencias/SavePDF/",
        data: { 'html': $("#pdfReport").html(), _token: csrftoken },


        success: function (response) {
            // Crear un enlace con el contenido devuelto
            var link = document.createElement('a');
            link.href = 'data:application/pdf;base64,' + response.pdf;
            link.download = 'nombre-del-archivo.pdf';
            link.target = '_blank';

            // Hacer que el usuario haga clic en el enlace para descargar el archivo
            link.click();

            $("#modalReport").modal('hide');
            confirmation("PDF generado Correctamente || Revisa tu carpeta de Descargas");

        }
    });
});
function confirmationassistance(text) {
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
