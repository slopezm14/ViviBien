<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use ViviBien\tipo_ingreso;
use ViviBien\proyectos;
use ViviBien\genero;
use ViviBien\infoinvolucrado;
use ViviBien\expediente;
use ViviBien\relacion_familiar;
use ViviBien\destino_subsidio;
use Session;
use Redirect;

class SolicitudGController extends Controller
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
    public function create(Request $request)
    {
        $numero = $request['numero'];
        $holi = [$numero];
        return view('expediente.i_expedienteg',compact('holi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //SELECT * FROM Table ORDER BY ID DESC LIMIT 1
        $conteo = DB::table('tb_requisitos as r')
        ->select('r.id_requisito')
        ->where('id_tipo_ingreso',2)
        ->orderBy('id_requisito', 'desc')->first();
        
        

        $numero = (integer)$request['numero'];
        //Ingreso de la persona involucrada
        //Ingreso de Expediente
        
        //Ingreso
        $flag = 0;
        for($j=1; $j<=$numero; $j++){
            for($i=6; $i<=$conteo->id_requisito; $i++){
                if($request->file('p'.(string)$j.'archivo_'.(string)$i) == null){
                    //$path= $request->file('archivo_'.(string)$i);
                    //$path->storeAs('archivo_5','archivos_'.$i.'.'.$path->getClientOriginalExtension());
                    $flag = $flag + 1;
                }
                else{
                
                }
            }
        }
                
        if($flag === 0){
            for($j=1; $j<=$numero; $j++){
                \ViviBien\infoinvolucrado::create([
                    'id_relacion_familiar'=>$request[$j.'id_relacion'],
                    'id_generos'=>$request[$j.'id_generos'],
                    'numero_documento'=>$request[$j.'numero_documento'],
                    'nombre1'=>$request[$j.'nombre1'],
                    'nombre2'=>$request[$j.'nombre2'],
                    'apellido1'=>$request[$j.'apellido1'],
                    'apellido2'=>$request[$j.'apellido2'],
                    'apellidoCasada'=>$request[$j.'apellidoCasada'],
                    'numero_telefono'=>$request[$j.'numero_telefono'],
                    'fecha_nacimiento'=>$request[$j.'fecha_nacimiento'],
                    'direccion'=>$request[$j.'direccion']
                ]);
            }
            
            $solicitante = array();
            for($j=1; $j<=$numero; $j++){
            $p = DB::select('select id_solicitante from tb_info_personas_invo where nombre1 = :nombre1 AND nombre2 = :nombre2
            AND apellido1 = :apellido1 AND apellido2 = :apellido2 AND numero_telefono = :numero_telefono', 
                    ['nombre1' => $request[$j.'nombre1'],'nombre2' => $request[$j.'nombre2'],
                    'apellido1' => $request[$j.'apellido1'], 'apellido2'=>$request[$j.'apellido2'], 
                    'numero_telefono'=>$request[$j.'numero_telefono']]);
            array_push($solicitante, $p);
            }
            
            

            \ViviBien\expediente::create([
                'id_tipo_ingreso'=>2,
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
            
            //dd($solicitante[0][0]->id_solicitante);

            $expediente = DB::select('select id_expediente from tb_expediente where id_proyecto = :id_proyecto AND anio_expediente
             = :anio_expediente AND numero_expediente = :numero_expediente', 
                    ['id_proyecto' => $request['id_proyecto'],'anio_expediente'=>$request['anio_expediente'],
                    'numero_expediente'=>$request['numero_expediente']]);
            
            //dd($solicitante[0][0]->id_solicitante);
            $exped = array();
                    for($j=1; $j<=$numero; $j++){
                        for($i=6; $i<=$conteo->id_requisito; $i++){
                        if($request->file('p'.(string)$j.'archivo_'.(string)$i) != null){
                          
                          //$flag = $flag + 1;
                         $exp = \ViviBien\expedienterequi::create([
                            'id_expediente'=> $expediente[0]->id_expediente,
                            'id_usuario'=>auth()->user()->id,
                            'id_requisito'=> $i,
                            'id_solicitante'=>$solicitante[$j-1][0]->id_solicitante,
                            'fecha_presentacion'=>$request['fecha_registro'],
                            'estatus'=>'I',
                            'observaciones'=>'Ingresado correctamente'
                        ]);

                       
                        $expedienterequi = DB::select('select id_expediente_requisito from tb_expediente_requisitos where id_expediente = :expediente AND id_usuario
                        = :id_usuario AND id_requisito = :id_requisito AND id_solicitante = :id_solicitante', ['expediente'=> $expediente[0]->id_expediente,'id_usuario'=>auth()->user()->id,
                        'id_requisito'=>$i,'id_solicitante'=>$solicitante[$j-1][0]->id_solicitante]);
                        array_push($exped, $expedienterequi);

                               $path= $request->file('p'.(string)$j.'archivo_'.(string)$i);
                                    $path->storeAs($solicitante[$j-1][0]->id_solicitante.'archivo_'.(string)$expediente[0]->id_expediente,'p'.$j.'archivo_'.(string)$i.'.'.$path->getClientOriginalExtension());
                                    
                               \ViviBien\digitalizacion::create([
                                   'id_expediente_requisito'=>$expedienterequi[0]->id_expediente_requisito,
                                   'id_expediente'=>$expediente[0]->id_expediente,
                                   'id_solicitante'=>$solicitante[$j-1][0]->id_solicitante,
                                   'id_usuario'=>auth()->user()->id,
                                   'fecha_presentacion'=>$request['fecha_registro'],
                                   'aceptado'=>'S',
                                   'motivo_rechazo'=>'No hubo rechazo',
                                   'path'=>$path
                                
                                ]);  
                        }
                    }
                    }


        

        
         


    }
    else{
        Session::flash('message','Faltan Requisitos, no insertado');
        return Redirect::to('/second');
    }
    Session::flash('message','Todo Bien');
        return Redirect::to('/second');




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
