<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\usuarios;
use ViviBien\roles;
use ViviBien\unidad_trabajo;
use ViviBien\genero;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = roles::pluck('descripcion_rol','id_rol');
        $unidad_trabajo = unidad_trabajo::pluck('descripcion_unidad','id_unidad_trabajo');
        $genero = genero::pluck('descripcion_genero','id_generos');
        return view('usuarios.i_usuario', compact('roles','unidad_trabajo','genero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \ViviBien\usuarios::create([
            'username'=>$request['usuario'],
            'id_rol'=>$request['id_rol'],
            'id_unidad_trabajo'=>$request['id_unidad'],
            'id_generos'=>$request['id_genero'],
            'nombre1'=>$request['nombre1'],
            'nombre2'=>$request['nombre2'],
            'nombre3'=>$request['nombre3'],
            'apellido1'=>$request['apellido1'],
            'apellido2'=>$request['apellido2'],
            'apellido3'=>$request['apellido3'],
            'estatus'=>$request['estatus'],
            'clave'=>$request['clave'],
        ]);
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
    public function destroy($id)
    {
        //
    }
}
