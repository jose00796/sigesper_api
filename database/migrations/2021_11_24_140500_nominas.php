<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nominas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominas', function (Blueprint $table) {
            $table->id();
            $table->char('v_e', 1);
            $table->integer('ced')->unique();
            $table->string('nombres', 255 );
            $table->string('apellidos', 255);
            $table->date('f_ingreso');
            $table->date('f_nac');
            $table->string('ult_periodo_vac', 255);
            $table->string('periodo_vac', 255);
            $table->integer('años_cne');
            $table->integer('años_apn');
            $table->string('telf', 255);
            $table->string('email', 255)->unique();
            $table->string('dic_habitacion', 255);
            $table->string('cargo', 255);
            $table->string('unidad_adscripcion', 255);
            
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
        Schema::dropIfExists('nominas');
    }
}
