<?php

namespace App\Http\Controllers\Pagos;

use App\Http\Controllers\Controller;
use App\Models\Docente;
use App\Models\Nomina;
use Illuminate\Http\Request;

class NominaController extends Controller
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
        $nomina = Nomina::all();
        return view('pagos.nomina.index', compact('nomina'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pnominas = Docente::all();
        return view('pagos.nomina.create', compact('pnominas'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo = new Nomina();

        $nuevo->name_docente=$request->name_docente;
        $nuevo->fecha_nomina=$request->fecha_nomina;
        $nuevo->cantidad_nomina=$request->cantidad_nomina;

        $nuevo->save();
        return redirect()->route('nomina.index', $nuevo);
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
    public function update(Request $request, Nomina $nominas)
    {
        $nominas->name_docente=$request->name_docente;
        $nominas->fecha_nomina=$request->fecha_nomina;
        $nominas->cantidad_nomina=$request->cantidad_nomina;
        $nominas->save();
        return redirect()->route('nomina.index', $nominas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nomina $nominas)
    {
        $nominas->delete();
        return redirect()->route('nomina.index')->with('destroy','exit');
    }
}
