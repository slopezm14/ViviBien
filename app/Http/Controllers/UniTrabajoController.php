<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\unidad_trabajo;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
class UniTrabajoController extends Controller
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
        $unidades = DB::table('tb_unidad_trabajo as u')
        ->select('u.id_unidad_trabajo','u.descripcion_unidad')
        ->get();

        //Retorna la información en esta vista.
        return view('unidad_trabajo.d_unidad', array('unidades'=> $unidades));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidad_trabajo.i_unidad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \ViviBien\unidad_trabajo::create([
            'descripcion_unidad'=>$request['descripcion_unidad'],
        ]);


        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'tb_unidad_trabajo',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccion_ip'=>'127.0.0.1',
            'nombre_computadora'=>gethostname(),
            'id_accion'=>1,
        ]);

        Session::flash('message','Insertado Correctamente');
        return Redirect::to('unidadtrabajo/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidad = DB::table('tb_unidad_trabajo')->where('id_unidad_trabajo', $id)->first();

        //retorna la vista, con la información del registro.
        return view('unidad_trabajo.u_unidad',['unidad'=>$unidad]);
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
        DB::table('tb_unidad_trabajo')->where('id_unidad_trabajo', $id)->limit(1)
        ->update(array('descripcion_unidad'=>$request['descripcion_unidad']));
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
