<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //
    public $timestamps = true;
	//
	protected $table = 'reserva';
	protected $fillable=['Fecha_reserva','Descripcion'];
	public function cliente()
   	{
        	return $this->hasOne('App\Models\Cliente');
        }
	public function proyecto()
   	{
        	return $this->hasOne('App\Models\Proyecto');
        }
}
