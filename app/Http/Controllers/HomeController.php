<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $municipios = DB::table('users as u')
        // ->select('u.id')
        // ->join('tb_unidad_trabajo as u','u.id_unidad_trabajo','=','u.')
        // ->join('roles as r','m.role_id','=','r.id')
        // ->where('u.id',auth()->user()->id)
        // ->get();

    //     SELECT COUNT(d.id_diligencia)
    // FROM users as us
    // INNER JOIN tb_unidad_trabajo as u on u.id_unidad_trabajo = us.id_unidad_trabajo
    // INNER JOIN tb_cat_diligencias as d on d.id_unidad_trabajo = u.id_unidad_trabajo
    // INNER JOIN tb_expediente_diligencia as e on e.id_diligencia = d.id_diligencia
    // WHERE u.id_unidad_trabajo = 3 AND us.id = 17

    
    $conteo = DB::table('users as us')
    ->select('d.id_diligencia')
    ->join('tb_unidad_trabajo as u','u.id_unidad_trabajo','us.id_unidad_trabajo')
    ->join('tb_cat_diligencias as d','d.id_unidad_trabajo','u.id_unidad_trabajo')
    ->join('tb_expediente_diligencia as e','e.id_diligencia','d.id_diligencia')
    ->where('us.id',auth()->user()->id)->where('e.diligencia_finalizada','N')->count();
    return view('home',compact('conteo'));

    }
}
