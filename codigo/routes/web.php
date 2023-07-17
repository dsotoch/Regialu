<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerAlumnos;
use App\Http\Controllers\ControllerAreas;
use App\Http\Controllers\ControllerAsistencias;
use App\Http\Controllers\ControllerAulas;
use App\Http\Controllers\ControllerComentarios;
use App\Http\Controllers\ControllerCuenta;
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\ControllerGestions;
use App\Http\Controllers\ControllerGrupoAlumnos;
use App\Http\Controllers\ControllerHorarios;
use App\Http\Controllers\ControllerIncidentes;
use App\Http\Controllers\ControllerInstitucions;
use App\Http\Controllers\ControllerLicencias;
use App\Http\Controllers\ControllerNotas;
use App\Http\Controllers\ControllerPeriodos;
use App\Http\Controllers\ControllerPortafolio;
use App\Http\Controllers\ControllerTransaccion;
use App\Http\Controllers\ControllerUsuarioLogin;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\Control;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/RegialuSit', function () {
    return view('principal');
})->name('regialu');
Route::controller(ControllerUsuarioLogin::class)->prefix('Login')->group(function () {
    Route::post('GuardarUsuario', 'crear_usuario');
    Route::get('Registrarse', 'vista_registrarse')->name('register');
    Route::get('IniciarSesion', 'vista_iniciar_sesion')->name('customlogin');
    Route::get('Loguearse', 'loguearse');
    Route::get('logout', 'cerrar_sesion');
    Route::get('RecuperarPass', 'restablecer_pass');
    // Route::post('Email','enviar_email');

});
Route::controller(ControllerCuenta::class)->prefix('Cuenta')->group(function () {
    Route::get('MiCuenta', 'vista_cuenta_index');
    Route::get('CambiarPassword', 'cambiar_password');
});
Route::controller(PaymentController::class)->prefix('Pagos')->group(function () {
    Route::get('payment', 'checkout')->name('checkout');
    Route::get('cancel', 'cancel')->name('paypal.cancel');
    Route::get('payment/success', 'success')->name('paypal.success');
    Route::get('Detalles', 'ejecutar_pago');
});
Route::controller(ControllerLicencias::class)->prefix('Licencias')->group(function () {
    Route::get('Activar', 'activar_licencia');
    Route::get('Verificar', 'verificar_licencia');
});
Route::controller(ControllerTransaccion::class)->prefix('Transacciones')->group(function () {
    Route::get('Resumen', 'resumen');
});

Route::middleware('canAccess')->controller(ControllerPeriodos::class)->prefix('Periodos')->group(function () {
    Route::get('IndexPeriodos', 'vista_periodo')->name('index_periodo');
    Route::get('CrearPeriodo', 'crear_periodo');
    Route::get('EliminarPeriodo/{id}', 'eliminar_periodo');
    Route::get('EstadoPeriodo/{id}', 'cambiar_estado_periodo');
});
Route::middleware('canAccess')->controller(ControllerInstitucions::class)->prefix('Instituciones')->group(function () {
    Route::get('IndexInstitucions', 'index_instituciones')->name('index_instituciones');
    Route::get('CrearInstitucion', 'save_instituciones');
    Route::get('EstadoInstitucion/{id}', 'status_change');
    Route::get('EliminarInstitucion/{id}', 'delete_instituciones');
    Route::get('ModificarInstitucion/{id}/{period}', 'update_instituciones');
});
Route::middleware('canAccess')->controller(ControllerAulas::class)->prefix('Aulas')->group(function () {
    Route::get('IndexAulas', 'index_aulas')->name('index_aulas');
    Route::get('GuardarAula', 'save_Aula');
    Route::get('TodasAulas', 'all_classrooms');
    Route::get('EstadoAula/{id}', 'cambiar_estado');
    Route::get('EliminarAula/{id}', 'delete_aula');
    Route::get('EditarAula/{id}', 'update_aula');
    Route::get('InstitucionSeleccionada/{id}', 'InstitucionSeleccionada');
});
Route::middleware('canAccess')->controller(ControllerAreas::class)->prefix('Areas')->group(function () {
    Route::get('IndexAreas', 'index_areas')->name('index_areas');
    Route::get('GuardarArea', 'area_save');
    Route::get('EstadoArea/{id}', 'area_status_change');
    Route::get('EliminarArea/{id}', 'area_delete');
});
Route::middleware('canAccess')->controller(ControllerHorarios::class)->prefix('Horarios')->group(function () {
    Route::get('IndexHorario', 'index_horario')->name('index_horario');
    Route::get('GuardarHorario', 'horario_save');
    Route::get('EstadoHorario/{id}', 'horario_status_change');
    Route::get('EliminarHorario/{id}', 'horario_delete');
    Route::get('ModificarHorario/{id}', 'horario_update');
    Route::get('AsignarAula/{id}', 'classroom_assign');
    Route::get('AsignarDatosAula/{id}', 'classroom_data_assign');
    Route::get('DetalleAula/{id}', 'classroom_details');
    Route::get('DesasignarAula/{id}/{idHorario}', 'unlink_classroom');
});
Route::middleware('canAccess')->controller(ControllerAlumnos::class)->prefix('Alumnos')->group(function () {
    Route::get('IndexAlumno', 'students_all')->name('indexAlumnos');
    Route::get('TodoAlumnos', 'students_all')->name('students_all');
    Route::get('EditarAlumno/{id}', 'update_student');
    Route::get('InstitucionSeleccionada/{id}', 'institution_selected');
    Route::get('EliminarAlumno/{id}', 'delete_student');
    Route::get('GuardarAlumno', 'save_student');
});
Route::middleware('canAccess')->controller(ControllerGestions::class)->prefix('Gestiones')->group(function () {
    Route::get('IndexGestion', 'management_view')->name('indexGestion');
    Route::get('InstitucionPeriodo/{id}', 'get_institution_by_period');
    Route::get('InstitucionSeleccionada/{id}', 'get_aulas');
    Route::get('RetornarEstudiantes/{id}', 'get_students');
    Route::get('HorariosEstudiante/{id}', 'get_students_horario');
});
Route::middleware('canAccess')->controller(ControllerAsistencias::class)->prefix('Asistencias')->group(function () {
    Route::get('GuardarAsistencia/{id}', 'save_assistance');
    Route::get('UpdateAssistance/{id}', 'update_assistance');
    Route::get('GetAssistance/{date}/{idaula}', 'get_assistance');
    Route::get('UpdateAssistanceData/{id}/{date}', 'update_assistance_data');
    Route::get('ReportStudent/{id}', 'generate_pdf');
    Route::get('SavePDF', 'savePDF');
});
Route::middleware('canAccess')->controller(ControllerIncidentes::class)->prefix('Incidentes')->group(function () {
    Route::get('IndexIncidentes/{id}', 'index_incident');
    Route::get('GuardarIncidente', 'save_incident');
    Route::get('DeleteIncident/{id}', 'delete_incident');
    Route::get('GetStudentsIncident/{id}', 'get_students');
    Route::get('Pdf', 'pdf');
});
Route::middleware('canAccess')->controller(ControllerNotas::class)->prefix('Notas')->group(function () {
    Route::get('IndexNotas', 'index_notas');
    Route::get('GetHorario/{id}', 'get_horario');
    Route::get('GetStudentsNote/{id}', 'get_students');
    Route::get('SaveNote', 'save_note');
    Route::get('GetNotes/{idaula}/{idalumno}/{areas}', 'get_notes');
    Route::get('UpdateNote/{id}', 'update_note');
    Route::get('pdfSelected', 'pdf_selected');
    Route::get('Generate', 'generate_pdf');
});
Route::controller(ControllerDashboard::class)->prefix('Dashboard')->group(function () {
    Route::get('Administraciones', 'index')->name('dashboard');
    Route::get('Horario', 'get_data_horario');
    Route::get('data', 'get_data');
});
Route::middleware('canAccess')->controller(ControllerGrupoAlumnos::class)->prefix('Grupos')->group(function () {
    Route::get('GestionGrupos', 'index');
    Route::get('GestionGrupos/{id}', 'get_horario');
    Route::get('CrearGrupos/{cantidad}', 'crear_grupos');
    Route::get('Horarios/{id}', 'get_alumnos');
    Route::get('VerificarExistencia/{id}/{grupo}', 'get_existencia');
    Route::get('DetallesGrupo/{id}', 'get_detalles_grupo');
    Route::get('MoverAlumno/{nuevo_grupo}/{id}/{grupo}', 'mover_alumno');
    Route::get('EliminarAlumno/{id}/{grupo}', 'eliminar_alumno');
    Route::get('CrearNuevoGrupo', 'crear_nuevo_grupo');
});

Route::controller(ControllerPortafolio::class)->prefix('Portafolio')->group(function () {
    Route::get('PreciosRegialu', 'PreciosRegialuSit');
});


Route::get('/', [ControllerComentarios::class, 'index'])->name('inicio');
Route::post('/Comentar', [ControllerComentarios::class, 'crear_comentario'])->name('crear_comentario');
