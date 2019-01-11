<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cliente';

    /**
     * Run the migrations.
     * @table cliente
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Ci');
            $table->string('Nombre', 50)->nullable()->default(null);
            $table->string('Profesion', 50)->nullable()->default(null);
            $table->string('Telefono', 50)->nullable()->default(null);
            $table->integer('Edad')->nullable()->default(null);
            $table->string('NombreEmpresa', 50)->nullable()->default(null);
            $table->string('Correo', 50)->nullable()->default(null);
            $table->unsignedInteger('idUser');
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
