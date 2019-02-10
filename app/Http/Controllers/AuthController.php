<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Models\Usuario;
use App\Models\Cliente;
use App\Models\Solicitud;
use App\Models\Servicio;
use App\Models\Proyecto;
use App\Models\Portafolio;
use Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    //
    public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('welcome');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return view('pages/login');
    }

    public function postLogin()
    {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'username' => Input::get('username'),
            'password'=> Input::get('password')
        );
	$remember=false;
	if(null!==(Input::get('remember')))
	   $remember = true;
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata,$remember))
        {
	    $isuserAdmin=false;
	    $user=Usuario::where('username',$userdata['username']) ->join('cliente','usuario.CI','=','cliente.CI')->get();
	    
	    if($user->isEmpty()){
		$user=Usuario::where('username',$userdata['username']) ->join('administrador','usuario.CI','=','administrador.CI')->get();

	    	$isuserAdmin=true;
	    }
	    session()->put('usuario',$user);
	    if($isuserAdmin===true){//vistas como usuario administrador
	        return Redirect::to('welcome');
	    }else{//vistas como usuario cliente
		return Redirect::to('welcomeClient');
	    }
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
    }
    public function logOut()
    {
        Auth::logout();
	session()->forget('usuario');
	//session()->forget('clientes');
	//session()->forget('solicitudes');
	//session()->forget('proyectos');
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }
    public function mostrarPrincipalCliente(){
	if (Auth::check())
        {
	    return view('pages/proyectoClient');
	}
	return Redirect::to('login');
    }
    public function mostrarPrincipal(){
	if (Auth::check())
        {
	    $categorias=Portafolio::pluck('Descripcion','id');
	    return view('pages/proyectoAdmin',compact('categorias'));
        }
	return Redirect::to('login');
    }
    public function mostrarSolicitud(){
	if (Auth::check())
        {
	    return view('pages/solicitudesAdmin');
        }
	return Redirect::to('login');
	
    }
    public function mostrarPerfil(){
	if (Auth::check())
        {
	    return view('pages/perfilUsuario');
        }
	return Redirect::to('login');
	
    }
    public function mostrarPerfilCliente(){
	if (Auth::check())
        {
	    return view('pages/perfilClient');
        }
	return Redirect::to('login');
	
    }	
    public function mostrarSolicitudCliente(){
	if (Auth::check())
        {
	    return view('pages/solicitudesClient');
        }
	return Redirect::to('login');
	
    }
    public function mostrarEditorProyecto($id){
	if (Auth::check())
        {
	    $data=Proyecto::join('servicio','proyecto.Titulo','=','servicio.Descripcion')->where('proyecto.id',$id)->get();
	    $categorias=Portafolio::pluck('Descripcion','id');
	    return view('pages/editor',compact('categorias'))->with('data',$data);
        }
	return Redirect::to('login');
	
    }
}
