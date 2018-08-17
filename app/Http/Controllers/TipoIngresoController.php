<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\tipo_ingreso;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;

class TipoIngresoController extends Controller
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
        $tipoingreso = DB::table('tb_tipo_ingreso as t')
        ->select('t.id_tipo_ingreso','t.descripcion_ingreso')
        ->get();

        //Retorna la información en esta vista.
        return view('tipo_ingreso.d_tipo_ingreso', array('tipoingreso'=> $tipoingreso));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_ingreso.i_tipo_ingreso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        \ViviBien\tipo_ingreso::create([
            'descripcion_ingreso'=>$request['descripcion_ingreso'],
        ]);

        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'tb_tipoaccion',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccion_ip'=>'127.0.0.1',
            'nombre_computadora'=>gethostname(),
            'id_accion'=>1,
        ]);
        
        Session::flash('message','Insertado Correctamente');
        return Redirect::to('tipoingreso/create');
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
        $tipoingreso = DB::table('tb_tipo_ingreso')->where('id_tipo_ingreso', $id)->first();

        //retorna la vista, con la información del registro.
        return view('tipo_ingreso.u_tipo_ingreso',['tipoingreso'=>$tipoingreso]);
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
        DB::table('tb_tipo_ingreso')->where('id_tipo_ingreso', $id)->limit(1)
        ->update(array('descripcion_ingreso'=>$request['descripcion_ingreso']));
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
