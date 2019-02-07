<?php

use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	Servicio::create(array(
            'Descripcion'=> 'SampleMovie',
            'RutaImagenes' => "/algo/algo",
            'PorcentajeSkills' => 90,
            'PersonasEncargadas' => "Edward Cruz, ..."
        ));
	Servicio::create(array(
            'Descripcion'=> 'SampleRestaurant',
            'RutaImagenes' => "/algo/algo",
            'PorcentajeSkills' => 90,
            'PersonasEncargadas' => "Edward Cruz, ..."
        ));
	Servicio::create(array(
            'Descripcion'=> 'SampleRobot',
            'RutaImagenes' => "/algo/algo",
            'PorcentajeSkills' => 90,
            'PersonasEncargadas' => "Edward Cruz, ..."
        ));
    }
}
