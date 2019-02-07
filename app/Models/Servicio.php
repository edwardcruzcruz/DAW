<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
	//
	public $timestamps = true;
	protected $table = 'servicio';
	protected $fillable=['Descripcion','Ruta_Imagenes','Porcentajes_skills','Personas_encargadas'];
	public function proyecto()
   	{
        	return $this->hasOne('App\Models\Proyecto');
        }
}
