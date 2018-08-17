<?php

namespace ViviBien\Http\Controllers;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\destino_subsidio;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Session;
use Redirect;

class DestinoSubController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Jefatura|Superusuario']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos = DB::table('tb_cat_destino_subsidio as t')
        ->select('t.id_tipo_solicitud_subsidio','t.descripcion')
        ->get();

        //Retorna la información en esta vista.
        return view('cat_destino.d_destino_sub', array('destinos'=> $destinos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cat_destino_sub.i_destino_sub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \ViviBien\destino_subsidio::create([
            'descripcion'=>$request['descripcion'],
        ]);

        

        
    Session::flash('message','Inserción Exitosa!');
    return Redirect::to('/departamento/create');

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
        $destinos = DB::table('tb_cat_destino_subsidio')->where('id_tipo_solicitud_subsidio', $id)->first();

        //retorna la vista, con la información del registro.
        return view('cat_ddestino_sub.u_destino_sub',['destinos'=>$destinos]);
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
        DB::table('tb_cat_destino_subsidio')->where('id_tipo_solicitud_subsidio', $id)->limit(1)
        ->update(array('descripcion'=>$request['descripcion']));
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
