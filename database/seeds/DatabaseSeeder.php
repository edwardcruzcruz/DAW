<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	Eloquent::unguard();

        $this->call('administradorTableSeeder');
	$this->call('ClienteTableSeeder');
	$this->call('UsuarioTableSeeder');
	$this->call('PortafolioTableSeeder');
	$this->call('ProyectoTableSeeder');
	$this->call('ServicioTableSeeder');
	$this->call('ReservaTableSeeder');
	$this->call('SolicitudSeeder');
    }
}
