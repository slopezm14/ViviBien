<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\requisito;
use ViviBien\tipo_ingreso;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;

class RequisitoController extends Controller
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
        $requisito = DB::table('tb_requisitos as r')
        ->select('r.id_requisito','r.descripcion_requisito')
        ->get();

        //Retorna la información en esta vista.
        return view('requisitos.d_requisitos', array('requisito'=> $requisito));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoingreso = tipo_ingreso::pluck('descripcion_ingreso','id_tipo_ingreso');
        return view('requisitos.i_requisitos', compact('tipoingreso'));
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
            'descripcion_requisito' => 'required|max:100',
            'observaciones' => 'required|max:100',
            ]);


        \ViviBien\requisito::create([
            'id_tipo_ingreso'=>$request['id_tipo_ingreso'],
            'descripcion_requisito'=>$request['descripcion_requisito'],
            'observaciones'=>$request['observaciones'],
            'obligatorio'=>$request['obligatorio'],
        ]);

        
        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'tb_expediente_requisitos',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccionIP'=>$request->ip(),
            'nombre_computadora'=>gethostname(),
            'id_accion'=>1,
        ]);

        Session::flash('message','Insertado Correctamente');
        return Redirect::to('requisito/create');
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
        $requisito = DB::table('tb_requisitos')->where('id_requisito', $id)->first();
        $tipoingreso = tipo_ingreso::pluck('descripcion_ingreso','id_tipo_ingreso');

        //retorna la vista, con la información del registro.
        return view('requisitos.u_requisitos',['requisito'=>$requisito,'tipoingreso'=>$tipoingreso]);
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
