<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Evento;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$eventos=Evento::all();
        return response()->json($eventos, 200);
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
		'Categoria' => 'required'
    	);
	$validator = Validator::make($request->toArray(), $rules);
        if ($validator->fails()) {
	    #Session::flash('message', 'Error!');
            echo $request;
        } else {
            // store
	    $evento = new Evento;
            //Declaramos el nombre con el nombre enviado en el request
            $evento->Descripcion = $request->Descripcion;
	    $evento->Categoria = $request->Categoria;
            //Guardamos el cambio en nuestro modelo
            $evento->save();
            #Session::flash('message', 'Successfully created nerd!');
	    #dd($usuario,$login);
            return response()->json($evento, 201);
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
	$evento=Evento::find($id);
	return response()->json($evento, 200);
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
		'Categoria' => 'required'
    	);
        $validator = Validator::make($request->toArray(), $rules);

        // process the login
        if ($validator->fails()) {
            echo $request;
        } else {
            // store
            $evento=Evento::find($id);
	    $evento->Descripcion = $request->Descripcion;
	    $evento->Categoria = $request->Categoria;
	    $evento->save();
	    return response()->json($evento, 200);
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
	Evento::find($id)->delete();        
	return 204;
    }
}
