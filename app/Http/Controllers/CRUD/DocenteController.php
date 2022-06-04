<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
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
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new Docente();
        $registro->nombre_docente= $request->nombre_docente;
        $registro->ap_paterno_docente= $request->ap_paterno_docente;
        $registro->ap_materno_docente= $request->ap_materno_docente;
        $registro->sexo_docente= $request->sexo_docente;
        $registro->edad_docente= $request->edad_docente;
        $registro->curp_docente= $request->curp_docente;
        $registro->rfc_docente= $request->rfc_docente;
        $registro->email_docente= $request->email_docente;
        $registro->tel_casa_docente= $request->tel_casa_docente;
        $registro->cel_docente= $request->cel_docente;
        $registro->ciudad_docente= $request->ciudad_docente;
        $registro->alcaldia_docente= $request->alcaldia_docente;
        $registro->colonia_docente= $request->colonia_docente;
        $registro->calle_docente= $request->calle_docente;
        $registro->cp_docente= $request->cp_docente;
        $registro->cedula_docente= $request->cedula_docente;
        $registro->especialidad= $request->especialidad;
        $registro->profesion= $request->profesion;
        $registro->asignatura= $request->asignatura;
        $registro->save();
        return redirect()->route('docentes.index', $registro);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docente')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docentes)
    {
        return view('docentes.editar',compact('docentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docentes)
    {
        $docentes->nombre_docente= $request->nombre_docente;
        $docentes->ap_paterno_docente= $request->ap_paterno_docente;
        $docentes->ap_materno_docente= $request->ap_materno_docente;
        $docentes->sexo_docente= $request->sexo_docente;
        $docentes->edad_docente= $request->edad_docente;
        $docentes->curp_docente= $request->curp_docente;
        $docentes->rfc_docente= $request->rfc_docente;
        $docentes->email_docente= $request->email_docente;
        $docentes->tel_casa_docente= $request->tel_casa_docente;
        $docentes->cel_docente= $request->cel_docente;
        $docentes->ciudad_docente= $request->ciudad_docente;
        $docentes->alcaldia_docente= $request->alcaldia_docente;
        $docentes->colonia_docente= $request->colonia_docente;
        $docentes->calle_docente= $request->calle_docente;
        $docentes->cp_docente= $request->cp_docente;
        $docentes->cedula_docente= $request->cedula_docente;
        $docentes->especialidad= $request->especialidad;
        $docentes->profesion= $request->profesion;
        $docentes->asignatura= $request->asignatura;

        $docentes->save();
        return redirect()->route('docentes.index', $docentes);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index')->with('destroy','exit');
    }
}
