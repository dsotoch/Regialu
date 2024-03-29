@extends('base')
@section('stilos')
    <link rel="stylesheet" href="{{ asset('gestion/stilo.css') }}">
@endsection
@section('contenido')
    <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="col-4">

                    <h4 class="page-title">Mi Gestión Actual</h4>
                    <div class="dropdown-divider"></div>
                    <span> <button id="new-management" class="btn btn-inverse-info">Nueva Gestión</button> </span>
                </div>
                <div class="col-8">
                    <label  for="" class="page-title"
                        id="label_gestion">SELECCIONA UN
                        PERIODO PARA
                        GESTIONAR</label>
                </div>

            </div>

            <div class="dropdown-divider"></div>
            <div class="row">
                <div class="col-5">
                    <label for="current_period" class="form-label">Periodo</label>
                    <select class="form-control " aria-label="Default select example" id="current_period"
                        title="Solo se Muestran los Periodos Activos">
                        <option selected value="0">Seleccione un Periodo</option>
                        @foreach ($periods as $n)
                            <option value="{{ $n->id }}">
                                {{ $n->descripcion }}/{{ $n->fecha_inicio }}/{{ $n->fecha_fin }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <label for="current_institution" class="form-label">Institución</label>
                    <select class="form-control" aria-label="Default select example" id="current_institution"
                        title="Solo se Muestran las Instituciones ACTIVAS que pertenecen al Periodo Seleccionado" disabled>
                        <option selected value="0">Seleccione una Institución</option>
                    </select>
                </div>

                <div class="col-3" id="div-options">
                    <center> <label for="">Opciones de Gestión</label></center>
                    <center>
                        <div class="dropdown" id="options">
                            <button class="btn btn-warning dropdown-toggle btn-icon-text" type="button"
                                id="dropdownMenuIconButton1" data-toggle="dropdown">
                                <i class="fa fa-globe btn-icon-prepend"></i>
                            </button>
                            <div class="dropdown-menu form-control" aria-labelledby="dropdownMenuIconButton1"
                                x-placement="bottom-start">
                                <button id="btn-incident" class="btn btn-danger btn-icon-text dropdown-item"> <i
                                        class="fas fa-exclamation-triangle
                                btn-icon-prepend"></i>Incidencias</button>
                                <br>
                                <div class="dropdown-divider"></div>
                                <button id="btn-assistance" class="btn btn-danger btn-icon-text dropdown-item form-control">
                                    <i
                                        class="fas fa fa-address-card
                                btn-icon-prepend"></i>Asistencia</button>
                                <br>
                                <div class="dropdown-divider"></div>
                                <button id="btn-note" class="btn btn-danger btn-icon-text dropdown-item"> <i
                                        class="fas fa-file-archive
                                btn-icon-prepend"></i>Notas</button>
                                <br>
                                <div class="dropdown-divider"></div>
                                <button id="btn-grupos" class="btn btn-danger btn-icon-text dropdown-item"> <i
                                        class="fas fa-users
                        btn-icon-prepend"></i>Grupos</button>
                                <br>
                                <form action="" id="gestio">
                                    @csrf
                                    <input type="hidden" name="" id="id-classroom">
                                    <input type="hidden" name="" id="name-classroom">
                                </form>
                            </div>
                        </div>
                    </center>


                </div>



            </div>

            <div class="dropdown-divider"></div>
        </div>
    </div>
    <div id="div-asistencia" hidden>

        <!-- Modal -->
        <div class="modal fade" id="modalReport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button style="float: right;" type="button" class="btn-close" data-dismiss="modal"
                            aria-label="Close">X</button>
                    </div>
                    <div class="modal-body" id="pdfReport">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button style="float: right;" class="btn btn-success btn-icon-text" id="generatePDF"
                            title="Click para generar PDF"><i class="fas fa-file-pdf btn-icon-prepend"></i> Guardar
                            PDF</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-success">
                        <li class="breadcrumb-item"><a href="#" style="color: white;">Asistencia</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Grabar Asistencia</li>
                        <input type="hidden" name="aula-asistencia" id="aula-asistencia">

                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-6"><label for="horario">Horario :</label><select class="form-control"
                    aria-label="Default select example" id="horario">
                    <option selected value="0">Seleccione un Horario</option>

                </select></div>
            <div class="col-6"><label for="id_area_asistencia">Area :</label>

                <h5 class="form-control btn-info" id="id_area_asistencia">Selecciona un Horario</h5>
                <input type="hidden" id="area-oculta">


            </div>
        </div>
        <div class="row">
            <div class="col-12"><button style="float: right;"
                    title="Click para ir al Panel de Modificación de Asistencia" class="btn btn-warning btn-icon-text"
                    id="btn-update-assistance"> <i class="fas fa-edit btn-icon-prepend">
                    </i> Modificar Asistencia </button></div>

        </div>
        <div class="dropdown-divider"></div>
        <div class="table-responsive">
            <table class="table  student-assistance" id="order-listing3">
                <thead>
                    <tr>
                        <th scope="col">Reporte</th>
                        <th scope="col">ID</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Aula</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
        <div class="dropdown-divider"></div>
        <button style="float: right;" class="btn btn-success" id="save-assistance" disabled>Grabar Asistencia</button>
    </div>

    <div class="container-fluid" id="div-assistance">

    </div>


    <!-- Modal starts -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <ul style="list-style: none;">
                        <li>
                            <h5 class="page-title1">Mostrando Aulas Activas de la Institución</h5>
                        </li>

                        <div class="dropdown-divider"></div>

                        <li>
                            <h5 class="page-title2" id="titlemodal">qwqwqwqw</h5>
                        </li>
                    </ul>
                    <button type="button" style="color: white;" class="close" data-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table order-listing" id="order-listing">
                            <thead>

                                <tr>
                                    <th scope="col">idAula</th>
                                    <th scope="col">Grado</th>
                                    <th scope="col">Sección</th>
                                    <th scope="col">Nivel</th>
                                    <th scope="col">Turno</th>

                                    <th>Acción</th>
                                </tr>

                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Ends -->
@endsection
@section('javascript')
    <script src="{{ asset('gestion/gestion.js')}}" ></script>
    <script src="{{ asset('melody/js/data-table.js') }}"></script>
    <script src="{{ asset('incidencia/incidencia.js')}}" ></script>
    <script src="{{ asset('incidencia/table.js') }}"></script>
    <script src="{{ asset('notas/notas.js')}}" ></script>
    <script src="{{ asset('grupoalumnos/grupo.js')}}"></script>
@endsection
