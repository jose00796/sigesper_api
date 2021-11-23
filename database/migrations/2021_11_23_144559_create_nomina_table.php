<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateNominaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomina', function (Blueprint $table) {
            $table->id();
            $table->char('v_e');
            $table->integer('ced')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('f_ingreso');
            $table->date('f_nac');
            $table->string('ult_periodo_vac');
            $table->string('periodo_vac');
            $table->integer('años_cne');
            $table->integer('años_apn');
            $table->string('telf');
            $table->string('email')->unique();
            $table->string('dic_habitacion');
            $table->string('cargo');
            $table->string('unidad_adscripcion');

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
        Schema::table('nomina', function (Blueprint $table) {
            //
        });
    }
}
