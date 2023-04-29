<?php

namespace App\Http\Controllers;

use App\Models\comentarios;
use Illuminate\Http\Request;

class ControllerComentarios extends Controller
{
    public function index(Request $request)
    {
        $comentarios = comentarios::latest()->take(3)->get();

        return view('welcome', ['comentarios' => $comentarios]);
    }
    public function crear_comentario(Request $request)
    {
        comentarios::create(['nombres' => $request->input('nombres'), 'pais' => $request->input('pais'), 'comentario' => $request->input('comentario')]);

        return redirect()->route('inicio');
    }
}
