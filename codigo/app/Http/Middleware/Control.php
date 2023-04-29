<?php

namespace App\Http\Middleware;

use App\Models\grupos;
use App\Models\users;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Control
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $blockAccess = false;
        $us = users::where('id', Auth::user()->id)->first();
        $grupo = grupos::where('id', $us->id_grupo)->first();
        if ($grupo->descripcion == 'DEMO') $blockAccess = true;

        if ($blockAccess) {
            return response()->json([
                'status' => 'error',
                'message' => 'Este es Un Usuario Demo sin privilegios para realizar esta Operación'
            ], 403);
        }else{
            return $next($request);

        }
    }
}
