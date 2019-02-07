<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
	//
	public $timestamps = true;
	//
	protected $table = 'proyecto';

	protected $fillable=['Titulo','Objetivo','Descripcion','Categoria','fecha','materiales'];

	public function administrador()
   	{
        	return $this->hasOne('App\Models\Admin');
        }
	public function portafolio()
   	{
        	return $this->hasOne('App\Models\Portafolio');
        }

	public function reserva()
   	{
        	return $this->hasOne('App\Models\Reserva');
        }
	public function servicio()
   	{
        	return $this->hasOne('App\Models\Servicio');
        }
}
