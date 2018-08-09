<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\proyectos;
use ViviBien\desarrollador;
use ViviBien\cat_municipio;
use Illuminate\Support\Facades\DB;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desarrollador = desarrollador::pluck('nombre_desarrollador','id_desarrollador');
        $municipios = cat_municipio::pluck('descripcion_municipio','id_municipio');
        return view('cat_proyectos.i_proyecto', compact('municipios','desarrollador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \ViviBien\proyectos::create([
            'id_municipio_proyecto'=>$request['id_municipio_proyecto'],
            'id_desarrollador'=>$request['id_desarrollador'],
            'nombre_proyecto'=>$request['nombre_proyecto'],
            'longitud_proyecto'=>$request['longitud_proyecto'],
            'latitud_proyecto'=>$request['latitud_proyecto'],
            'monto_aproximado_proyecto'=>$request['monto_proyecto'],
            'fecha_inicio_trabajo'=>$request['fecha_inicio_trabajos'],
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
