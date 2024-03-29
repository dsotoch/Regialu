@extends('base') 
@section('stilos')
<link rel="stylesheet" href="{{  asset('area/estilo.css') }}"> 
@endsection
@section('contenido')
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                <h3 class="page-title">Lista de Areas</h3>
            </div>
        </div>
    </div>
</div>
<div class="dropdown-divider"></div>
<div class="container-fluid">
    <div class="row pricing-table">
        <div class="col-md-4  grid-margin" id="form">
        <form>
            @csrf               
                <div class="mb-3" id="divtitle">

                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Descripción</label>
                        <input placeholder="Ingresa la Descripción u Nombre del Area" type="text" class="form-control"
                            id="descripcion" name="seccion" aria-describedby="textHelp" onkeyup="mayus(this)" required>

                    </div>

                    <center>
                        <div class="mb-3">
                            <button class="btn btn-success" id="btnsave"><i class="fas fa-upload"
                                    title="Registrar Area">Registrar</i></button>
                        </div>
                    </center>
                </div>


            </form>
            <br><br>

            <div class="card">
                <img src="{{ asset('imagenes/cursos.jpg')}} " class="card-img-top " alt="... ">
                <div class="card-body ">
                    <h5 class="card-title ">Cantidad de Areas</h5>
                    <p class="text ">Actualmente Cuentas con un Total de
                        <input style="border: none;" class="cantidad" id="cantidad_areas" value="{{$total}}" disabled>
                        Areas Registradas
                    </p>


                </div>
            </div>

        </div>
        <div class="col-md-8 grid-margin">
            <div class="table-responsive" id="chosen">
                <table id="order-listing" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $n)
                        <tr>
                            <td >{{$n->id}}</td>
                            <td>{{$n->descripcion}}</td>
                            <td>
                                @if($n->estado == "Activo") 
                                <input style="border: none;text-align:center;" type="text" class="btn-success" disabled
                                    value="{{$n->estado}}">
                                @else
                                <input style="border: none;text-align:center;" type="text" class="btn-danger" disabled
                                    value="{{$n->estado}}">
                              @endif
                            </td>
                            <td>
                                <div class="row">
                                   
                                    <div class="col-6 ">
                                        <button style="border: none;" type="button" class="btn-delete"
                                            title="Eliminar"><i class="fas fa-times-circle"></i></button>

                                    </div>
                                    <div class="col-6">
                                        <button style="border: none;" class="btn-estado" type="button"
                                            title="Click para Cambiar Estado"><i class="fas fa-history"></i></button>
                                    </div>
                                </div>
                            </td>


                        </tr> 
                        @endforeach



                    </tbody>
                </table>
             
               
            </div>
        </div>

    </div>
</div>
<br>
@endsection
@section('javascript')

<script src="{{ asset('area/area.js') }}"></script>

<script src="{{ asset('melody/js/data-table.js') }}"></script>
<script>
    function mayus(e) {
        e.value = e.value.toUpperCase();
    }

</script>
@endsection