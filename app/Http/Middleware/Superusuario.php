<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Superusuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch(Auth::user()->nivel){
            case ('1'):
                return $next($request);//si es para agregar a otros Usuarios
            break;
            case ('2'):
                return redirect('postulante');//si es para registrar postulantes
            break;
        }
    }
}
