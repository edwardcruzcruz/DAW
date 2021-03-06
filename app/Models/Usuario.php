<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;
    public $timestamps = true;
    protected $table = 'usuario';
    protected $fillable=['CI','username','password'];
    
}
