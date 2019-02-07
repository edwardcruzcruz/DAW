<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //
    public $timestamps = true;
    protected $table = 'noticia';
    protected $fillable=['URI'];
	public function galeria()
   	{
        	return $this->hasOne('App\Models\Galeria');
        }
}
