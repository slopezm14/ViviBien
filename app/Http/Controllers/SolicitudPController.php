<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use ViviBien\tipo_ingreso;
use ViviBien\proyectos;
use ViviBien\genero;
use ViviBien\infoinvolucrado;
use ViviBien\expediente;
use ViviBien\relacion_familiar;
use ViviBien\destino_subsidio;
use Session;
use Redirect;

class SolicitudPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $requisitos = DB::table('tb_requisitos as r')
        ->select('r.id_requisito','r.id_tipo_ingreso','r.descripcion_requisito')
        ->where('id_tipo_ingreso',1)->get();

        $proyecto = proyectos::pluck('nombre_proyecto','id_proyecto');
        $genero = genero::pluck('id_generos','descripcion_genero');
        $relacion = relacion_familiar::pluck('descripcion','id_relacion_familiar');
        $destino = destino_subsidio::pluck('descripcion','id_tipo_solicitud_subsidio');

        $numerito_temp = DB::table('tb_expediente')->select('numero_expediente')->orderBy('numero_expediente', 'desc')->first();
        $num = $numerito_temp->numero_expediente+1;
        
        return view('expediente.i_expedientep',compact('requisitos','destino',
        'genero','proyecto','relacion','num'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conteo = DB::table('tb_requisitos as r')
        ->select('COUNT(r.id_requisito)','r.id_tipo_ingreso','r.descripcion_requisito')
        ->where('id_tipo_ingreso',1)->count();

        //Ingreso de la persona involucrada
        //Ingreso de Expediente
        
        //Ingreso
        $diligencia = DB::select('select id_diligencia from tb_cat_diligencias');
        $dilis = DB::table('tb_cat_diligencias')->select('id_diligencia')->count();

        
        
        $flag = 0;
        for($i=1; $i<=$conteo; $i++){
              if($request->file('archivo_'.(string)$i) == null){
                //$path= $request->file('archivo_'.(string)$i);
                //$path->storeAs('archivo_5','archivos_'.$i.'.'.$path->getClientOriginalExtension());
                $flag = $flag + 1;
              }
              else{
                
              }
        }
        
        
        if($flag === 0){
            \ViviBien\infoinvolucrado::create([
                'id_relacion_familiar'=>$request['id_relacion'],
                'id_generos'=>$request['id_generos'],
                'numero_documento'=>$request['numero_documento'],
                'nombre1'=>$request['nombre1'],
                'nombre2'=>$request['nombre2'],
                'apellido1'=>$request['apellido1'],
                'apellido2'=>$request['apellido2'],
                'apellidoCasada'=>$request['apellidoCasada'],
                'numero_telefono'=>$request['numero_telefono'],
                'fecha_nacimiento'=>$request['fecha_nacimiento'],
                'direccion'=>$request['direccion']
            ]);

            $solicitante = DB::select('select id_solicitante from tb_info_personas_invo where nombre1 = :nombre1 AND nombre2 = :nombre2
            AND apellido1 = :apellido1 AND apellido2 = :apellido2 AND numero_telefono = :numero_telefono', 
                    ['nombre1' => $request['nombre1'],'nombre2' => $request['nombre2'],
                    'apellido1' => $request['apellido1'], 'apellido2'=>$request['apellido2'], 
                    'numero_telefono'=>$request['numero_telefono']]);

            

            \ViviBien\expediente::create([
                'id_tipo_ingreso'=>1,
                'id_usuario'=>auth()->user()->id,
                'fecha_registro'=>$request['fecha_registro'],
                'observaciones_expediente'=>$request['observaciones_expediente'],
                'monto_solicitado'=>$request['monto_solicitado'],
                'id_tipo_solicitud_subsidio'=>$request['id_tipo_solicitud_subsidio'],
                'id_proyecto'=>$request['id_proyecto'],
                'fecha_registro'=>$request['fecha_registro'],
                'observaciones_expediente'=>$request['observaciones_expediente'],
                'anio_expediente'=>$request['anio_expediente'],
                'numero_expediente'=>$request['numero_expediente'],
                'status'=>'I',
            ]);
                      
            

            $expediente = DB::select('select id_expediente from tb_expediente where id_proyecto = :id_proyecto AND anio_expediente
             = :anio_expediente AND numero_expediente = :numero_expediente', 
                    ['id_proyecto' => $request['id_proyecto'],'anio_expediente'=>$request['anio_expediente'],
                    'numero_expediente'=>$request['numero_expediente']]);
            
                    for($x=0; $x<$dilis; $x++){
                        \ViviBien\diligencia::create([
                            'id_expediente'=>$expediente[0]->id_expediente,
                            'id_diligencia'=>$diligencia[$x]->id_diligencia,
                            'fecha_diligencia'=>$request['fecha_registro'],
                            'diligencia_finalizada'=>'N',
                            'resultado_diligencia'=>'No Comple'
                        ]);
                    }

                    for($j=1; $j<=$conteo; $j++){
                        if($request->file('archivo_'.(string)$j) != null){
                          
                          //$flag = $flag + 1;
                          \ViviBien\expedienterequi::create([
                            'id_expediente'=> $expediente[0]->id_expediente,
                            'id_usuario'=>auth()->user()->id,
                            'id_requisito'=> $j,
                            'id_solicitante'=>$solicitante[0]->id_solicitante,
                            'fecha_presentacion'=>$request['fecha_registro'],
                            'estatus'=>'I',
                            'observaciones'=>'Ingresado correctamente'
                        ]);

                        
                        $expedienterequi = DB::select('select id_expediente_requisito from tb_expediente_requisitos where id_expediente = :expediente AND id_usuario
                        = :id_usuario AND id_requisito = :id_requisito AND id_solicitante = :id_solicitante', ['expediente'=> $expediente[0]->id_expediente,'id_usuario'=>auth()->user()->id,'id_requisito'=>$j,'id_solicitante'=>$solicitante[0]->id_solicitante]);
                        

                               $path= $request->file('archivo_'.(string)$j);
                                    $path->storeAs('archivo_'.(string)$expediente[0]->id_expediente,'archivos_'.$j.'.'.$path->getClientOriginalExtension());

                               \ViviBien\digitalizacion::create([
                                   'id_expediente_requisito'=>$expedienterequi[0]->id_expediente_requisito,
                                   'id_expediente'=>$expediente[0]->id_expediente,
                                   'id_solicitante'=>$solicitante[0]->id_solicitante,
                                   'id_usuario'=>auth()->user()->id,
                                   'fecha_presentacion'=>$request['fecha_registro'],
                                   'aceptado'=>'S',
                                   'motivo_rechazo'=>'No hubo rechazo',
                                   'path'=>$path
                                
                                ]);  
                        }
                    }


        

        
         


    }
    else{
        Session::flash('message','Faltan Requisitos, no insertado');
        return Redirect::to('/personal/create');
    }
    Session::flash('message','Todo Bien');
        return Redirect::to('/personal/create');
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
        //
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
