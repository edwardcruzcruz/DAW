<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Hash;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /*public function hacer(Request $request)
    {
	return view('pages/presentacion',['informacion'=>[$request->input('nombre'),$request->input('apellido'),$request->input('email')]]);
    }*/
     public function servicios(){
	return view('pages/servicios');
    }
    public function portafolio(){
	return view('pages/portafolio');
    }
    public function galeria(){
	return view('pages/galeria');
    }
    public function contacto(){
	return view('pages/contacto');
    }
    public function home(){
	return view('pages/home');
    }
    public function login(){
	return view('pages/login');
    }
    public function registrar(){
	return view('pages/registrar');
    }
    public function perfilUsuario(){
	return view('pages/perfilUsuario');
    }
    
    public function postRequestClient(Request $request)
    {
        $client = new Client();	
        $client->post('localhost/api/clientes',[
	    'form_params'=>[
		'CI' => $request->CI,
        	'Nombre' => $request->Nombre,
		'Profesion' => $request->Profesion,
		'Telefono' => $request->Telefono,
		'Edad' => $request->Edad,	
		'NombreEmpresa' => $request->NombreEmpresa,
		'Correo' => $request->Correo,		
	     ]
	]);
	
	$client1 = new Client();
	$client1->post('localhost/api/usuarios',[
	    'form_params'=>[
		'CI' => $request->CI,
        	'username' => $request->username,
		'password' => Hash::make($request->password),
		'remember_token' => str_random(10),		
	     ]
	]);
	return redirect('login');
    }
    public function contrahash($value)
    {
	return Hash::make($value);
    }
    
}
