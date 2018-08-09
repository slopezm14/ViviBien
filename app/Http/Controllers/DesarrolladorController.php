<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\desarrollador;
use ViviBien\telefono;
use Illuminate\Support\Facades\DB;


class DesarrolladorController extends Controller
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
        return view('desarrolladores.i_desarrollador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \ViviBien\desarrollador::create([
            'nombre_desarrollador'=>$request['nombre_desarrollador'],
            'nit'=>$request['nit'],
            'direccion_empresa'=>$request['direccion_empresa'],
            'correo_electronico'=>$request['correo_electronico'],
            'nombre_owner'=>$request['nombre_owner'],
        ]);

        $results = DB::select('select id_desarrollador from tb_desarrolladores where nombre_desarrollador = :nombre 
        AND nit = :nit AND correo_electronico = :correo_electronico AND nombre_owner = :nombre_owner', 
                    ['nombre' => $request['nombre_desarrollador'],'nit' => $request['nit'],
                    'correo_electronico' => $request['correo_electronico'], 'nombre_owner'=>$request['nombre_owner']]);

        if(count($request['Num_Tel1']) != 0){
            \ViviBien\telefono::create([
                'numero_telefono'=>$request['Num_Tel1'],
                'id_desarrollador'=>$results[0]->id_desarrollador,
            ]);
        }
        if(count($request['Num_Tel2']) != 0){
            \ViviBien\telefono::create([
                'numero_telefono'=>$request['Num_Tel2'],
                'id_desarrollador'=>$results[0]->id_desarrollador,
            ]);
        }

        if(count($request['Num_Tel3']) != 0){
            \ViviBien\telefono::create([
                'numero_telefono'=>$request['Num_Tel3'],
                'id_desarrollador'=>$results[0]->id_desarrollador,
            ]);
        }
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
