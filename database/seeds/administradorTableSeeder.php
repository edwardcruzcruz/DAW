<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class administradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	Admin::create(array(
            'CI' => '0986493028',
            'Nombre' => "Edward Cruz",
            'Profesion' => "Ingenieria en Computacion",
            'Telefono' => "0993849283",
	    'correo'=> "etcruz@espol.edu.ec"
        ));
    }
}
