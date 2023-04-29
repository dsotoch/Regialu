
console.log("Trabajando incidencia.js");
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

$(document).on('click', '#btn-incident', function () {
    $(this).prop("disabled", true);
    let idaula = $("#id-classroom").val();
    $("#div-asistencia").prop("hidden", true)

    $("#div-assistance").empty();
    $("#div-assistance").load("/Incidentes/IndexIncidentes/" + idaula + "/");



});

var obj_students = [];
$(document).on('click', '#select-student-incident', function () {
    let row = $(this).closest('tr');
    let id_student = $(row.find('td')[0]).text().trim();

    let surnames_student = $(row.find('td')[1]).text();

    let res = $.grep(obj_students, function (e) {
        return e === id_student;
    });
    if (res == false) {
        obj_students.push(id_student);

        $("#div-students-incident").append("<div class='col-6 btn-success'><button title='Click para Eliminar' id='btn-delete-student'>X</button><input type='text' value=" + id_student + " hidden>" + surnames_student + "</div>");

    } else {
        error("Alumno ya Seleccionado...Seleccione otro");
    }

});
$(document).on('click', '#btn-delete-student', function (e) {
    e.preventDefault();
    var studentId = $(this).parent().find("input[type='text']").val();
    let index = obj_students.indexOf(studentId);
    if (index > -1) {
        obj_students.splice(index, 1);

    }
    $(this).parent().remove();

});
$(document).on('click', '#btn-clean-incident', function (e) {
    e.preventDefault();
    $("#div-students-incident").empty();
    $("#incident-description").val(" ");
    $("#incident-date").val(" ");
    obj_students = [];

});
$(document).on('click', '#btn-save-incident', function (e) {
    e.preventDefault();
    let description = $("#incident-description").val();
    let date = $("#incident-date").val().trim();
    let classroom = $("#id-classroom").val();
    let table = $("#order-listing4").DataTable();
    if (obj_students.length <= 0) {
        error("Agregue Alumnos Responsables del Incidente");
    } else {
        if (description === "" || date === "") {
            error("Complete todos los Campos");

        } else {
            $.ajax({
                type: "get",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                url: "/Incidentes/GuardarIncidente",
                data: { 'classroom': classroom, 'description': description, 'date': date, 'students': obj_students, _token: csrftoken },
                success: function (response) {
                    let data = response;
                    if (response != 'error') {
                        $("#exampleModal3").modal("hide");
                        let newrow = [data.id, data.fecha, data.descripcion, ' <div class="row"><div class="col-6">  <button class="btn-success" id="view-students" title="Click para Ver Alumnos Responsables"> <i class="fas fa-eye"></i> </button></div><div class="col-6">   <button class="btn-danger" id="delete-incident" title="Click para Eliminar Incidencia"> <i class="fas fa fa-window-close"></i> </button></div></div>'];
                        table.row.add(newrow).draw();
                        confirmation("Incidencia Registrada Correctamente");
                    } else {
                        error("Hubo un Error al Registrar las Incidencia ...Intentalo Nuevamente");
                    }

                }
            });
        }
    }


});

$(document).on('click', '#view-students', function () {
    $("#exampleModal_student").modal();
    let row = $(this).closest('tr');
    let id_incident = $(row.find('td')[0]).text().trim();
    let description = $(row.find('td')[2]).text();
    let fechas = $(row.find('td')[1]).text();
    $.ajax({
        type: "GET",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        url: "/Incidentes/GetStudentsIncident/" + id_incident + "/",
        data: {_token:csrftoken},
        success: function (response) {
            let data = response;
            if (response != 'error') {
                $("#incident-description").html(description);
                $("#modal-responsible-students").empty();
                $("#description").text();
                $("#description").text(description);
                $("#fecha-incidencias").val(fechas);
                for (var n in data) {
                    $("#modal-responsible-students").append('<div class="preview-item border-bottom px-0"><div class="preview-item-content d-flex flex-grow"><div class="flex-grow"><h6 class="preview-subject">' + data[n].apellidos + ' ' + data[n].nombres + '</h6><p id="responsible">Responsable del Incidente</p></div></div></div>');

                }

            } else {
                error("Error de manejo de Sistema");
            }

        }
    });
});


$(document).on('click', '#delete-incident', function (e) {
    e.preventDefault();
    let row = $(this).closest('tr');
    let table = $("#order-listing4").DataTable();
    let id_incident = $(row.find('td')[0]).text().trim();
    swal({
        title: 'Confirmación',
        text: '¿Seguro de Eliminar La Incidencia?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3f51b5',
        cancelButtonColor: '#ff4081',
        confirmButtonText: 'Great',
        buttons: {
            cancel: {
                text: "Cancelar",
                value: null,
                visible: true,
                className: "btn btn-danger",
                closeModal: true,
            },
            confirm: {
                text: "OK",
                value: true,
                visible: true,
                className: "btn btn-primary",
                closeModal: true
            }
        }
    }).then((value) => {
        if (value == true) {
            $.ajax({
                type: "get",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                url: "/Incidentes/DeleteIncident/" + id_incident + "/",
                data: {_token:csrftoken},
                success: function (response) {

                    if (response != 'error') {
                        table.row(row).remove().draw();
                        confirmation("Incidencia Eliminada Correctamente");
                    } else {
                        error("Error de manejo de Sistema...Intentalo Nuevamente");
                    }

                }
            });
        }
    });

});

$(document).on('click', "#generatePDFIncident", function () {
    $("#exampleModal_student").modal('hide');
    $("#modalReporte").modal();
    let fecha_incidencia = $("#fecha-incidencias").val();
    let descripcion = $("#description").text();
    let responsables = $("#modal-responsible-students")[0].outerHTML;
    $("#descripcion-reporte").text(descripcion);
    $("#alu").html(responsables);
    $("#fecha-").text(fecha_incidencia);

});
$(document).on('click', '#PDFIncident', function () {
    $.ajax({
        type: "get",
        data: { 'html': $("#incidente-reporte").html(),_token:csrftoken },
        url: "/Incidentes/Pdf",

        success: function (response) {
             // Crear un enlace con el contenido devuelto
             var link = document.createElement('a');
             link.href = 'data:application/pdf;base64,' + response.pdf;
             link.download = 'nombre-del-archivo.pdf';
             link.target = '_blank';
 
             // Hacer que el usuario haga clic en el enlace para descargar el archivo
             link.click();
 
            $("#modalReporte").modal('hide');
            confirmation("PDF generado Correctamente || Revisa tu carpeta de Descargas");


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

