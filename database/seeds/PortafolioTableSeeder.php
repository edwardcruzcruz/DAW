<?php

use Illuminate\Database\Seeder;
use App\Models\Portafolio;

class PortafolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	Portafolio::create(array(
            'Descripcion' => 'Aplicaciones Moviles:
				Aqui almacenamos proyectos de aplicación informática diseñada para ser ejecutada en teléfonos inteligentes, tabletas y otros dispositivos móviles. Las aplicaciones permiten al usuario efectuar un conjunto de tareas de cualquier tipo —profesional, de ocio, educativas, de acceso a servicios, etc., facilitando las gestiones o actividades a desarrollar.',
            'RutaImagenes' => "/algo/algo",
            'Fecha' => "2019-02-04",
            'Empresa' => "Anonima1, Anonima2, ...",
	    'Materiales'=> "Entre los materiales a utilizar tenemos ......"
        ));
	Portafolio::create(array(
            'Descripcion' => 'Aplicaciones Web:
				Aqui almacenamos proyectos que basicamente son aquellas herramientas que los usuarios pueden utilizar accediendo a un servidor web a través de internet o de una intranet mediante un navegador. En otras palabras, es un programa que se codifica en un lenguaje interpretable por los navegadores web en la que se confía la ejecución al navegador.',
            'RutaImagenes' => "/algo/algo",
            'Fecha' => "2019-02-04",
            'Empresa' => "Anonima1, Anonima2, ...",
	    'Materiales'=> "Entre los materiales a utilizar tenemos ......"
        ));
	Portafolio::create(array(
            'Descripcion' => 'Aplicaciones Electronica:
				Aqui almacenamos proyectos que basicamente tratan con circuitos eléctricos que involucran componentes eléctricos activos como tubos de vacío, transistores, diodos, circuitos integrados, optoelectrónica y sensores, asociados con componentes eléctricos pasivos y tecnologías de interconexión. Generalmente los dispositivos electrónicos contienen circuitos que consisten principalmente, o exclusivamente, en semiconductores activos complementados con elementos pasivos; tal circuito se describe como un circuito electrónico.',
            'RutaImagenes' => "/algo/algo",
            'Fecha' => "2019-02-04",
            'Empresa' => "Anonima1, Anonima2, ...",
	    'Materiales'=> "Entre los materiales a utilizar tenemos ......"
        ));
    }
}
