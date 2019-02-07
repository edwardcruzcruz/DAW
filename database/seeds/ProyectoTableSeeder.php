<?php

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	Proyecto::create(array(
            'Titulo'=> 'SampleMovie',
            'Objetivo' => "Desarrollo de sistemas de reserva en el backend laraveel",
            'Descripcion' => "Este proyecto es orientado para personas que quieren aprender a programar en php y laravel",
            'Categoria' => 2,
	    'fecha'=> "2019-02-04",
	    'materiales'=> "Laravel, guzzlehttp, postman, ..."
        ));
	Proyecto::create(array(
            'Titulo'=> 'SampleRestaurant',
            'Objetivo' => "Desarrollo de sistemas de reserva de comidas en android studio y Django",
            'Descripcion' => "Este proyecto es orientado para personas que quieren aprender a programar en Android Studio y Django en el backend",
            'Categoria' => 1,
	    'fecha'=> "2019-02-06",
	    'materiales'=> "Django, Android Studio, ..."
        ));
	Proyecto::create(array(
            'Titulo'=> 'SampleRobot',
            'Objetivo' => "Desarrollo de sistemas de reconocimiento facial embebido en robots usando ROS y Python",
            'Descripcion' => "Este proyecto es orientado para personas que quieren aprender a programar en ROS y python",
            'Categoria' => 3,
	    'fecha'=> "2019-02-06",
	    'materiales'=> "ROS, python, ..."
        ));
    }
}
