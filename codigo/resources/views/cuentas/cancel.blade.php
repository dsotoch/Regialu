@extends('base')
@section('contenido')
<div class="card">
    <div class="card-body">
        <div class="card-body">
            <div class="container-fluid" style="width: 100%;background-color: red;color: white;align-items: center;align-content: center;text-align: center;padding: 15px;">
                <h3 class="text" style="text-align: center;">COMPRA NO COMPLETADA</h3><h5> <span class="text">{{$fecha}}</span></h5>
                <hr >Recuerda que tenemos los metodos de pago Online mas seguros de la Web
            </div>

            <div class="card">
                <img src="{{ asset('imagenes/pay.png') }}" class="card-img-top" alt="...">
                
            </div>
        </div>
    </div>
</div>
@endsection