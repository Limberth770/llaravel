<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Alumno::all();
        return $results;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/alumno/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre_alumno = $request->nombre_alumno?$request->nombre_alumno:'';
        $alumno->apellido_pat_alumno = $request->apellido_pat_alumno?$request->apellido_pat_alumno:'';
        $alumno->apellido_mat_alumno = $request->apellido_mat_alumno?$request->apellido_mat_alumno:'';       
        $alumno->fecha_nac_alumno = $request->fecha_nac_alumno?$request->fecha_nac_alumno:'';
        $alumno->documento_identidad_alumno = $request->documento_identidad_alumno?$request->documento_identidad_alumno:'';
        $alumno->direccion_alumno = $request->direccion_alumno?$request->direccion_alumno:'';
        $alumno->numero_referencia_alumno = $request->numero_referencia_alumno?$request->numero_referencia_alumno:'';
        $alumno->nivel_estudios_alumno = $request->nivel_estudios_alumno?$request->nivel_estudios_alumno:'';
        $alumno->informacion_adicional = $request->informacion_adicional?$request->informacion_adicional:'';
        $alumno->numero_telefonico_alumno = $request->numero_telefonico_alumno?$request->numero_telefonico_alumno:'';
        $alumno->correo_alumno = $request->correo_alumno?$request->correo_alumno:'';
        $alumno->estado_alumno = $request->estado_alumno?$request->estado_alumno:'';
        $alumno->key_alumno = $request->key_alumno?$request->key_alumno:'';

        $alumno->save();

        return $alumno;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $alumno = Alumno::where('id',$id)->first();

        $alumno->nombre_alumno = $request->nombre_alumno?$request->nombre_alumno:$alumno->nombre_alumno;
        $alumno->apellido_pat_alumno = $request->apellido_pat_alumno?$request->apellido_pat_alumno:$alumno->apellido_pat_alumno;
        $alumno->apellido_mat_alumno = $request->apellido_mat_alumno?$request->apellido_mat_alumno:$alumno->apellido_mat_alumno;       
        $alumno->fecha_nac_alumno = $request->fecha_nac_alumno?$request->fecha_nac_alumno:$alumno->fecha_nac_alumno;
        $alumno->documento_identidad_alumno = $request->documento_identidad_alumno?$request->documento_identidad_alumno:$alumno->documento_identidad_alumno;
        $alumno->direccion_alumno = $request->direccion_alumno?$request->direccion_alumno:$alumno->direccion_alumno;
        $alumno->numero_referencia_alumno = $request->numero_referencia_alumno?$request->numero_referencia_alumno:$alumno->numero_referencia_alumno;
        $alumno->nivel_estudios_alumno = $request->nivel_estudios_alumno?$request->nivel_estudios_alumno:$alumno->nivel_estudios_alumno;
        $alumno->informacion_adicional = $request->informacion_adicional?$request->informacion_adicional:$alumno->informacion_adicional;
        $alumno->numero_telefonico_alumno = $request->numero_telefonico_alumno?$request->numero_telefonico_alumno:$alumno->numero_telefonico_alumno;
        $alumno->correo_alumno = $request->correo_alumno?$request->correo_alumno:$alumno->correo_alumno;
        $alumno->estado_alumno = $request->estado_alumno?$request->estado_alumno:$alumno->estado_alumno;
        $alumno->key_alumno = $request->key_alumno?$request->key_alumno:$alumno->key_alumno;

        $alumno->save();

        return $alumno;        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::where('id',$id)->first()->delete();
        return 'ok';
    }
}
