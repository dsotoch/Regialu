<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('melody/vendors/iconfonts/font-awesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/general.css') }}">
<link rel="stylesheet" href="{{ asset('/regialu.css') }}">

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body text-center">

                    <h3 class="card-title mb-4">Bienvenido a RegialuSit V1.0</h3>
                    <a class="btn btn-success btn-lg mb-3 btn-icon-text" href="{{ route('customlogin') }}"><i class="fas fa-key btn-icon-prepend"></i> Iniciar Sesión</a>
                    <a class="btn btn-danger btn-lg mb-3 btn-icon-text" href="{{ route('register') }}"><i class="fas fa-edit btn-icon-prepend"></i> Registrarse</a>

                    <hr>
                    <img id="icon-regi" src="{{ asset('imagenes/regialu.png') }}" alt="" class="mt-3">
                </div>

                <div class="card-footer text-center">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.
                        Todos los Derechos Reservados.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Diego Soto Chavarria <i class="far fa-heart text-danger"></i></span>
                </div>
            </div>

        </div>
    </div>
</div>