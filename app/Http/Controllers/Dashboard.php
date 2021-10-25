<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function index()
    {
        if(Auth::user()->nivel == 1)
            return redirect('usuario');
        if(Auth::user()->nivel == 2)
            return redirect('postulante');
        return view('dashboard');
    }
}
