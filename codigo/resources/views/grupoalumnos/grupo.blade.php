<link rel="stylesheet" href="{{ asset('grupoalumnos/grupo.css') }}">
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-success">
            <li class="breadcrumb-item"><a href="#" style="color: white;">Grupos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gestión de Grupos</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <div class="dropdown-divider"></div>
            <div class="row">
                <div class="form-control col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><label for="id_horario">Horario
                        :</label><select class="form-control" aria-label="Default select example" id="id_horario">
                        <option selected value="0">Seleccione un Horario</option>

                    </select></div>
                <div class="form-control col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><label for="area">Area
                        :</label>

                    <h5 class="form-control btn-warning" id="area">Selecciona un Horario</h5>
                    <input type="hidden" id="area-hidden">


                </div>
                <div class="form-control col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <label class="form-label">Numero Total de Alumnos :</label> <br> <label class="form-label"
                        id="numero-de-alumnos">0</label>
                </div>
                <div class="form-control col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <label for="numero-de-grupos" class="form-label">Cantidad de Grupos:</label>
                            <input type="number" class="form-control" id="numero-de-grupos" placeholder="MAX. 10">
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <br>
                            <br>
                            <button class="btn btn-info" id="btn-crear" disabled>Crear</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="dropdown-divider"></div>
            <div class="card mb-3 p-3" id="imagenes-de-grupos">

                <div class="row mt-3">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6  col-xl-6 "> <label for="">Total de
                            Grupos:</label> <label for="" id="cantidad-grupos">0</label></div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6  col-xl-6 "> <label for="">Alumnos Sin
                            Grupo:</label> <label for="" id="cantidad-sin-grupo">0</label></div>
                </div>
                <div class="row mt-3">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6  col-xl-6 "> <button type="button" id="btn-asignar"
                            disabled class="btn btn-warning btn-icon-text" title="Click para ver los Alumnos"><i
                                class="fas fa-database btn-icon-prepend"></i>
                            Alumnos</button></div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6  col-xl-6 "> <button type="button"
                            id="btn-nuevo-grupo" disabled class="btn btn-dark btn-icon-text"
                            title="Click para crear un Nuevo Grupo"><i class="fas fa-plus-circle  btn-icon-prepend"></i>
                            Nuevo Grupo</button></div>
                </div>

            </div>
        </div>
    </div>
    <div class="row" id="cards-de-grupos">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                <div class="card mb-3">
                    <div class="card-body">

                        <img src="{{ asset('imagenes/grupos/img12.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                <div class="card mb-3">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/grupos/img10.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalGrupos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LISTA DE ESTUDIANTES SIN GRUPO </h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table " id="order-listing10">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Asignar</th>

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

    <!-- Modal -->
    <div class="modal fade" id="modal-numero-de-grupo" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog        ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="#exampleModalLabel">INGRESE EL NUMERO DE GRUPO</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <input style="border: 2px solid blue" type="number" class="form-control" id="numero-de-grupo">
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" id="btn-modal-asignar-grupo">Asignar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal_detalles_de_grupo" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DETALLES DEL GRUPO N°:</h5><h5 class="modal-title" id="grupito"></h5>
                    <button type="button" class="btn btn-close btn-dark" data-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body" id="div_detalle_alumnos">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabla_detalles">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Apellidos</th>
                                    <th>Nombres</th>
                                    <th>Opciones</th>
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
   
    <!-- Modal -->
    <div class="modal fade" id="modal-mover" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog        ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">NUMERO DE GRUPO DONDE SE MOVERA AL ESTUDIANTE</h5>
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                   <input type="number" class="form-control " name="" id="numero_de_grupo_para_mover">
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-primary" id="OK">Mover</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('grupoalumnos/table.js') }}"></script>
