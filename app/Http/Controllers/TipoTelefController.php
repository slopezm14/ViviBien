<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\tipostelefono;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
class TipoTelefController extends Controller
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
        $tipostelefonos = DB::table('tb_tipos_telefonos as t')
        ->select('t.id_tipotelefono','t.descripcion_tipotelefono')
        ->get();

        //Retorna la información en esta vista.
        return view('tipo_telefono.d_tipoTelefono', array('tipostelefonos'=> $tipostelefonos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_telefono.i_tipoTelefono');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \ViviBien\tipostelefono::create([
            'descripcion_tipotelefono'=>$request['tipo_telefono'],
        ]);

        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'tb_tipos_telefonos',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccion_ip'=>'127.0.0.1',
            'nombre_computadora'=>gethostname(),
            'id_accion'=>1,
        ]);

        Session::flash('message','Insertado Correctamente');
        return Redirect::to('tipotelefono/create');
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
        
        $tipotelefono = DB::table('tb_tipos_telefonos')->where('id_tipotelefono', $id)->first();

        //retorna la vista, con la información del registro.
        return view('tipo_telefono.u_tipoTelefono',['tipotelefono'=>$tipotelefono]);
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
        DB::table('tb_tipos_telefonos')->where('id_tipotelefono', $id)->limit(1)
        ->update(array('descripcion_tipotelefono'=>$request['descripcion_tipotelefono']));
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
