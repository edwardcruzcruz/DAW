<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('proyectos', 'ProyectoController');
Route::resource('administradores', 'AdministradorController');
Route::resource('clientes', 'ClienteController');
Route::resource('eventos', 'EventoController');
Route::resource('galerias', 'GaleriaController');
Route::resource('noticias', 'NoticiaController');
Route::resource('portafolios', 'PortafolioController');
Route::resource('reservas', 'ReservaController');
Route::resource('servicios', 'ServicioController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('solicitudes', 'SolicitudController');
