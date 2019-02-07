<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$administradores=Admin::all();
        return response()->json($administradores, 200);
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
		'Correo' => 'required'
    	);
	$validator = Validator::make($request->toArray(), $rules);
        if ($validator->fails()) {
	    #Session::flash('message', 'Error!');
            echo $request;
        } else {
            // store
	    $administrador = new Admin;
            //Declaramos el nombre con el nombre enviado en el request
            $administrador->CI = $request->CI;
	    $administrador->Nombre = $request->Nombre;
	    $administrador->Profesion = $request->Profesion;
	    $administrador->Telefono = $request->Telefono;
	    $administrador->Correo = $request->Correo;
            //Guardamos el cambio en nuestro modelo
            $administrador->save();
            #Session::flash('message', 'Successfully created nerd!');
	    #dd($usuario,$login);
            return response()->json($administrador, 201);
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
	$administrador=Admin::find($id);
	return response()->json($administrador, 200);
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
		'Correo' => 'required'
    	);
        $validator = Validator::make($request->toArray(), $rules);

        // process the login
        if ($validator->fails()) {
            echo $request;
        } else {
            // store
            $administrador=Admin::find($id);
	    $administrador->CI = $request->CI;
	    $administrador->Nombre = $request->Nombre;
	    $administrador->Profesion = $request->Profesion;
	    $administrador->Telefono = $request->Telefono;
	    $administrador->Correo = $request->Correo;
            $administrador->save();
	    return response()->json($administrador, 200);
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
	Admin::find($id)->delete();
        
	return 204;
    }
}
