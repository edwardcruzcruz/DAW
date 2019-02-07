<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Servicio;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$servicios=Servicio::all();
        return response()->json($servicios, 200);
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
        	'Descripcion' => 'required',
        	'Ruta_Imagenes' => 'required',
		'Porcentajes_skills' => 'required',
		'Personas_encargadas' => 'required'
    	);
	$validator = Validator::make($request->toArray(), $rules);
        if ($validator->fails()) {
	    #Session::flash('message', 'Error!');
            echo $request;
        } else {
            // store
	    $servicio = new Servicio;
            //Declaramos el nombre con el nombre enviado en el request
            $servicio->Descripcion = $request->Descripcion;
	    $servicio->Ruta_Imagenes = $request->Ruta_Imagenes;
	    $servicio->Porcentajes_skills = $request->Porcentajes_skills;
	    $servicio->Personas_encargadas = $request->Personas_encargadas;
	    $servicio->save();
            #Session::flash('message', 'Successfully created nerd!');
	    #dd($usuario,$login);
            return response()->json($servicio, 201);
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
	$servicio=Servicio::find($id);
	return response()->json($servicio, 200);
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
        	'Descripcion' => 'required',
        	'Ruta_Imagenes' => 'required',
		'Porcentajes_skills' => 'required',
		'Personas_encargadas' => 'required'
    	);
        $validator = Validator::make($request->toArray(), $rules);

        // process the login
        if ($validator->fails()) {
            echo $request;
        } else {
            // store
            $servicio=Servicio::find($id);
	    $servicio->Descripcion = $request->Descripcion;
	    $servicio->Ruta_Imagenes = $request->Ruta_Imagenes;
	    $servicio->Porcentajes_skills = $request->Porcentajes_skills;
	    $servicio->Personas_encargadas = $request->Personas_encargadas;
	    $servicio->save();
	    return response()->json($servicio, 200);
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
	Servicio::find($id)->delete();        
	return 204;
    }
}
