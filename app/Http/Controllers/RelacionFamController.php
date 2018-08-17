<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\relacion_familiar;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
class RelacionFamController extends Controller
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
        $relacion = DB::table('tb_cat_relacion_familiar as r')
        ->select('r.id_relacion_familiar','r.descripcion')
        ->get();

        //Retorna la información en esta vista.
        return view('cat_relacion_familiar.d_relacion', array('relacion'=> $relacion));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cat_relacion_familiar.i_relacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \ViviBien\relacion_familiar::create([
            'descripcion'=>$request['descripcion'],
        ]);

        
        Session::flash('message','Insertado Correctamente');
        return Redirect::to('proyecto/create');
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
        $relacion = DB::table('tb_cat_relacion_familiar')->where('id_relacion_familiar', $id)->first();

        //retorna la vista, con la información del registro.
        return view('cat_relacion_familiar.u_relacion',['relacion'=>$relacion]);
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
        DB::table('tb_cat_relacion_familiar')->where('id_relacion_familiar', $id)->limit(1)
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
