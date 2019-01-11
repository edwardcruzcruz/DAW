<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'administrador';

    /**
     * Run the migrations.
     * @table administrador
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Ci');
            $table->string('Nombre', 45)->nullable()->default(null);
            $table->string('Profesion', 45)->nullable()->default(null);
            $table->string('Telefono', 45)->nullable()->default(null);
            $table->string('Correo', 45)->nullable()->default(null);
            $table->unsignedInteger('idUser')->nullable()->default(null);
            $table->unsignedInteger('idProyecto')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
