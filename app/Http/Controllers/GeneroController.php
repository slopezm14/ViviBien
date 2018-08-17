<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;

class GeneroController extends Controller
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
        $genero = DB::table('tb_generos as g')
        ->select('g.id_generos','g.descripcion_genero')
        ->get();

        //Retorna la información en esta vista.
        return view('genero.d_genero', array('genero'=> $genero));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genero.i_Genero');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \ViviBien\genero::create([
            'descripcion_genero'=>$request['genero'],
        ]);

        
        Session::flash('message','Inserción Exitosa!');
        return Redirect::to('/genero/create');
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
        $genero = DB::table('tb_generos')->where('id_generos', $id)->first();

        //retorna la vista, con la información del registro.
        return view('genero.u_Genero',['genero'=>$genero]);
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
        DB::table('tb_generos')->where('id_generos', $id)->limit(1)
        ->update(array('descripcion_genero'=>$request['genero']));
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
