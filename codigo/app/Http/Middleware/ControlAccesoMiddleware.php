<?php

namespace App\Http\Middleware;

use App\Models\grupos;
use App\Models\users;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControlAccesoMiddleware
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
        $blockAccess = true;
        $us = users::where('id', Auth::user()->id)->first();
        $grupo = grupos::where('id', $us->id_grupo)->first();
        if ($grupo->descripcion == 'CONLICENCIA') $blockAccess = false;

        if ($blockAccess) {

            return back()->with('message', ['danger', 'No Tienes una Licencia Activa o Aun no has Comprado por eso no tienes privilegios para acceder']);
        }

        return $next($request);
    }
}
