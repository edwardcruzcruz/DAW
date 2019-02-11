<?php
use Illuminate\Http\Request;
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
#Route::get('/', function () {
#    return view('home');
#});
Route::get('/', function () {
    return view('pages/home');
});
/*Route::post('procesandoimagen', function (Request $request) {
    // cache the file
    $file=$request->file('photo');

    //generate a new filename. gtClientOrignalExtension() for the file extension
    $filename='profile-photo-' . time() . '.' .$file->getClientOriginalExtension();


    //save to storage/app/photos as the new $filename
    $path=$file->storeAs('photos',$filename);

    dd($path);
});*/
Route::get('servicios', 'Controller@servicios');
Route::get('portafolio', 'Controller@portafolio');
Route::get('galeria', 'Controller@galeria');
Route::get('contacto', 'Controller@contacto');
Route::get('home', 'Controller@home');
Route::get('registro', 'Controller@registrar');
Route::get('perfilUsuario', 'Controller@perfilUsuario');
Route::get('login', 'AuthController@showLogin');
Route::get('contrahash/{value}', 'Controller@contrahash');//----
Route::post('login', 'AuthController@postLogin');
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('welcome', 'AuthController@mostrarPrincipal');
    Route::get('editarProyecto/{id}', 'AuthController@mostrarEditorProyecto');
    Route::get('solicitud', 'AuthController@mostrarSolicitud');
    Route::get('reporte', 'AuthController@mostrarReporte');
    Route::get('solicitudClient', 'AuthController@mostrarSolicitudCliente');
    Route::get('perfil', 'AuthController@mostrarPerfil');
    Route::get('welcomeClient', 'AuthController@mostrarPrincipalCliente');
    Route::get('perfilClient', 'AuthController@mostrarPerfilCliente');
    Route::get('editar/{id}','DataUserController@editClient');
    Route::get('mostrarProyectos','DataUserController@mostrarProyectos');
    Route::get('mostrarClientes','DataUserController@mostrarClientes');
    Route::put('updateClient/{id}','DataUserController@putRequest');
    Route::put('updateAdmin/{id}','DataUserController@putRequest1');
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@logOut');
});
#Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');
Route::resource('mail','MailController');
Route::get('reportes', 'PdfController@index');
Route::get('crear_reporte_porpais/{tipo}', 'PdfController@crear_reporte_porpais');
Route::resource('pdf','PdfController');
Route::resource('books','BookController');

