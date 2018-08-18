<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\tipoaccion;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
class TipoAccionController extends Controller
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
        $tiposacciones = DB::table('tb_tipoaccion as t')
        ->select('t.id_accion','t.descripcion_accion')
        ->get();

        //Retorna la información en esta vista.
        return view('tipoAccion.d_tipo_accion', array('tiposacciones'=> $tiposacciones));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoAccion.i_tipo_accion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validado = $this->validate($request,[
            'descripcion_accion' => 'required|max:100',
         
            ]);

        \ViviBien\tipoaccion::create([
            'descripcion_accion'=>$request['descripAccion'],
        ]);

           
        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'tb_tipoaccion',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccionIP'=>$request->ip(),
            'nombre_computadora'=>gethostname(),
            'id_accion'=>1,
        ]);

        Session::flash('message','Insertado Correctamente');
        return Redirect::to('tipoaccion/create');
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
        $tipoaccion = DB::table('tb_tipoaccion')->where('id_accion', $id)->first();

        //retorna la vista, con la información del registro.
        return view('tipoAccion.u_tipo_accion',['tipoaccion'=>$tipoaccion]);
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
        DB::table('tb_tipoaccion')->where('id_accion', $id)->limit(1)
        ->update(array('descripcion_accion'=>$request['descripcion_accion']));
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
