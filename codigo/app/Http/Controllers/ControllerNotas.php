<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\areas;
use App\Models\aulas;
use App\Models\horarios;
use App\Models\notas;
use App\Models\periodos;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerNotas extends Controller
{
    public function index_notas(Request $request)
    {
        return view('notas/indexNotas');
    }

    public function get_horario(Request $request, $id)
    {

        $user = Auth::user();
        $classroom = aulas::where('id', $id)->where('user_id', $user->id)->first();
        $schedules = horarios::where('user_id', $user->id)->where('aula_id', $classroom->id)->where('estado', 'Activo')->get();
        $array=[];
        if ($schedules) {
           
                foreach ($schedules as $key =>$schedules) {
                    $areas = areas::where('id', $schedules->area_id)->first();
                    $ob = [
                        'idHorario' => $schedules->id, 'area' => $areas->descripcion, 'idArea' => $areas->id, 'turno' => $schedules->turno, 'dia' => $schedules->dia,
                        'horaInicio' => $schedules->horainicio, 'horaFin' => $schedules->horafin
                    ];
                    $array[]=$ob;
                }
               
                return response()->json($array);
           
        } else {
            return response()->json(['value' => 'horario']);
        }
    }



    public function get_notes(Request $request, $idaula, $idalumno, $areas)
    {

        $user = Auth::user();
        $tipo = $request->input('tipo');
        $unidad = $request->input('unidad');
        $horarios = horarios::where('id', $areas)->where('user_id',$user->id)->first();
        $classroom = aulas::where('id', $idaula)->where('user_id', $user->id)->first();
        $students = alumnos::where('id', $idalumno)->where('aula_id', $classroom->id)->where('user_id', $user->id)->first();
        $area2 = areas::where('id', $horarios->area_id)->where('user_id', $user->id)->first();
        $notes = notas::where('user_id', $user->id)->where('alumno_id', $students->id)->where('aula_id', $classroom->id)->where('area_id', $area2->id)->where('tipo', $tipo)->where('unidad', $unidad)->get();
        $list = [];
        foreach ($notes as $n) {
            $dicc = [
                'idNota' => $n->id,
                'descripcion' => $n->descripcion, 'calificativo' => $n->valor
            ];
            $list[] = $dicc;
        }
        return response()->json($list);
    }

    public function get_students(Request $request, $id)
    {
        $user = Auth::user();

        $tipo =  $request->input('tipo');
        $unidad = $request->input('unidad');

        $classroom = aulas::where('id', $id)->where('user_id', $user->id)->first();
        $students = alumnos::where('aula_id', $classroom->id)->where('user_id', $user->id)->get();
        $horarios = horarios::where('user_id', $user->id)->where('aula_id',$classroom->id)->first();
        $area = areas::where('id', $horarios->area_id)->first();
        $arr=[];
        foreach ($students as $key => $value) {
            $notes = notas::where('user_id', $user->id)->where('alumno_id', $value->id)->where('tipo', $tipo)->where('unidad', $unidad)->where('area_id', $area->id)->count();
            $stud = [
                'idAlumno' => $value->id,
                'apellidos' => $value->apellidos, 'nombres' => $value->nombres, 'numeroNotas' => $notes
            ];
            $arr[]=$stud;
        }

        return response()->json($arr);
    }



    public function save_note(Request $request)
    {
        $user = Auth::user();
        $description = $request->input('description');
        $note = $request->input('note');
        $horarios = $request->input('classroom');
        $student = $request->input('student');
        $id_area = $request->input('area');
        $tipo = $request->input('tipo');
        $unidad = $request->input('unidad');
        $horario=horarios::where('id',$horarios)->where('user_id',$user->id)->first();

        $areas = areas::where('id', $horario->area_id)->where('user_id', $user->id)->first();
        $object_classroom = aulas::where('id', $horario->aula_id)->where('user_id', $user->id)->first();
        $object_student = alumnos::where('id', $student)->where('user_id', $user->id)->first();
        notas::create([
            'user_id' => $user->id,
            'aula_id' => $object_classroom->id,
            'tipo' => $tipo, 'unidad' => $unidad, 'descripcion' => $description, 'valor' => $note, 'alumno_id' => $object_student->id, 'area_id' => $areas->id
        ]);
        return response()->json(['response' => 'success']);
    }
    public  function update_note(Request $request, $id)
    {

        $user = Auth::user();
        $new_valor = $request->input('new_value');
        $object_note = notas::where('id', $id)->where('user_id', $user->id)->first();
        $object_note->valor = $new_valor;
        $object_note->save();
        return response()->json(['response' => 'success']);
    }

    public function pdf_selected(Request $request)
    {


        $user = Auth::user();
        $unidad = $request->input('unidad');
        $areas = $request->input('areas');
        $tipos = $request->input('tipos');
        $horario=horarios::where('id',$areas)->where('user_id',$user->id)->first();

        $institucions = $request->input('institucions');
        $alumnoss = $request->input('alumnos');
        $periodo = periodos::where('id',$request->input('periodo'))->first();
        $fechas = Carbon::now();
        $object_area = areas::where('id', $horario->area_id)->where('user_id', $user->id)->first();
        $object_alumno = alumnos::where('id', $alumnoss)->where('user_id', $user->id)->first();
        $notes = notas::where('user_id', $user->id)->where('aula_id', $horario->aula_id)->where('alumno_id', $object_alumno->id)->where('tipo', $tipos)->where('unidad', $unidad)->where('area_id', $object_area->id)->get();
        $numeroNotas = notas::where('user_id', $user->id)->where('aula_id', $horario->aula_id)->where('alumno_id', $object_alumno->id)->where('tipo', $tipos)->where('unidad', $unidad)->where('area_id', $object_area->id)->count();
        $promedio = 0;
        $promedios = 0;
        foreach ($notes as $n) {
            $promedios = intval($n->valor) + $promedios;
            $promedio = $promedios / $numeroNotas;

            $context = ['areas' => $object_area->descripcion, 'tipos' => $tipos, 'institucions' => $institucions, 'alumnoss' => $object_alumno->apellidos . " " . $object_alumno->nombres, 'numeroNotas' => $numeroNotas, 'fechas' => $fechas, 'notes' => $notes, 'notas' => $numeroNotas, 'unidad' => $unidad, 'promedio' => $promedio, 'periodo' => $periodo->descripcion];
        }
        return view('notas/pdfSelected', $context);
    }
    public function generate_pdf(Request $request)
    {
        // Obtener el HTML del documento
        $html = $request->input('html');
        // Crear una instancia de Dompdf
        $pdf = new Dompdf();

        // Cargar el HTML generado en Dompdf
        $pdf->loadHtml($html);

        // Renderizar el PDF
        $pdf->render();

        // Obtener el contenido del PDF generado
        $pdfContent = $pdf->output();

        // Devolver el contenido del PDF como respuesta JSON
        return response()->json([
            'pdf' => base64_encode($pdfContent),'alumno'=>$request->input('alumno')
        ]);
    }
}
