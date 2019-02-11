<?php

use Illuminate\Database\Seeder;
use App\Models\Renta;

class RentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Renta::create(array(
            'Mes' => "Enero",
            'CantProyec0' => 5
        ));
    }
}
