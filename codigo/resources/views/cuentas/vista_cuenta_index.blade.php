@extends('base')
@section('stilos')
<link rel="stylesheet" href="{{ asset('login/register.css') }}">
@endsection
@section('contenido')
<div class="content-wrapper">
    <div class="row pricing-table">
        <div class="col-md-12">
            {{-- Alertas y mensajes --}}
            @if (session('message'))
            <div class="alert alert-{{ session('message')[0] }} text-center" role="alert">
                <b> {{ session('message')[1] }} </b>
            </div>
            @endif
        </div>
    </div>
    <div class="page-header">

        <h3 class="page-title">
            Mi Cuenta
        </h3>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <img src="{{ asset('imagenes/user.png') }}" alt="Perfil" class="img-lg rounded-circle mb-3">
                                <br>
                                <h4>LICENCIA ACTUAL</h4>
                                <br>
                                <h5 class="btn-info">{{ $license }} </h5>
                                <input type="hidden" id="lice" value="{{ $license }}">
                            </div>

                            <div class="border-bottom py-4">
                                <div class="d-flex mb-3">
                                    <div class="progress progress-md flex-grow">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="progress progress-md flex-grow">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-4">
                                <p class="clearfix">
                                    <span class="float-left">
                                        Estado
                                    </span>
                                    <span class="float-right text-muted">
                                        Active
                                    </span>
                                </p>

                                <p class="clearfix">
                                    <span class="float-left">
                                        Email
                                    </span>
                                    <span class="float-right text-muted">
                                        {{ $user->email }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Usuario
                                    </span>
                                    <span class="float-right text-muted">
                                        {{ $user->dni }}
                                        <input type="hidden" id="dni-" value="{{ $user->dni }}">
                                    </span>
                                </p>

                            </div>
                        </div>
                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 id="nombre-usuario">{{ $user->name }}</h3>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 mr-2 text-muted" id="pais-usuario">{{ $user->pais }}</h5>
                                        <div class="br-wrapper br-theme-css-stars"><select id="profile-rating" name="rating" autocomplete="off" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected br-current"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected br-current"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="5" class="br-selected br-current"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-success btn-icon-text" title="Click para Ver las Licencias" id="licencias" hidden><i class="fas fa-credit-card btn-icon-prepend"></i>Licencias</button>
                                </div>
                            </div>
                            <div class="mt-4 py-2 border-top border-bottom">
                                <form action="" id="miform2">
                                    @csrf

                                    <ul class="nav profile-navbar">
                                        <li>
                                            <button class="btn btn-warning  btn-icon-text" id="inf"><i class="fa fa-user btn-icon-prepend"></i>
                                                Información
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-primary  btn-icon-text" id="resume">
                                                <i class="far fa-file-word btn-icon-prepend"></i>
                                                Resumen
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-danger  btn-icon-text" id="pass">
                                                <i class="fas fa-key btn-icon-prepend"></i>
                                                Cambiar Contraseña
                                            </button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <form action="" id="form-licencia">
                                <div id="modalPlanes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-center" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row pricing-table">
                                                    <div class="col-md-4  pricing-card">
                                                        <div class="card border-primary border pricing-card-body">
                                                            <div class="text-center pricing-card-head">
                                                                <h3>Basico</h3>
                                                                <p>Mensual</p>
                                                                <h1 class="font-weight-normal mb-4">${{$precio_basico}}</h1>
                                                            </div>
                                                            <ul class="list-unstyled plan-features">
                                                                <li>Licencia con Valides por Un Mes</li>
                                                                <li>Activación Automatica una vez Realizada la Compra</li>
                                                                <li>Soporte los 7 dias de la Semana</li>
                                                                <li>1 Usuario</li>
                                                                <li>Acceso Online</li>
                                                                <li>Datos en tiempo real</li>
                                                                <li>Web Responsive tanto para Movil como para PC</li>
                                                            </ul>
                                                            <div class="wrapper">
                                                                <input type="hidden" name="comprar-mes" id="comprar-mes" value="mes">

                                                                <p class="mt-3 mb-0 plan-cost text-success">Comprar Ahora</p>
                                                                <br>
                                                                <button id="comprar" class="btn btn-outline-primary btn-block btn-icon-text"><i class="fas fa-shopping-cart   btn-icon-prepend"></i>
                                                                    COMPRAR</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 grid-margin stretch-card pricing-card">
                                                        <div class="card border border-success pricing-card-body">
                                                            <div class="text-center pricing-card-head">
                                                                <h3 class="text-success">Premiun</h3>
                                                                <p>Semestral</p>
                                                                <h1 class="font-weight-normal mb-4">${{$precio_premiun}}</h1>
                                                            </div>
                                                            <ul class="list-unstyled plan-features">
                                                                <li>Licencia con Valides por 6 Meses</li>
                                                                <li>Activación Automatica una vez Realizada la Compra</li>
                                                                <li>Soporte los 7 dias de la Semana</li>
                                                                <li>1 Usuario</li>
                                                                <li>Acceso Online</li>
                                                                <li>Datos en tiempo real</li>
                                                                <li>Web Responsive tanto para Movil como para PC</li>
                                                            </ul>
                                                            <div class="wrapper">
                                                                <input type="hidden" name="comprar-mes" id="comprar-mes" value="6">

                                                                <p class="mt-3 mb-0 plan-cost text-success">Comprar Ahora</p>
                                                                <br>
                                                                <button id="comprar" class="btn btn-outline-primary btn-block btn-icon-text"><i class="fas fa-shopping-cart   btn-icon-prepend"></i>
                                                                    COMPRAR</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 grid-margin stretch-card pricing-card">
                                                        <div class="card border border-primary pricing-card-body">
                                                            <div class="text-center pricing-card-head">
                                                                <h3 class="text-danger">VIP</h3>
                                                                <p>Anual</p>
                                                                <h1 class="font-weight-normal mb-4">${{$precio_vip}}</h1>
                                                            </div>
                                                            <ul class="list-unstyled plan-features">
                                                                <li>Licencia con Valides por Un Año</li>
                                                                <li>Activación Automatica una vez Realizada la Compra</li>
                                                                <li>Soporte los 7 dias de la Semana</li>
                                                                <li>1 Usuario</li>
                                                                <li>Acceso Online</li>
                                                                <li>Datos en tiempo real</li>
                                                                <li>Web Responsive tanto para Movil como para PC</li>
                                                            </ul>
                                                            <div class="wrapper">
                                                                <input type="hidden" name="comprar-mes" id="comprar-mes" value="anual">

                                                                <p class="mt-3 mb-0 plan-cost text-success">Comprar Ahora</p>
                                                                <br>
                                                                <button id="comprar" class="btn btn-outline-primary btn-block btn-icon-text"><i class="fas fa-shopping-cart   btn-icon-prepend"></i>
                                                                    COMPRAR</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="pas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: purple;color: white;">
                                            {{-- Alertas y mensajes --}}
                                            @if (session('message'))
                                            <div class="alert alert-{{ session('message')[0] }} text-center" role="alert">
                                                <b> {{ session('message')[1] }} </b>
                                            </div>
                                            @endif
                                            <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
                                            <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" id="miForm">
                                                @csrf
                                                <label for="pass" class="form-label">Nueva Contraseña</label>
                                                <input class="form-control" type="text" id="contra">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="cambi" class="btn btn-success">Cambiar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-feed">

                                <div class="d-flex align-items-start profile-feed-item" id="div-info">
                                    <img src="{{ asset('imagenes/licencia.png') }}" alt="licencia" class="img-sm rounded-circle">
                                    <div class="ml-4">
                                        <h6>
                                            Plan Contratado : {{ $plan }}
                                            <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>{{ $tiempo }}</small>
                                        </h6>
                                        <h6>
                                            Fecha de Activación :
                                            <small class="ml-4 text-muted"><i class="far fa-calendar mr-1"></i>{{ $activation }}</small>
                                        </h6>
                                        <h6>
                                            Licencia Valida Hasta :
                                            <small class="ml-4 text-muted"><i class="far fa-calendar mr-1"></i>{{ $expired }}</small>
                                        </h6>
                                        <h6>
                                            Licencia :
                                            <small class="ml-4 text-muted">{{ $license }}</small>
                                        </h6>
                                        <h6>
                                            La Licencia Esta Activa ? :
                                            <small class="ml-4 text-muted">{{ $is_active }}</small>
                                        </h6>
                                        <h6>
                                            La Licencia Ya me esta Asignada ? :
                                            <small class="ml-4 text-muted">{{ $is_usado }}</small>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="col-12">
                            <div id="div-resume"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Modal -->

</div>
@endsection

@section('javascript')
<script src="{{asset( 'login/register.js' )}}"> </script>
<script src="{{ asset('app.js') }}"></script>
<script src="{{ asset('general.js') }}"></script>
@endsection