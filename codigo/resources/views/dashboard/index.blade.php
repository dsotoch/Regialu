@extends('base')
@section('stilos')
<link rel="stylesheet" href="{{asset('dashboard/stilo.css')}}">
@endsection
@section('contenido')
<div class="card">
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
    <div class="card-body">
        <div class="page-header">
            <h3 class="page-title">
                Mis Administraciones
            </h3>
        </div>
        <div class="row grid-margin">
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fa fa-user mr-2"></i>
                                    Numero de Alumnos
                                </p>
                                <h2>{{$num_alumnos}}</h2>
                                <label class="badge badge-outline-success badge-pill">Información</label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fa fa-tablet mr-2"></i>
                                    Numero de Aulas
                                </p>
                                <h2>{{$num_aulas}}</h2>
                                <label class="badge badge-outline-success badge-pill">Información</label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-building
                                    mr-2"></i>
                                    Numero de Instituciones
                                </p>
                                <h2>{{$num_institutions}}</h2>
                                <label class="badge badge-outline-success badge-pill">Información</label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-book mr-2"></i>
                                    Numero de Areas
                                </p>
                                <h2>{{$num_areas}}</h2>
                                <label class="badge badge-outline-success badge-pill">Información</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="chartjs-size-monitor"
                            style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <h4 class="card-title">
                            <div class="card-body"> <i class="fas fa-chart-line"></i>
                                Horario del Dia de Hoy <label for="" id="dia"></label>
                        </h4>
                        <label for="" class="form-label" id="mensaje_"></label>
                        <div class="table-responsive">
                            <table id="miTabla" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Institución</th>
                                        <th scope="col">Aula</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">Turno</th>
                                        <th scope="col">Hora_Inicio</th>
                                        <th scope="col">Hora_Fin</th>

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
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">
                        <i class="fas fa-chart-pie"></i>
                        Inactivos
                    </h4>
                    <div class="flex-grow-1 d-flex flex-column justify-content-between">
                        <div class="chartjs-size-monitor"
                            style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="sales-status-chart" class="mt-3 chartjs-render-monitor" width="179" height="89"
                            style="display: block; width: 179px; height: 89px;"></canvas>
                        <div class="pt-4">
                            <div id="sales-status-chart-legend" class="sales-status-chart-legend">
                                <ul class="legend2">
                                    <li><span class="legend-label" style="background-color:#392c70"></span>Instituciones Inactivas
                                        <label
                                            class="badge badge-light badge-pill legend-percentage ml-auto">75</label>
                                    </li>
                                    <li><span class="legend-label"
                                            style="background-color:#04b76b"></span>Areas Inactivas<label
                                            class="badge badge-light badge-pill legend-percentage ml-auto">25</label>
                                    </li>
                                    <li><span class="legend-label" style="background-color:#ff5e6d"></span>Periodos Inactivos
                                        <label
                                            class="badge badge-light badge-pill legend-percentage ml-auto">15</label>
                                    </li>
                                    <li><span class="legend-label" style="background-color:#eeeeee"></span>Aulas Inactivas<label
                                            class="badge badge-light badge-pill legend-percentage ml-auto">10</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">
                        <i class="fas fa-tachometer-alt"></i>
                        Incidencias en General
                    </h4>
                    <p class="card-description">{{$num_incidencias}}
                        Incidencias</p>
                    <div class="flex-grow-1 d-flex flex-column justify-content-between">
                        <div class="chartjs-size-monitor"
                            style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="daily-sales-chart" class="mt-3 mb-3 mb-md-0 chartjs-render-monitor" width="179"
                            height="89" style="display: block; width: 179px; height: 89px;"></canvas>
                        <div id="daily-sales-chart-legend" class="daily-sales-chart-legend pt-4 border-top">
                            <ul class="legend3">
                        
                                <li><span class="legend-label" style="background-color:#04b76b"></span>Incidencias
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>


@endsection
@section('javascript')

<script src="{{ asset('dashboard/dashboard.js')}}"></script>
@endsection