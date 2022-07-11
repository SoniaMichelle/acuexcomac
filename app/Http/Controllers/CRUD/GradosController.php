<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Grado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;

class GradosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grados = Grado::all();
        return view('alumnos.grado.index', compact('grados'));
    }
    
    public function pdf(Request $request,$id){
        $listas = Alumno::where('grado_id', $id)->get();
        $pdf = PDF::loadView('alumnos.grado.pdf',['grados'=>$listas]);
       /*  $pdf->loadHTML('<h1>Test</h1>'); */
        return $pdf->stream();
        /* return view('alumnos.grado.pdf', compact('grados')); */
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grados = Grado::all();
        return view('alumnos.grado.create', compact('grados'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo = new Grado();
        $nuevo->nombre_grado = $request->nombre_grado;
        $nuevo->save();
        return redirect()->route('grados.index', $nuevo);
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
    public function update(Request $request, Grado $grados)
    {
        $grados->nombre_grado=$request->nombre_grado;

        $grados->save();
        return redirect()->route('grados.index', $grados);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grado $grado)
    {
        $grado->delete();
        return redirect()->route('grados.index')->with('destroy','exit');
    }
}
