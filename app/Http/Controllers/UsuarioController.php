<?php

namespace ViviBien\Http\Controllers;

use Illuminate\Http\Request;
use ViviBien\Http\Requests;
use ViviBien\Http\Controllers\Controller;
use ViviBien\usuarios;
use ViviBien\roles;
use ViviBien\unidad_trabajo;
use ViviBien\genero;
use Illuminate\Support\Facades\DB;
use ViviBien\User;
use Session;
use Redirect;
class UsuarioController extends Controller
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
        $usuarios = DB::table('users as u')
        ->select('u.id','u.email','u.name')
        ->get();

        //Retorna la información en esta vista.
        return view('usuarios.d_usuario', array('usuarios'=> $usuarios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = roles::pluck('descripcion_rol','descripcion_rol');
        $unidad_trabajo = unidad_trabajo::pluck('descripcion_unidad','id_unidad_trabajo');
        $genero = genero::pluck('descripcion_genero','id_generos');

        return view('usuarios.i_usuario', compact('roles','unidad_trabajo','genero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=User::create([
            'email'=>$request['usuario'],
            'id_unidad_trabajo'=>$request['id_unidad'],
            'id_generos'=>$request['id_genero'],
            'name'=>$request['nombre1'],
            'nombre2'=>$request['nombre2'],
            'nombre3'=>$request['nombre3'],
            'apellido1'=>$request['apellido1'],
            'apellido2'=>$request['apellido2'],
            'apellido3'=>$request['apellido3'],
            'estatus'=>$request['estatus'],
            'password'=>bcrypt($request['clave']),
        ]);
        //Para guardar un solo rol
        $user->assignRole($request['descripcion_rol']);

        //Para multiples roles
        //$user->assignRole('Basico', 'Recepcion','Jefatura','Financiero','Social','Juridico','Superusuario');


        \ViviBien\bitacora::create([
            'id_usuario'=>auth()->user()->id,
            'objeto'=>'users',
            'fecha_accion'=>\Carbon\Carbon::now(),
            'direccion_ip'=>'127.0.0.1',
            'nombre_computadora'=>gethostname(),
            'id_accion'=>1,
        ]);

        Session::flash('message','Insertado Correctamente');
        return Redirect::to('unidadtrabajo/create');
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
        $usuario = DB::table('users')->where('id', $id)->first();
        $unidad_trabajo = unidad_trabajo::pluck('descripcion_unidad','id_unidad_trabajo');
        $genero = genero::pluck('descripcion_genero','id_generos');


        //retorna la vista, con la información del registro.
        return view('usuarios.u_usuario',['usuario'=>$usuario,'unidad_trabajo'=>$unidad_trabajo,'genero'=>$genero]);
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
        DB::table('users')->where('id', $id)->limit(1)
        ->update(array(
            'email'=>$request['email'],
            'id_rol'=>$request['id_rol'],
            'id_unidad_trabajo'=>$request['id_unidad'],
            'id_generos'=>$request['id_genero'],
            'name'=>$request['name'],
            'nombre2'=>$request['nombre2'],
            'nombre3'=>$request['nombre3'],
            'apellido1'=>$request['apellido1'],
            'apellido2'=>$request['apellido2'],
            'apellido3'=>$request['apellido3'],
            'estatus'=>$request['estatus'],
        ));
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
