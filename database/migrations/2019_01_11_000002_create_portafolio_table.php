<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortafolioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'portafolio';

    /**
     * Run the migrations.
     * @table portafolio
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idPortafolio');
            $table->string('Descripcion', 45)->nullable()->default(null);
            $table->string('RutaImagenes', 45)->nullable()->default(null);
            $table->date('Fecha')->nullable()->default(null);
            $table->string('Empresa', 45)->nullable()->default(null);
            $table->string('Materiales', 45)->nullable()->default(null);
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
