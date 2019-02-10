<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Proyecto;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$proyectos=Proyecto::all();
        return response()->json($proyectos, 200);
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
        	'Objetivo' => 'required',
		'Descripcion' => 'required',
		'Categoria' => 'required',
		'Fecha' => 'required',
		'Materiales' => 'required'
    	);
	$validator = Validator::make($request->toArray(), $rules);
        if ($validator->fails()) {
	    #Session::flash('message', 'Error!');
            echo $request;
        } else {
            // store
	    $proyecto = new Proyecto;
            //Declaramos el nombre con el nombre enviado en el request
            $proyecto->Titulo = $request->Titulo;
	    $proyecto->Objetivo = $request->Objetivo;
	    $proyecto->Descripcion = $request->Descripcion;
	    $proyecto->Categoria = $request->Categoria;
	    $proyecto->Fecha = $request->Fecha;
	    $proyecto->Materiales = $request->Materiales;
            //Guardamos el cambio en nuestro modelo
            $proyecto->save();
            #Session::flash('message', 'Successfully created nerd!');
	    #dd($usuario,$login);
            return response()->json($proyecto, 201);
            #return Redirect::to('indice');
        }
    }
    
    public function show($id)
    {
        //
	$pelicula=Pelicula::find($id);
	return response()->json($pelicula, 200);
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
        	'Objetivo' => 'required',
		'Descripcion' => 'required',
		'Categoria' => 'required',
		'Fecha' => 'required',
		'Materiales' => 'required'
    	);
        $validator = Validator::make($request->toArray(), $rules);

        // process the login
        if ($validator->fails()) {
            echo $request;
        } else {
            // store
            $proyecto =Proyecto::find($id);
	    $proyecto->Titulo = $request->Titulo;
	    $proyecto->Objetivo = $request->Objetivo;
	    $proyecto->Descripcion = $request->Descripcion;
	    $proyecto->Categoria = $request->Categoria;
	    $proyecto->Fecha = $request->Fecha;
	    $proyecto->Materiales = $request->Materiales;
            $proyecto->save();
	    return response()->json($proyecto, 200);
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
	Proyecto::find($id)->delete();
        
	return 204;
        // redirect
        #return Redirect::to('indice');
    }
}
