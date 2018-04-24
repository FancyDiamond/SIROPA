<?php

namespace Siropa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Siropa\Http\Requests\ProyectoCreateRequest;
use Filesystem;
use Session;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return('Todo bien bitch');
        $proyectos = \Siropa\Proyecto::paginate(10);
        return view('proyecto.index', compact('proyectos'));
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
        return view('proyecto.create',compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoCreateRequest $request)
    {
        //
        \Siropa\Proyecto::create([
            'nombre_proyecto'=>$request['nombre_proyecto'],
            'numero_proyecto'=>$request['numero_proyecto'],
            'region'=>$request['region'],
            'localidad'=>$request['localidad'],
            'direccion'=>$request['direccion'],
            'nombre_constructora'=>$request['nombre_constructora'],
            'municipio_id'=>$request['municipio_id'],
            'cargo'=>$request['cargo'],
            'telefono'=>$request['telefono'],
            'email'=>$request['email'],
            'fecha_inicio'=>$request['fecha_inicio'],
            'fecha_fin'=>$request['fecha_fin'],
            
        ]);
        Session::flash('message','Proyecto Creado Correctamente');
        return redirect('/proyecto');
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
        $proyecto = \Siropa\Proyecto::find($id);
        return view('proyecto.edit',['proyecto'=>$proyecto],compact('municipios'));
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
        $proyecto = \Siropa\Proyecto::find($id);
        $proyecto -> fill($request->all());
        $proyecto -> save();

        Session::flash('message','Proyecto Modificado Correctamente');
        return Redirect('/proyecto');
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
        \Siropa\Proyecto::destroy($id);

        Session::flash('message','Proyecto Eliminado Correctamente');
        return Redirect('/proyecto');
    }
}
