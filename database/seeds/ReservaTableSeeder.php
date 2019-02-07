<?php

use Illuminate\Database\Seeder;
use App\Models\Reserva;

class ReservaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	Reserva::create(array(
            'Fecha'=> '2019-02-05',
            'Descripcion' => "SampleMovie",
            'Estado' => 0
        ));
    }
}
