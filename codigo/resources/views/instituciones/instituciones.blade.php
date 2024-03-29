@extends('base')
@section('stilos')
<link rel="stylesheet" href="{{asset('aula/instituciones/css/estilo.css')}}">
@endsection
@section('contenido')

<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h3 class="page-title">Lista de Instituciones</h3>
            </div>

        </div>
    </div>
</div>

<div class=" dropdown-divider "></div>
<div class="container-fluid ">
    <div class="row ">
        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <div class="row">
                <div class="table-responsive">
                    <table id="order-listing" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th hidden>idPeriodo</th>
                                <th>Periodo</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Dirección</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $data as $n)
                            <tr>
                                <td>{{$n['id']}}</td>
                                <td hidden>{{$n['id_periodo']}}</td>
                                <td>{{$n['periodo']}}</td>
                                <td>{{$n['nombre']}}</td>
                                <td>{{$n['tipo']}}</td>
                                <td>{{$n['direccion']}}</td>
                                <td>
                                    @if($n['estado']== "Activo")
                                    <input style="border: none;text-align:center;" type="text" class="btn-success"
                                        disabled value="{{$n['estado']}}">
                                    @else
                                    <input style="border: none;text-align:center;" type="text" class="btn-danger"
                                        disabled value="{{$n['estado']}}">
                                    @endif
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <button style="border: none;" type="button" class="btn-edit" title="Editar"
                                                data-toggle="modal" data-target="#exampleModalCenter">
                                                <i class="fas fa-edit"></i> </button>
                                        </div>
                                        <div class="col-4 ">
                                            <button style="border: none;" type="button" class="btn-delete"
                                                title="Eliminar"><i class="fas fa-times-circle"></i></button>

                                        </div>
                                        <div class="col-4">
                                            <button style="border: none;" class="btn-estado" type="button"
                                                title="Click para Cambiar Estado"><i
                                                    class="fas fa-history"></i></button>
                                        </div>
                                    </div>
                                </td>


                            </tr> @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h5 style="width:100% ;" class="modal-title" id="exampleModalLongTitle">Actualizar
                                Institución</h5>
                        </div>
                    </center>
                    <div class="modal-body">
                        <form Acción=" ">
                            @csrf
                            <div class="mb-3"><label for="periodmodal" class="form-label ">Periodo</label>
                                <select style="width:100%; " name="periodmodal" class="btn btn-primary" id="periodmodal"
                                    required>
                                    <option value="0" selected>Seleccione un Periodo</option>
                                    @foreach( $periods as $n)

                                <option value="{{$n->id}}">{{$n->descripcion}}--{{$n->fecha_inicio}}--{{$n->fecha_fin}}
                                </option>
                                @endforeach
                                </select>

                            </div>
                            <div class="mb-3 ">
                                <label for="nombremodal" class="form-label">Nombre</label>
                                <input type="text " name="nombremodal"
                                    placeholder="Ingrese el nombre de la Institución " class="form-control"
                                    id="nombremodal" aria-describedby="textHelp" required>
                            </div>
                            <div class="mb-3"><label for="tipomodal" class="form-label ">Tipo</label>
                                <select style="width:100%; " name="tipomodal" class="btn btn-primary" id="tipomodal"
                                    required>
                                    <option value="0" selected>Seleccione una Opción</option>
                                    <option value="Publica">Pública</option>
                                    <option value="Privada">Privada</option>
                                </select>
                            </div>
                            <div class="mb-3 ">
                                <label for="direccionmodal" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="direccionmodal" id="direccionmodal"
                                    aria-describedby="textHelp" placeholder="Ingrese la Dirección de la Institución"
                                    required>
                                <input type="hidden" name="idinstitucionmodal" id="idinstitucionmodal">
                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" id="editar" title="Actualizar Institución"
                            disabled><i class="fas fa-edit ">Actualizar</i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h5 style="width: 100%;color: white;" class="card-title">Panel de Institución</h5>
                    </center>

                    <form id="form-instituciones " Acción=" ">
                        @csrf
                        <div class="mb-3"><label for="period" class="form-label ">Periodo</label>
                            <select style="width:100%; " name="period" class="btn btn-primary" id="period" required>
                                <option value="0" selected>Seleccione una Opción</option>
                               @foreach( $periods as $n)

                                <option value="{{$n->id}}">{{$n->descripcion}}--{{$n->fecha_inicio}}--{{$n->fecha_fin}}
                                </option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mb-3 ">
                            <label for=" " class="form-label">Nombre</label>
                            <input type="text " name="nombre" placeholder="Ingrese el nombre de la Institución "
                                class="form-control" id="nombre" aria-describedby="textHelp " required>
                        </div>
                        <div class="mb-3"><label for="tipo" class="form-label ">Tipo</label>
                            <select style="width:100%; " name="tipo" class="btn btn-primary" id="tipo" required>
                                <option value="0" selected>Seleccione una Opción</option>
                                <option value="Publica">Pública</option>
                                <option value="Privada">Privada</option>
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="direccion " class="form-label">Dirección</label>
                            <input type="text" class="form-control" name="direccion" id="direccion"
                                aria-describedby="textHelp" placeholder="Ingrese la Dirección de la Institución "
                                required>

                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                            <center> <button type="button" class="btn btn-success" id="guardar" onclick=" "
                                    title="Rellena todos los campos para Activar " disabled><i
                                        class="fas fa-plus">Registrar</i></button></center>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
@section('javascript')
<script src="{{ asset('melody/js/data-table.js') }} "></script>
<script src="{{ asset('general/js/general.js') }} "></script>
<script src="{{ asset('melody/js/avgrund.js') }} "></script>
<script src="{{ asset('aula/instituciones/js/instituciones.js') }} "></script>


@endsection