<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\categoriadili;
use ViviBien\unidad_trabajo;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
class CateDiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diligencias = DB::table('tb_cat_diligencias as d')
        ->select('d.id_diligencia','d.descripcion_diligencia','u.descripcion_unidad')
        ->join('tb_unidad_trabajo as u','u.id_unidad_trabajo','=','d.id_unidad_trabajo')
        ->get();
        return view('cat_diligencias.d_cat_dili', array('diligencias'=> $diligencias));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidad = unidad_trabajo::pluck('descripcion_unidad','id_unidad_trabajo');
        return view('cat_diligencias.i_cat_dili', compact('unidad'));
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
            'id_unidad_trabajo' => 'required|max:50',
            'descripcion_diligencia' => 'required|max:150',
            'direccion_empresa' => 'required|max:100',
            'obligatoria' => 'required|max:2',
            'orden' => 'required|max:50',

            ]);

        \ViviBien\categoriadili::create([
            'id_unidad_trabajo'=>$request['id_unidad_trabajo'],
            'descripcion_diligencia'=>$request['descripcion_diligencia'],
            'obligatoria'=>$request['obligatorio'],
            'orden'=>$request['orden'],
            
        ]);

        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'tb_cat_diligencias',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccionIP'=>$request->ip(),
            'nombre_computadora'=>gethostname(),
            'id_accion'=>1,
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
        $diligencia = DB::table('tb_cat_diligencias')->where('id_diligencia', $id)->first();
        $unidad = unidad_trabajo::pluck('descripcion_unidad','id_unidad_trabajo');
        //retorna la vista, con la información del registro.
        return view('cat_diligencias.u_cat_dili',['diligencia'=>$diligencia,'unidad'=>$unidad]);
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
        DB::table('tb_cat_diligencias')->where('id_diligencia', $id)->limit(1)
        ->update(array(
            'id_unidad_trabajo'=>$request['id_unidad_trabajo'],
            'descripcion_diligencia'=>$request['descripcion_diligencia'],
            'obligatoria'=>$request['obligatoria'],
            'orden'=>$request['orden'],
        ));
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
