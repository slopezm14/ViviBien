<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\cat_departamento;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Session;
use Redirect;

class DepartamentoController extends Controller
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
        $departamentos = DB::table('tb_cat_departamento as d')
        ->select('d.id_departamento','d.descripcion_departamento')
        ->get();

        //Retorna la información en esta vista.
        return view('cat_departamento.d_departamento', array('departamentos'=> $departamentos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cat_departamento.i_departamento');
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
            'descripcion_departamento' => 'required|max:100',
            ]);

        \ViviBien\cat_departamento::create([
            'descripcion_departamento'=>$request['descripcion_departamento'],
        ]);


        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'tb_cat_departamento',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccion_ip'=>'127.0.0.1',
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
        $departamento = DB::table('tb_cat_departamento')->where('id_departamento', $id)->first();

        //retorna la vista, con la información del registro.
        return view('cat_departamento.u_departamento',['departamento'=>$departamento]);
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
        DB::table('tb_cat_departamento')->where('id_departamento', $id)->limit(1)
        ->update(array('descripcion_departamento'=>$request['descripcion_departamento']));
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
