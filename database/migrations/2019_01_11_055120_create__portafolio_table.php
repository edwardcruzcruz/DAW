<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortafolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portafolio', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('Titulo');
	    $table->string('Ruta_Imagenes');
	    $table->string('fecha');
	    $table->string('Empresa');
	    $table->string('materiales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portafolio');
    }
}
