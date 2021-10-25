<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = DB::table('users')
        ->join('personas', 'users.ci', 'personas.ci')
        ->get();
        return view('Usuario.index', compact('usuarios'));
    }

    public function create()
    {
        return view('Usuario.registrar');
    }
    
    public function store(Request $request)
    {
        $persona = new Persona();
        $user = new User();

        $persona->ci        = $request->ci;
        $persona->nombres   = $request->nombres;
        $persona->apellidos = $request->apellidos;

        $user->ci       = $request->ci;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->nivel    = $request->nivel;

        $persona->save();
        $user->save();

        return redirect(route('usuario.index'));
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $usuario)
    {
        $persona = Persona::find($usuario->ci);
        return view('Usuario.editar', compact('usuario', 'persona'));
    }

    public function update(Request $request, User $usuario)
    {
        $persona = Persona::find($usuario->ci);
        $persona->update($request->all());

        $usuario->ci        = $request->ci;
        $usuario->password  = Hash::make($request->password);
        $usuario->email     = $request->email;
        $usuario->nivel     = $request->nivel;

        $usuario->save();

        return redirect(route('usuario.index'));
    }

    public function destroy(User $usuario)
    {
        $usuario->nivel = 0;
        $usuario->save();

        return redirect(route('usuario.index'));
    }
}
