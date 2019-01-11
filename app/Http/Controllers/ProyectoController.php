<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    //
    public function get($id)
    {
        $proyecto = Proyecto::find($id);
	return View::make('pages.vista_a_crear_por_consulta_de_proyectos')->with('ProyectoporID',$proyecto);
    }
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return View::make('nerds.vista_por_crear_para editar')
            ->with('ProyectoporID', $proyecto);
    }
}
