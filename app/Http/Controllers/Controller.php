<?php

namespace Cinema\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Cinema\Movie;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    
    /*public function hacer(Request $request)
    {
	return view('pages/presentacion',['informacion'=>[$request->input('nombre'),$request->input('apellido'),$request->input('email')]]);
    }*/
     public function servicios(){
	return view('pages/servicios');
    }
    public function portafolio(){
	return view('pages/portafolio');
    }
    public function galeria(){
	return view('pages/galeria');
    }
    public function contacto(){
	return view('pages/contacto');
    }
    public function home(){
	return view('pages/home');
    }
}
