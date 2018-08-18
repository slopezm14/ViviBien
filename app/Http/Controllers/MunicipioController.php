<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\cat_departamento;
use ViviBien\cat_municipio;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
class MunicipioController extends Controller
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
        $municipios = DB::table('tb_cat_municipios as m')
        ->select('m.id_municipio','d.descripcion_departamento','m.descripcion_municipio')
        ->join('tb_cat_departamento as d','d.id_departamento','=','m.id_departamento')
        ->get();

        //Retorna la información en esta vista.
        return view('cat_municipios.d_municipio', array('municipios'=> $municipios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = cat_departamento::pluck('descripcion_departamento','id_departamento'); 

        
        return view('cat_municipios.i_municipio', array('departamentos'=> $departamentos));

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
            'descripcion_municipio' => 'required|max:100',
            ]);


        \ViviBien\cat_municipio::create([
            'descripcion_municipio'=>$request['descripcion_municipio'],
            'id_departamento'=>$request['id_departamento'],
        ]);

        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'tb_cat_municipios',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccionIP'=>$request->ip(),
            'nombre_computadora'=>gethostname(),
            'id_accion'=>1,
        ]);

        
        Session::flash('message','Inserción Exitosa!');
        return Redirect::to('/municipio/create');
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
        $departamentos = cat_departamento::pluck('descripcion_departamento','id_departamento'); 
        $municipios = DB::table('tb_cat_municipios')->where('id_municipio', $id)->first();

        //retorna la vista, con la información del registro.
        return view('cat_municipios.u_municipio',['municipios'=>$municipios,'departamentos'=>$departamentos]);
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
        DB::table('tb_cat_municipios')->where('id_municipio', $id)->limit(1)
        ->update(array('descripcion_municipio'=>$request['descripcion_municipio'],
        'id_departamento'=>$request['id_departamento']));
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
