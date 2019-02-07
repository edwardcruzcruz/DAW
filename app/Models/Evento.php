<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    public $timestamps = true;
    protected $table = 'evento';
    protected $fillable=['Descripcion','Categoria'];

	public function galeria()
   	{
        	return $this->hasOne('App\Models\Galeria');
        }
}
