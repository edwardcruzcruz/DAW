<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$reservas=Reserva::all();
        return response()->json($reservas, 200);
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
        	'Fecha_reserva' => 'required',
        	'Descripcion' => 'required'
    	);
	$validator = Validator::make($request->toArray(), $rules);
        if ($validator->fails()) {
	    #Session::flash('message', 'Error!');
            echo $request;
        } else {
            // store
	    $reserva = new Reserva;
            //Declaramos el nombre con el nombre enviado en el request
            $reserva->Fecha_reserva = $request->Fecha_reserva;
	    $reserva->Descripcion = $request->Descripcion;
	    $reserva->save();
            #Session::flash('message', 'Successfully created nerd!');
	    #dd($usuario,$login);
            return response()->json($reserva, 201);
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
	$reserva=Reserva::find($id);
	return response()->json($reserva, 200);
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
        	'Fecha_reserva' => 'required',
        	'Descripcion' => 'required'
    	);
        $validator = Validator::make($request->toArray(), $rules);

        // process the login
        if ($validator->fails()) {
            echo $request;
        } else {
            // store
            $reserva=Reserva::find($id);
	    $reserva->Fecha_reserva = $request->Fecha_reserva;
	    $reserva->Descripcion = $request->Descripcion;
	    $reserva->save();
	    return response()->json($reserva, 200);
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
	Reserva::find($id)->delete();        
	return 204;
    }
}
