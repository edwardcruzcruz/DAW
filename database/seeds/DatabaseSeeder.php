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
        $this->call(administradorTableSeeder::class);
	$this->command->info('Admin table seeded!');
    }
}
