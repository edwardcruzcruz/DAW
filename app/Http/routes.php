<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| POST, GET, PUT, DELETE
*/
Route::get('/', function () {
    return view('pages/home');
}); 
Route::get('servicios', 'Controller@servicios');
Route::get('portafolio', 'Controller@portafolio');
Route::get('galeria', 'Controller@galeria');
Route::get('contacto', 'Controller@contacto');
Route::get('home', 'Controller@home');
 
/*Route::get('/','FrontController@index');*/
//Route::get('contacto','FrontController@contacto');
/*Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');*/

Route::resource('mail','MailController');
//Route::resource('usuario','UsuarioController');
//Route::resource('genero','GeneroController');
//Route::resource('pelicula','MovieController');

//Route::resource('log','LogController');
///Route::get('logout','LogController@logout');





