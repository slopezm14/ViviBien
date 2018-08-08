<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','ViewsController@index');


/* Resource Controllers */
Route::resource('bitacora','BitacoraController');
Route::resource('categodili','CateDiliController');
Route::resource('departamento','DepartamentoController');
Route::resource('desarrollador','DesarrolladorController');
Route::resource('destinosub','DestinoSubController');
Route::resource('genero','GeneroController');
Route::resource('municipio','MunicipioController');
Route::resource('proyecto','ProyectoController');
Route::resource('relacionfam','RelacionFamController');
Route::resource('requisito','RequisitoController');
Route::resource('rol','RolController');
Route::resource('telefono','TelefonosController');
Route::resource('tipoaccion','TipoAccionController');
Route::resource('tipoingreso','TipoIngresoController');
Route::resource('tipotelefono','TipoTelefController');
Route::resource('unidadtrabajo','UniTrabajoController');
Route::resource('usuario','UsuarioController');
