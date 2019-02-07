<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Solicitud;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$solicitudes=Solicitud::all();
        return response()->json($solicitudes, 200);
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
        	'Nombre' => 'required',
		'Titulo' => 'required',
        	'Descripcion' => 'required',
		'Fecha' => 'required',
		'Estado' => 'required'
    	);
	$validator = Validator::make($request->toArray(), $rules);
        if ($validator->fails()) {
	    #Session::flash('message', 'Error!');
            echo $request;
        } else {
            // store
	    $solicitud = new Solicitud;
            //Declaramos el nombre con el nombre enviado en el request
            $solicitud->Nombre = $request->Nombre;
	    $solicitud->Titulo = $request->Titulo;
	    $solicitud->Descripcion = $request->Descripcion;
	    $solicitud->Fecha = $request->Fecha;
	    $solicitud->Estado = $request->Estado;
	    $solicitud->save();
            #Session::flash('message', 'Successfully created nerd!');
	    #dd($usuario,$login);
            return response()->json($solicitud, 201);
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
	$solicitud=Solicitud::find($id);
	return response()->json($solicitud, 200);
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
		'Nombre' => 'required',
		'Titulo' => 'required',
        	'Descripcion' => 'required',
		'Fecha' => 'required',
		'Estado' => 'required'
    	);
        $validator = Validator::make($request->toArray(), $rules);

        // process the login
        if ($validator->fails()) {
            echo $request;
        } else {
            // store
            $solicitud=Solicitud::find($id);
	    $solicitud->Nombre = $request->Nombre;
	    $solicitud->Titulo = $request->Titulo;
	    $solicitud->Descripcion = $request->Descripcion;
	    $solicitud->Fecha = $request->Fecha;
	    $solicitud->Estado = $request->Estado;
	    $solicitud->save();
	    return response()->json($solicitud, 200);
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
	Solicitud::find($id)->delete();        
	return 204;
    }
}
