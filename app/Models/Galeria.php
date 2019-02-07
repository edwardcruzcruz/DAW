<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
	//
	public $timestamps = true;
	//
	protected $table = 'galeria';
	protected $fillable=['Descripcion','Ruta_imagenes'];
	public function noticias()
   	{
        	return $this->hasMany('App\Models\Noticia');
        }

	public function eventos()
   	{
        	return $this->hasMany('App\Models\Evento');
        }
}
