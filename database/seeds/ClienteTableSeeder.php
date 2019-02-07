<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	Cliente::create(array(
	    'CI' => '0986497728',
            'Nombre' => "Alex Lindao",
            'Profesion' => "Docente",
            'Telefono' => "0993999283",
	    'Edad'=>43,
	    'NombreEmpresa'  => 'Escuela1',
	    'correo'=> "alindao@hotmail.com"
        ));
    }
}
