<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Grado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AlumnosController extends Controller
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
        /* ALUMNOS */
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = Grado::all();
        return view('alumnos.create', compact('grupos'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new Alumno();
        $registro->nombre_alumno = $request->nombre_alumno;
        $registro->ap_paterno_alumno = $request->ap_paterno_alumno;
        $registro->ap_materno_alumno = $request->ap_materno_alumno;
        $registro->curp_alumno = $request->curp_alumno;

        if ($request->hasFile('fileCurp')) {
        $doc=$request->file('fileCurp');
           $doc->move(public_path().'/documentos', $doc->getClientOriginalName());
           $registro->fileCurp=$doc->getClientOriginalName();  
        }
        
        $registro->sexo_alumno = $request->sexo_alumno;
        $registro->edad_alumno = $request->edad_alumno;
        $registro->nombre_tutor = $request->nombre_tutor;
        $registro->tel_casa = $request->tel_casa;
        $registro->cel_tutor = $request->cel_tutor;
        $registro->ciudad_alumno = $request->ciudad_alumno;
        $registro->alcaldia_alumno = $request->alcaldia_alumno;
        $registro->colonia_alumno = $request->colonia_alumno;
        $registro->calle_alumno = $request->calle_alumno;
        $registro->cp_alumno = $request->cp_alumno;
        $registro->nombre_curso = $request->nombre_curso;
        $registro->grado_id = $request->grado_id;
        $registro->ciclo_escolar = $request->ciclo_escolar;
        $registro->fecha_ingreso = $request->fecha_ingreso;
        $registro->fecha_baja = $request->fecha_baja;
        $registro->estatus = $request->estatus;

        $registro->save();
        return redirect()->route('alumnos.index', $registro);   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumnos)
    {
        return view('alumnos.editar',compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumnos)
    {
        $alumnos->sexo_alumno = $request->sexo_alumno;
        $alumnos->edad_alumno = $request->edad_alumno;
        $alumnos->nombre_tutor = $request->nombre_tutor;
        $alumnos->tel_casa = $request->tel_casa;
        $alumnos->cel_tutor = $request->cel_tutor;
        $alumnos->ciudad_alumno = $request->ciudad_alumno;
        $alumnos->alcaldia_alumno = $request->alcaldia_alumno;
        $alumnos->colonia_alumno = $request->colonia_alumno;
        $alumnos->calle_alumno = $request->calle_alumno;
        $alumnos->cp_alumno = $request->cp_alumno;
        $alumnos->nombre_curso = $request->nombre_curso;
        $alumnos->grado_id = $request->grado_id;
        $alumnos->ciclo_escolar = $request->ciclo_escolar;
        $alumnos->fecha_ingreso = $request->fecha_ingreso;
        $alumnos->fecha_baja = $request->fecha_baja;
        $alumnos->estatus = $request->estatus;

        $alumnos->save();
        return redirect()->route('alumnos.index', $alumnos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('destroy','exit');
    }
}
