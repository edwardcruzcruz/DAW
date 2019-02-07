<?php

use Illuminate\Database\Seeder;
use App\Models\Solicitud;

class SolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	Solicitud::create(array(
            'Nombre'=> 'Alex Lindao',
	    'Titulo'=> 'Proyecto SampleGame',
            'Descripcion' => "Quiero proponer un proyecto bla bla bl..",
            'Fecha' => '2019-02-06',
	    'Estado' => 'En espera'
        ));
    }
}
