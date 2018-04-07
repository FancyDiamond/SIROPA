<?php

namespace Siropa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Siropa\Http\Requests\AdquisicionCreateRequest;
use Filesystem;
use Session;

class AdquisicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $adquisiciones = \Siropa\Adquisicion::paginate(10);
        return view('adquisicion.index', compact('adquisiciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $municipios = \Siropa\Municipio::pluck('municipio','id');
        return view('adquisicion.create',compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdquisicionCreateRequest $request)
    {
        //
        \Siropa\Adquisicion::create([
            'nombre_proyecto'=>$request['nombre_proyecto'],
            'numero_proyecto'=>$request['numero_proyecto'],
            'region'=>$request['region'],
            'localidad'=>$request['localidad'],
            'direccion'=>$request['direccion'],
            'nombre_empresa'=>$request['nombre_empresa'],
            'municipio_id'=>$request['municipio_id'],
            
        ]);
        Session::flash('message','Adquisición Creada Correctamente');
        return redirect('/adquisicion');
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
        $municipios = \Siropa\Municipio::pluck('municipio','id');
        $adquisicion = \Siropa\Adquisicion::find($id);
        return view('adquisicion.edit',['adquisicion'=>$adquisicion],compact('municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdquisicionCreateRequest $request, $id)
    {
        //
        $adquisicion = \Siropa\Adquisicion::find($id);
        $adquisicion -> fill($request->all());
        $adquisicion -> save();

        Session::flash('message','Adquisicion Modificada Correctamente');
        return Redirect('/adquisicion');
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
        \Siropa\Adquisicion::destroy($id);

        Session::flash('message','Adquisicion Eliminada Correctamente');
        return Redirect('/adquisicion');
    }
}
