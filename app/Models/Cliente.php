<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	//
	public $timestamps = true;
	//
	protected $table = 'cliente';
	protected $fillable=['CI','Nombre','Profesion','Telefono','Edad','NombreEmpresa','Correo'];

	public function reserva()
   	{
        	return $this->hasOne('App\Models\Reserva');
        }
}
