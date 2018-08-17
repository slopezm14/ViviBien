<?php

namespace ViviBien\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\desarrollador;
use ViviBien\telefono;
use ViviBien\tipostelefono;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;

class DesarrolladorController extends Controller
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
        $desarrolladores = DB::table('tb_desarrolladores as d')
        ->select('d.id_desarrollador','d.nombre_desarrollador','d.correo_electronico')
        ->get();

        //Retorna la información en esta vista.
        return view('desarrolladores.d_desarrollador', array('desarrolladores'=> $desarrolladores));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipotelefonos = tipostelefono::pluck('descripcion_tipotelefono','id_tipotelefono');

        return view('desarrolladores.i_desarrollador',array('tipotelefonos'=>$tipotelefonos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \ViviBien\desarrollador::create([
            'nombre_desarrollador'=>$request['nombre_desarrollador'],
            'nit'=>$request['nit'],
            'direccion_empresa'=>$request['direccion_empresa'],
            'correo_electronico'=>$request['correo_electronico'],
            'nombre_owner'=>$request['nombre_owner'],
        ]);

        $results = DB::select('select id_desarrollador from tb_desarrolladores where nombre_desarrollador = :nombre 
        AND nit = :nit AND correo_electronico = :correo_electronico AND nombre_owner = :nombre_owner', 
                    ['nombre' => $request['nombre_desarrollador'],'nit' => $request['nit'],
                    'correo_electronico' => $request['correo_electronico'], 'nombre_owner'=>$request['nombre_owner']]);

        if(count($request['Num_Tel1']) != 0){
            \ViviBien\telefono::create([
                'numero_telefono'=>$request['Num_Tel1'],
                'id_desarrollador'=>$results[0]->id_desarrollador,
                'id_tipotelefono'=>$request['tipotelefono1'],
            ]);
        }
        if(count($request['Num_Tel2']) != 0){
            \ViviBien\telefono::create([
                'numero_telefono'=>$request['Num_Tel2'],
                'id_desarrollador'=>$results[0]->id_desarrollador,
                'id_tipotelefono'=>$request['tipotelefono2']
            ]);
        }

        if(count($request['Num_Tel3']) != 0){
            \ViviBien\telefono::create([
                'numero_telefono'=>$request['Num_Tel3'],
                'id_desarrollador'=>$results[0]->id_desarrollador,
                'id_tipotelefono'=>$request['tipotelefono3']
            ]);
        }


        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'tb_desarrolladores',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccion_ip'=>'127.0.0.1',
            'nombre_computadora'=>gethostname(),
            'id_accion'=>1,
        ]);


        
    Session::flash('message','Inserción Exitosa!');
    return Redirect::to('/desarrollador/create');
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
        $desarrolladores = DB::table('tb_desarrolladores')->where('id_desarrollador', $id)->first();

        $tipotelefonos = tipostelefono::pluck('descripcion_tipotelefono','id_tipotelefono');

        $telefono = DB::table('tb_telefonos as t')
        ->select('t.id_telefono','t.numero_telefono','d.id_desarrollador')
        ->join('tb_desarrolladores as d','d.id_desarrollador','=','t.id_desarrollador')
        ->where('t.id_desarrollador', $id)
        ->get();

        return view('desarrolladores.u_desarrollador',array('desarrolladores'=>$desarrolladores,'tipotelefonos'=>$tipotelefonos,'telefono'=>$telefono));
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
        DB::table('tb_desarrolladores')->where('id_desarrollador', $id)->limit(1)
        ->update(array(
        'nombre_desarrollador'=>$request['nombre_desarrollador'],
        'nit'=>$request['nit'],
        'direccion_empresa'=>$request['direccion_empresa'],
        'correo_electronico'=>$request['correo_electronico'],
        'nombre_owner'=>$request['nombre_owner']
        ));

        if(count($request['Num_Tel1']) != 0){
            DB::table('tb_telefonos')->where('id_desarrollador', $id)->where('numero_telefono',$request['Num_Tel1'])->limit(1)
            ->update(array(
                'numero_telefono'=>$request['Num_Tel1'],
                'id_tipotelefono'=>$request['id_ttelefono1']
        ));

        }
        if(count($request['Num_Tel2']) != 0){
            DB::table('tb_telefonos')->where('id_desarrollador', $id)->where('numero_telefono',$request['Num_Tel2'])->limit(1)
            ->update(array(
                'numero_telefono'=>$request['Num_Tel2'],
                'id_tipotelefono'=>$request['id_ttelefono2']
        ));
        }

        if(count($request['Num_Tel3']) != 0){
            DB::table('tb_telefonos')->where('id_desarrollador', $id)->where('numero_telefono',$request['Num_Tel3'])->limit(1)
            ->update(array(
                'numero_telefono'=>$request['Num_Tel3'],
                'id_tipotelefono'=>$request['id_ttelefono3']
        ));
        }



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
