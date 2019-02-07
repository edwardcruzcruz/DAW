<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	public $timestamps = true;
	//
	protected $table = 'administrador';
	protected $fillable=['CI','Nombre','Profesion','Telefono','correo'];

	public function proyectos()
   	{
        	return $this->hasMany('App\Models\Proyecto');
        }
}
