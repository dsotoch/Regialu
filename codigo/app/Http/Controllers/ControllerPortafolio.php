<?php

namespace App\Http\Controllers;

use App\Models\planes;
use Illuminate\Http\Request;

class ControllerPortafolio extends Controller
{
    public function PreciosRegialuSit(Request $request)
    {
        $precio_basico = planes::where('nombre_plan', 'BASICO')->pluck('precio')[0];
        $precio_premiun = planes::where('nombre_plan', 'PREMIUN')->pluck('precio')[0];
        $precio_vip = planes::where('nombre_plan', 'VIP')->pluck('precio')[0];
        return response()->json(['precio_basico' => $precio_basico, 'precio_premiun' => $precio_premiun, 'precio_vip' => $precio_vip]);
    }
}
