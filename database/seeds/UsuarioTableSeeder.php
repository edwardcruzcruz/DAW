<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	Usuario::create(array(
	    'CI' => '0986493028',
            'username' => "etcruz",
            'password' => Hash::make("etcruz"),
            'remember_token' => str_random(10)
        ));
	Usuario::create(array(
	    'CI' => '0986497728',
            'username' => "alindao",
            'password' => Hash::make("alindao"),
            'remember_token' => str_random(10)
        ));
    }
}
