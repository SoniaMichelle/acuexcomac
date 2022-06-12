<?php

namespace App\Http\Controllers\Pagos;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\PagoAlumno;
use Illuminate\Http\Request;

class AlumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pago = PagoAlumno::all();
        return view('pagos.pagoAlumnos.index', compact('pago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $palumnos = Alumno::all();
        return view('pagos.pagoAlumnos.create', compact('palumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo = new PagoAlumno();
        
        $nuevo->name_alumno = $request->name_alumno;
        $nuevo->fecha_alum=$request->fecha_alum;
        $nuevo->cantidad_alum=$request->cantidad_alum;
        $nuevo->concepto_alum=$request->concepto_alum;
        $nuevo->save();
        return redirect()->route('pago.index', $nuevo);
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
    public function edit(PagoAlumno $pagos)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagoAlumno $pagos)
    {

        $pagos->name_alumno=$request->name_alumno;
        $pagos->concepto_alum=$request->concepto_alum;
        $pagos->cantidad_alum=$request->cantidad_alum;
        $pagos->fecha_alum=$request->fecha_alum;
       
        $pagos->save();
        return redirect()->route('nomina.index', $pagos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
