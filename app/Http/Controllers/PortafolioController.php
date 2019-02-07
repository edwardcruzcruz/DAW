<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Portafolio;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$portafolio=Portafolio::all();
        return response()->json($portafolio, 200);
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
        	'Titulo' => 'required',
        	'Ruta_Imagenes' => 'required',
		'fecha' => 'required',
		'Empresa' => 'required',
		'materiales' => 'required'
    	);
	$validator = Validator::make($request->toArray(), $rules);
        if ($validator->fails()) {
	    #Session::flash('message', 'Error!');
            echo $request;
        } else {
            // store
	    $portafolio = new Portafolio;
            //Declaramos el nombre con el nombre enviado en el request
            $portafolio->Titulo = $request->Titulo;
	    $portafolio->Ruta_Imagenes = $request->Ruta_Imagenes;
	    $portafolio->fecha = $request->fecha;
	    $portafolio->Empresa = $request->Empresa;
	    $portafolio->materiales = $request->materiales;
	    //Guardamos el cambio en nuestro modelo
            $portafolio->save();
            #Session::flash('message', 'Successfully created nerd!');
	    #dd($usuario,$login);
            return response()->json($portafolio, 201);
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
	$portafolio=Portafolio::find($id);
	return response()->json($portafolio, 200);
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
        	'Titulo' => 'required',
        	'Ruta_Imagenes' => 'required',
		'fecha' => 'required',
		'Empresa' => 'required',
		'materiales' => 'required'
    	);
        $validator = Validator::make($request->toArray(), $rules);

        // process the login
        if ($validator->fails()) {
            echo $request;
        } else {
            // store
            $portafolio=Portafolio::find($id);
	    $portafolio->Titulo = $request->Titulo;
	    $portafolio->Ruta_Imagenes = $request->Ruta_Imagenes;
	    $portafolio->fecha = $request->fecha;
	    $portafolio->Empresa = $request->Empresa;
	    $portafolio->materiales = $request->materiales;
            $portafolio->save();
	    return response()->json($portafolio, 200);
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
	Portafolio::find($id)->delete();        
	return 204;
    }
}
