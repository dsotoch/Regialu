<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\aulas;
use App\Models\incidentes;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerIncidentes extends Controller
{
    public function index_incident(Request $request, $id)
    {
        $user = Auth::user();
        $incidents = incidentes::where('aula_id', $id)->where('user_id', $user->id)->get();
        $students = alumnos::where('aula_id', $id)->where('user_id', $user->id)->get();
        return view("incidentes/incident", ['incidents' => $incidents, 'students' => $students]);
    }

    public function save_incident(Request $request)
    {
        $user = Auth::user();
        $classroom = $request->input('classroom');
        $object_classroom = aulas::where('id', $classroom)->where('user_id', $user->id)->first();
        $date = $request->input('date');
        $description = $request->input('description');
        $array_students = $request->input('students');
        $object_incident = incidentes::create([
            'user_id' => $user->id,
            'fecha' => $date, 'descripcion' => $description, 'aula_id' => $object_classroom->id ,'alumno_id'=>json_encode($array_students)
        ]);
        
        $dicc = [
            'id' => $object_incident->id,
            'fecha' => $object_incident->fecha, 'descripcion' => $object_incident->descripcion
        ];

        return response()->json($dicc);
    }

    public function get_students(Request $request, $id)
    {
        $user = Auth::user();
        $object_incident = incidentes::where('id', $id)->where('user_id', $user->id)->first();
        $dicc = [];
        foreach (json_decode($object_incident->alumno_id,true) as $key) {
            $object_students = alumnos::where('user_id', $user->id)->where(
                'id',
                $key
            )->first();
            $object_dicc = ['apellidos' => $object_students->apellidos, 'nombres' => $object_students->nombres];
            $dicc[] = $object_dicc;
        }


        return response()->json($dicc);
    }


    public function delete_incident(Request $request, $id)
    {
        $user = Auth::user();
        incidentes::where('id', $id)->where('user_id', $user->id)->delete();
        return response()->json(['response' => 'success']);
    }

    public function pdf(Request $request)
    {
        $html = $request->input('html');
        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->render();
        $contenido = $pdf->output();
        return response()->json([
            'pdf' => base64_encode($contenido)
        ]);
    }
}
