<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('Nombre');
            $table->string ('Genero');
            $table->string ('Fecha_Nacimiento');
            $table->string ('Especie');
            $table->string ('Raza');
            $table->string ('Color');
            $table->string ('Microchip');
            $table->string ('Foto');
            
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
        Schema::dropIfExists('mascotas');
    }
}
