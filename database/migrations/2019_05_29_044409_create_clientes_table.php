<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('rut_cliente');
            $table->string('nom_cliente');
            $table->string('apePat_cliente');
            $table->string('apeMat_cliente');
            $table->string('dire_cliente');
            $table->string('ciudad_cliente');
            $table->string('telefono_cliente');
            $table->string('email_cliente');
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
        Schema::dropIfExists('clientes');
    }
}
