<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Usuario;

class DataUserController extends Controller
{
    //
    public function editClient($id)
    {      
	$client = new Client();
        $response = $client->get('localhost/api/clientes/'.$id);
        $cliente=json_decode($response->getBody()->getContents());
		
	return view('pages/perfilEditarClient')->with('cliente',$cliente);
    }
    public function putRequest(Request $request,$id)
    {
	$client = new Client();
        $client->put("http://localhost/api/clientes/".$id,[
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
	//$user=Usuario::where('username',$request->username) ->join('cliente','usuario.CI','=','cliente.CI')->get();
        //session()->push('usuario',$user);
	return redirect('perfilClient');
    }
    public function putRequest1(Request $request,$id)
    {
        $client = new Client();
        $client->put("http://localhost/api/administradores/".$id,[
	     'form_params'=>[
		'CI' => $request->CI,
        	'Nombre' => $request->Nombre,
		'Profesion' => $request->Profesion,
		'Telefono' => $request->Telefono,
		'Correo' => $request->Correo,
	     ]	
	]);
	return redirect('perfil');
    }
    public function mostrarProyectos()
    {
	return view('pages/index');
    }
    public function mostrarClientes()
    {
	return view('pages/UsuariosClient');
    }
}
