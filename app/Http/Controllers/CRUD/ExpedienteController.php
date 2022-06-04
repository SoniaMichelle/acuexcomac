<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Expediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = Expediente::all();
        return view('expedientes.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nombres = Alumno::all();
        return view('expedientes.create', compact('nombres'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new Expediente();
        $registro->alumno_id = $request->alumno_id;
        
        if ($request->hasFile('files')) {
            $archivo=$request->file('files');
            $archivo->move(public_path().'/Archivos',$archivo->getClientOriginalName());
            $registro->files=$archivo->getClientOriginalName();
        }
        $registro->save();
        return redirect()->route('expedientes.index', $registro);   
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $files = Expediente::whereId($id)->firstOrFail();
        unlink(public_path('Archivos' . '/' . $files->files));
        $files->delete();
      /*   alert()->warning('Atencion', 'Se ha eliminado el archivo'); */
        return redirect()->route('expedientes.index');
    }
}
