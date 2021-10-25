<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Postulante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostulanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postulantes = DB::table('postulantes')
                        ->join('personas', 'postulantes.ci', 'personas.ci')
                        ->get();
        return view('Postulante.index', compact('postulantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Postulante.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->ci        = $request->ci;
        $persona->nombres   = $request->nombres;
        $persona->apellidos = $request->apellidos;
        $persona->save();

        $postulante = new Postulante();
        $postulante->ci         = $request->ci;
        $postulante->cpt        = $request->cpt;
        $postulante->monto      = $request->monto;
        if ($request->hasFile('foto')) {
            $postulante->foto = $request->file('foto')->store('uploads', 'public');
        }
        $postulante->carrera    = $request->carrera;
        $postulante->modalidad  = $request->modalidad;
        $postulante->save();

        return redirect(route('postulante.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postulante  $postulante
     * @return \Illuminate\Http\Response
     */
    public function show(Postulante $postulante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postulante  $postulante
     * @return \Illuminate\Http\Response
     */
    public function edit(Postulante $postulante)
    {
        $persona = Persona::find($postulante->ci);
        return view('Postulante.editar', compact('postulante', 'persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postulante  $postulante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postulante $postulante)
    {
        $persona = Persona::find($postulante->ci);
        $persona->ci        = $request->ci;
        $persona->nombres   = $request->nombres;
        $persona->apellidos = $request->apellidos;

        $persona->save();

        $postulante->ci         = $request->ci;
        $postulante->cpt        = $request->cpt;
        $postulante->monto      = $request->monto;
        if ($request->hasFile('foto')) {
            Storage::delete('public/'.$postulante->foto);
            $postulante->foto = $request->file('foto')->store('uploads', 'public');
        }
        $postulante->carrera    = $request->carrera;
        $postulante->modalidad  = $request->modalidad;

        $postulante->save();

        return redirect(route('postulante.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postulante  $postulante
     * @return \Illuminate\Http\Response
     */
    public function destroy($ci)
    {
        Postulante::destroy($ci);

        return redirect(route('postulante.index'));
    }

    public function qrcode(Postulante $postulante){
        //return $postulante;
        $persona = Persona::find($postulante->ci);
        return view('Postulante.qrcode', compact('postulante', 'persona'));
    }

    public function importar(){
        return 'Importando notas';
    }
}
