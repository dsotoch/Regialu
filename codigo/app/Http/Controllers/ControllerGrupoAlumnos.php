<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\areas;
use App\Models\aulas;
use App\Models\grupoalumnos;
use App\Models\grupos;
use App\Models\horarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerGrupoAlumnos extends Controller
{
  public function index(Request $request)
  {

    return view('grupoalumnos/grupo');
  }
  public function get_horario(Request $request, $id)
  {

    $user = Auth::user();
    $classroom = aulas::where('id', $id)->where('user_id', $user->id)->first();
    $schedules = horarios::where('user_id', $user->id)->where('aula_id', $classroom->id)->where('estado', 'Activo')->get();
    $array=[];
    if ($schedules) {
      foreach ($schedules as $n) {
        $areas = areas::where('id', $n->area_id)->where('user_id', $user->id)->first();
        $ob = [
          'idHorario' => $n->id, 'area' => $areas->descripcion, 'idArea' => $areas->id, 'turno' => $n->turno, 'dia' => $n->dia,
          'horaInicio' => $n->horainicio, 'horaFin' => $n->horafin
        ];
        $array[]=$ob;
      }
      return response()->json($array);
    } else {
      return response()->json(['value' => 'horario']);
    }
  }
  public function get_alumnos(Request $request, $id)
  {
    $user = Auth::user();
    $horario = horarios::where('id', $id)->where('user_id', $user->id)->first();
    $alumnos = alumnos::where('aula_id', $horario->aula_id)->where('user_id', $user->id)->get();
    $grupos = grupoalumnos::where('horario_id', $id)->where('user_id', $user->id)->get();
    $array = [];
    $alumnos_no_encontrados = [];

    if ($alumnos) {
      foreach ($grupos as $key => $value) {
        $alu = json_decode($value->alumno_id, true);
        foreach ($alumnos as $alumno) {
          if ($alu) {
            foreach ($alu as $id_alu => $value) {
              if ($id_alu == $alumno->id) {
                $alumnos_no_encontrados[] = $alumno->id;
              }
            }
          }
        }
      }
      $a = alumnos::where('user_id',$user->id)->where('aula_id',$horario->aula_id)->whereNotIn('id', $alumnos_no_encontrados)->get();
      foreach ($a as $key => $value) {
        $e = ['id' => $value->id, 'apellidos' => $value->apellidos, 'nombres' => $value->nombres];

        $array[] = $e;
      }
      return response()->json(['sinasignar' => count($a), 'alumnos' => $array, 'cantidad_de_alumnos' => $alumnos->count(), 'grupos' => $grupos, 'cantidad_grupos' => $grupos->count()]);
    } else {
      return response()->json(['value' => 'error']);
    }
  }
  public function get_existencia(Request $request, $id, $grupo)
  {
    $user = Auth::user();

    $grupo_alumnos = grupoalumnos::where('grupo_id', $grupo)->where('user_id', $user->id)->where('horario_id', $request->input('horario'))->first();
    $datos_existentes = json_decode($grupo_alumnos->alumno_id, true);
    if (!is_array($datos_existentes)) {
      $datos_existentes = array();
    }
    $datos_existentes[$id] = $id;
    $grupo_alumnos->alumno_id = json_encode($datos_existentes);
    $grupo_alumnos->save();
    return response()->json(['value' => true]);
  }


  public function crear_grupos(Request $request, $cantidad)
  {
    $user = Auth::user();
    $grupos = grupoalumnos::where('horario_id', $request->input('horario'))->where('user_id', $user->id)->count();

    if ($grupos > 0) {
      return response()->json(['value' => false]);
    } else {
      for ($i = 1; $i <= $cantidad; $i++) {
        grupoalumnos::create([
          'grupo_id' => $i,
          'horario_id' => $request->input('horario'),
          'user_id' => $user->id
        ]);
      }
      return response()->json(['value' => true]);
    }
  }
  public function get_detalles_grupo(Request $request, $id)
  {
    $user = Auth::user();
    $grupo = grupoalumnos::where('grupo_id', $id)->where('horario_id', $request->input('horario'))->where('user_id', $user->id)->first();
    if ($grupo) {
      $array = [];
      $ids = json_decode($grupo->alumno_id, true);
      foreach ($ids as $key) {
        $integrantes = alumnos::where('id', $key)->where('user_id', $user->id)->first();
        $e = ['id' => $integrantes->id, 'apellidos' => $integrantes->apellidos, 'nombres' => $integrantes->nombres];
        $array[] = $e;
      }
      return response()->json(['value' => $array]);
    } else {
      return response()->json(['value' => false]);
    }
  }
  public function mover_alumno(Request $request, $nuevo_grupo, $id, $grupo)
  {
    $user = Auth::user();
    $nuevo_grupo = grupoalumnos::where('grupo_id', $nuevo_grupo)->where('horario_id', $request->input('horario'))->where('user_id', $user->id)->first();
    $grupo = grupoalumnos::where('grupo_id', $grupo)->where('horario_id', $request->input('horario'))->where('user_id', $user->id)->first();
    $alumnos_grupo = json_decode($grupo->alumno_id, true);
    $alumnos_grupo_nuevo = json_decode($nuevo_grupo->alumno_id, true);

    $posicion = array_search($id, $alumnos_grupo);
    if ($posicion !== false) {
      unset($alumnos_grupo[$posicion]);
    }
    $grupo->alumno_id = json_encode($alumnos_grupo);
    $grupo->save();
    if (!is_array($alumnos_grupo_nuevo)) {
      $alumnos_grupo_nuevo  = array();
    }
    $alumnos_grupo_nuevo[$id] = $id;
    $nuevo_grupo->alumno_id = json_encode($alumnos_grupo_nuevo);
    $nuevo_grupo->save();
    return response()->json(['value' => true]);
  }

  public function eliminar_alumno(Request $request, $id, $grupo)
  {
    $user = Auth::user();
    $grupo = grupoalumnos::where('grupo_id', $grupo)->where('horario_id', $request->input('horario'))->where('user_id', $user->id)->first();
    $alumnos_grupo = json_decode($grupo->alumno_id, true);
    $posicion = array_search($id, $alumnos_grupo);
    if ($posicion !== false) {
      unset($alumnos_grupo[$posicion]);
    }
    $grupo->alumno_id = json_encode($alumnos_grupo);
    $grupo->save();
    return response()->json(['value' => true]);
  }
  public function crear_nuevo_grupo(Request $request)
  {
    $user = Auth::user();
    $numero_de_grupos = grupoalumnos::where('horario_id', $request->input('horario'))->where('user_id', $user->id)->get()->count();
    $ultimo_grupo = grupoalumnos::where('horario_id', $request->input('horario'))->where('user_id', $user->id)->max('grupo_id');
    if ($numero_de_grupos = 10) {
      return response()->json(['value' => false]);
    } else {
      grupoalumnos::create([
        'grupo_id' => intval($ultimo_grupo) + 1,
        'horario_id' => $request->input('horario'),
        'user_id' => $user->id
      ]);
      return response()->json(['value' => true, 'id' => intval($ultimo_grupo) + 1]);
    }
  }
}
