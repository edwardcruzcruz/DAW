<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'servicio';

    /**
     * Run the migrations.
     * @table servicio
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idServicio');
            $table->string('RutaImagenes', 45)->nullable()->default(null);
            $table->string('PorcentajeSkills', 45)->nullable()->default(null);
            $table->string('PersonasEncargadas', 45)->nullable()->default(null);
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
