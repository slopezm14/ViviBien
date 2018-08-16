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

class ViewsController extends Controller
{
    public function index()
    {
        $municipios = DB::table('users as u')
        ->select('u.id','r.name')
        ->join('model_has_roles as m','m.model_id','=','u.model_id')
        ->join('roles as r','m.role_id','=','r.id')
        ->where('u.id',auth()->user()->id)
        ->get();

        return view('home',compact('municipios'));
    }

    public function first(){
        return view('expediente.i_numpe');
    }

    public function second(Request $request){
        $holi = $request['numero'];

        $requisitos = DB::table('tb_requisitos as r')
        ->select('r.id_requisito','r.id_tipo_ingreso','r.descripcion_requisito')
        ->where('id_tipo_ingreso',2)->get();

        $proyecto = proyectos::pluck('nombre_proyecto','id_proyecto');
        $genero = genero::pluck('id_generos','descripcion_genero');
        $relacion = relacion_familiar::pluck('descripcion','id_relacion_familiar');
        $destino = destino_subsidio::pluck('descripcion','id_tipo_solicitud_subsidio');

        return view('expediente.i_expedienteg',compact('holi','proyecto','relacion','destino','genero','requisitos'));
    }

    public function chose(){
        $proyecto = proyectos::pluck('nombre_proyecto','id_proyecto');
        return view('cat_diligencias.choose',compact('proyecto'));
    }

    public function list(Request $request){
        $choose = $request['choose'];
        $status = DB::table('tb_expediente as e')
        ->select('e.status')
        ->join('tb_cat_proyectos as p','p.id_proyecto','e.id_proyecto')
        ->where('e.id_proyecto',$choose)->get();

        // $conteo = DB::table('users as us')
        //  ->select('d.id_diligencia')
        //  ->join('tb_unidad_trabajo as u','u.id_unidad_trabajo','us.id_unidad_trabajo')
        // ->join('tb_cat_diligencias as d','d.id_unidad_trabajo','u.id_unidad_trabajo')
        // ->join('tb_expediente_diligencia as e','e.id_diligencia','d.id_diligencia')
        // ->where('us.id',auth()->user()->id)->where('e.diligencia_finalizada','N')->count();

        

        $unidad = DB::table('users as us')
        ->select('ut.descripcion_unidad')
        ->join('tb_unidad_trabajo as ut','ut.id_unidad_trabajo','us.id_unidad_trabajo')
        ->where('us.id',auth()->user()->id)->get();

        $hidden = 'x';
        if($status[0]->status == 'I' and $unidad[0]->descripcion_unidad == 'Social'){

            $diligencias = DB::table('tb_cat_diligencias as dili')
            ->select('dili.id_diligencia','dili.descripcion_diligencia')
            ->join('tb_unidad_trabajo AS ut','ut.id_unidad_trabajo','dili.id_unidad_trabajo')
            ->join('tb_expediente_diligencia AS ed','ed.id_diligencia','dili.id_diligencia')
            ->join('tb_expediente AS e','e.id_expediente','ed.id_expediente')
            ->where('ut.descripcion_unidad','Social')
            ->where('e.id_proyecto',$choose)
            ->where('ed.diligencia_finalizada','N')->get();
            $hidden = 'J';

        }
        if($status[0]->status == 'J' AND $unidad[0]->descripcion_unidad == 'Juridico' ){
            $diligencias = DB::table('tb_cat_diligencias as dili')
            ->select('dili.id_diligencia','dili.descripcion_diligencia')
            ->join('tb_unidad_trabajo AS ut','ut.id_unidad_trabajo','dili.id_unidad_trabajo')
            ->join('tb_expediente_diligencia AS ed','ed.id_diligencia','dili.id_diligencia')
            ->join('tb_expediente AS e','e.id_expediente','ed.id_expediente')
            ->where('ut.descripcion_unidad','Juridico')
            ->where('e.id_proyecto',$choose)
            ->where('ed.diligencia_finalizada','N')->get();
            $hidden = 'F';
        }
        if($status[0]->status == 'F' AND $unidad[0]->descripcion_unidad == 'Financiero'){
            $diligencias = DB::table('tb_cat_diligencias as dili')
            ->select('dili.id_diligencia', 'dili.descripcion_diligencia')
            ->join('tb_unidad_trabajo AS ut','ut.id_unidad_trabajo','dili.id_unidad_trabajo')
            ->join('tb_expediente_diligencia AS ed','ed.id_diligencia','dili.id_diligencia')
            ->join('tb_expediente AS e','e.id_expediente','ed.id_expediente')
            ->where('ut.descripcion_unidad','Financiero')
            ->where('e.id_proyecto',$choose)
            ->where('ed.diligencia_finalizada','N')->get();
            $hidden = 'E';
            }

        
        return view('cat_diligencias.list',compact('diligencias','hidden','choose'));
    }

    public function update(Request $request){

    }
}
