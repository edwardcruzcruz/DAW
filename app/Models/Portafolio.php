<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
	//
	public $timestamps = true;
	//
	protected $table = 'portafolio';
	protected $fillable=['Titulo','Ruta_Imagenes','fecha','Empresa','materiales'];
	public function proyectos()
   	{
        	return $this->hasMany('App\Models\Proyecto');
        }
}
