<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\proyectos;
use ViviBien\desarrollador;
use ViviBien\cat_municipio;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
use Illuminate\Support\Facades\Auth;
use ViviBien\Http\Middleware\CheckRoles;



class ProyectoController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:Basico|Jefatura|Superusuario']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $proyectos = DB::table('tb_cat_proyectos as p')
        ->select('p.id_proyecto','p.nombre_proyecto','m.descripcion_municipio','d.nombre_desarrollador')
        ->join('tb_cat_municipios as m','m.id_municipio','=','p.id_municipio')
        ->join('tb_desarrolladores as d','d.id_desarrollador','=','p.id_desarrollador')
        ->get();

        //Retorna la información en esta vista.
        return view('cat_proyectos.d_proyecto', array('proyectos'=> $proyectos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desarrollador = desarrollador::pluck('nombre_desarrollador','id_desarrollador');
        $municipios = cat_municipio::pluck('descripcion_municipio','id_municipio');
        return view('cat_proyectos.i_proyecto', compact('municipios','desarrollador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $validado = $this->validate($request,[
            'id_municipio' => 'required|max:500',
            'id_desarrollador' => 'required|max:500',
            'nombre_proyecto' => 'required|max:100',
            'longitud_proyecto' => 'required|max:50',
            'latitud_proyecto' => 'required|max:50',
            'monto_aproximado_proyecto' => 'required|max:100',
            'fecha_inicio_trabajos' => 'required|date|after:today',
            ]);*/

        \ViviBien\proyectos::create([
            'id_municipio'=>$request['id_municipio_proyecto'],
            'id_desarrollador'=>$request['id_desarrollador'],
            'nombre_proyecto'=>$request['nombre_proyecto'],
            'longitud_proyecto'=>$request['longitud_proyecto'],
            'latitud_proyecto'=>$request['latitud_proyecto'],
            'monto_aproximado_proyecto'=>$request['monto_proyecto'],
            'fecha_inicio_trabajo'=>$request['fecha_inicio_trabajos'],
        ]);


        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'tb_cat_proyectos',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccionIP'=>$request->ip(),
            'nombre_computadora'=>gethostname(),
            'id_accion'=>1,
        ]);

        Session::flash('message','Insertado Correctamente!');
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
        $desarrollador = desarrollador::pluck('nombre_desarrollador','id_desarrollador');
        $municipios = cat_municipio::pluck('descripcion_municipio','id_municipio');
        $proyecto = DB::table('tb_cat_proyectos')->where('id_proyecto', $id)->first();

        //retorna la vista, con la información del registro.
        return view('cat_proyectos.u_proyecto',['desarrollador'=>$desarrollador,'municipios'=>$municipios,'proyecto'=>$proyecto]);
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
        DB::table('tb_cat_proyectos')->where('id_proyecto', $id)->limit(1)
        ->update(array('id_municipio'=>$request['id_municipio_proyecto'],
        'id_desarrollador'=>$request['id_desarrollador'],
        'nombre_proyecto'=>$request['nombre_proyecto'],
        'longitud_proyecto'=>$request['longitud_proyecto'],
        'latitud_proyecto'=>$request['latitud_proyecto'],
        'monto_aproximado_proyecto'=>$request['monto_aproximado_proyecto'],
        'fecha_inicio_trabajo'=>$request['fecha_inicio_trabajos']));
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
