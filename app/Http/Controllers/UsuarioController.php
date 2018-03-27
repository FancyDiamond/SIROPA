<?php

namespace Siropa\Http\Controllers;

use Illuminate\Http\Request;
use Siropa\Http\Requests\UserCreateRequest;
use Siropa\Http\Requests\UserUpdateRequest;
use Session;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "estoy en el index";
        $users = \Siropa\User::paginate(10);
        return view('usuario.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario.create');
        //return "estoy en el create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        //
        \Siropa\User::create([
            'nombre'=>$request['nombre'],
            'clave_fun'=>$request['clave_fun'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password']),
            'telefono'=>$request['telefono'],
            'direccion'=>$request['direccion'],
            'municipio'=>$request['municipio'],
            'puesto'=>$request['puesto'],
        ]);
        Session::flash('message','Usuario Creado Correctamente');
        return redirect('/usuario');
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
        $user = \Siropa\User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        //
        $user = \Siropa\User::find($id);
        $user -> fill($request->all());
        $user -> save();

        Session::flash('message','Usuario Modificado Correctamente');
        return Redirect('/usuario');

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
        \Siropa\User::destroy($id);

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect('/usuario');
    }
}
