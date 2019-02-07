<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$clientes=Cliente::all();
        return response()->json($clientes, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
	$rules=array(
        	'CI' => 'required',
        	'Nombre' => 'required',
		'Profesion' => 'required',
		'Telefono' => 'required',
		'Edad' => 'required',
		'NombreEmpresa' => 'required',
		'Correo' => 'required'
    	);
	$validator = Validator::make($request->toArray(), $rules);
        if ($validator->fails()) {
	    #Session::flash('message', 'Error!');
            echo $request;
        } else {
            // store
	    $cliente = new Cliente;
            //Declaramos el nombre con el nombre enviado en el request
            $cliente->CI = $request->CI;
	    $cliente->Nombre = $request->Nombre;
	    $cliente->Profesion = $request->Profesion;
	    $cliente->Telefono = $request->Telefono;
	    $cliente->Edad = $request->Edad;
	    $cliente->NombreEmpresa = $request->NombreEmpresa;
	    $cliente->Correo = $request->Correo;
            //Guardamos el cambio en nuestro modelo
            $cliente->save();
            #Session::flash('message', 'Successfully created nerd!');
	    #dd($usuario,$login);
            return response()->json($cliente, 201);
            #return Redirect::to('indice');
        }	
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
	$cliente=Cliente::find($id);
	return response()->json($cliente, 200);
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
        //
	$rules=array(
        	'CI' => 'required',
        	'Nombre' => 'required',
		'Profesion' => 'required',
		'Telefono' => 'required',
		'Edad' => 'required',
		'NombreEmpresa' => 'required',
		'Correo' => 'required'
    	);
        $validator = Validator::make($request->toArray(), $rules);

        // process the login
        if ($validator->fails()) {
            echo $request;
        } else {
            // store
            $cliente=Cliente::find($id);
	    $cliente->CI = $request->CI;
	    $cliente->Nombre = $request->Nombre;
	    $cliente->Profesion = $request->Profesion;
	    $cliente->Telefono = $request->Telefono;
	    $cliente->Edad = $request->Edad;
	    $cliente->NombreEmpresa = $request->NombreEmpresa;
	    $cliente->Correo = $request->Correo;
            $cliente->save();
	    return response()->json($cliente, 200);
            // redirect
            #return Redirect::to('indice');
        }
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
	Cliente::find($id)->delete();        
	return 204;
    }
}
