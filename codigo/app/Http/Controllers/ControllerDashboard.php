<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\areas;
use App\Models\aulas;
use App\Models\horarios;
use App\Models\incidentes;
use App\Models\institucions;
use App\Models\periodos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerDashboard extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $num_aulas = aulas::where('user_id', $user->id)->get()->count();
        $num_areas = areas::where('user_id', $user->id)->get()->count();
        $num_institutions =  institucions::where('user_id', $user->id)->get()->count();
        $num_alumnos =  alumnos::where('user_id', $user->id)->get()->count();
        $num_incidencias =  incidentes::where('user_id', $user->id)->get()->count();

        return view('dashboard/index', [
            'num_aulas' => $num_aulas,
            'num_areas' => $num_areas,
            'num_institutions' => $num_institutions,
            'num_alumnos' => $num_alumnos, 'num_incidencias' => $num_incidencias, 'user' => $user
        ]);
    }
    public function get_data_horario(Request $request)
    {
        $fecha = Carbon::now();
        $user = Auth::user();
        $dias_semana = [
            1 => "Lunes",
            2 => "Martes",
            3 => "Miercoles",
            4 => "Jueves",
            5 => "Viernes",
            6 => "Sabado",
            0 => "Domingo"
        ];

        $dia_actual = $dias_semana[$fecha->weekday()];

        $horarios = horarios::where('dia', $dia_actual)->where('estado', 'Activo')->whereNotNull('aula_id')->where('user_id', $user->id)->get();
        $lis = [];
        foreach ($horarios as $n) {
            $aulas = aulas::where('user_id', $user->id)->where('id', $n->aula_id)->first();
            $areas = areas::where('user_id', $user->id)->where('id', $n->area_id)->first();
            $isnti = institucions::where('user_id', $user->id)->where('id', $aulas->institucion)->first();

            $dicc = [
                'Institucion' => $isnti->nombre,
                'Aula' => $aulas->grado . " " . $aulas->seccion . "/" . $aulas->nivel,
                'Area' => $areas->descripcion,
                'Turno' => $n->turno,
                'Hora_Inicio' => $n->horainicio,
                'Hora_Fin' => $n->horafin,
            ];
            $lis[] = $dicc;
        }

        return response()->json($lis);
    }
    public function get_data(Request $request)
    {
        $user = Auth::user();
        $num_periodo = periodos::where('user_id', $user->id)->where('estado', 'Inactivo')->get()->count();

        $num_aulas = aulas::where('user_id', $user->id)->where('estado', 'Inactivo')->get()->count();
        $num_areas = areas::where('user_id', $user->id)->where('estado', 'Inactivo')->get()->count();
        $num_institutions =  institucions::where('user_id', $user->id)->where('estado', 'Inactivo')->get()->count();
        $num_alumnos =  alumnos::where('user_id', $user->id)->get()->where('estado', 'Inactivo')->count();
        $dicc = [
            'num_aulas' => $num_aulas,
            'num_areas' => $num_areas,
            'num_institutions' => $num_institutions,
            'num_alumnos' => $num_alumnos, 'user' => $user,'num_periodos'=>$num_periodo
        ];
        return response()->json($dicc);
    }
}
