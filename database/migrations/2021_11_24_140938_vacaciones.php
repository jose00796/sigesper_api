<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vacaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacaciones', function (Blueprint $table) {
            $table->id();
            $table->char('v_e', 1);
            $table->integer('ced')->unique();
            $table->date('f_inicio');
            $table->date('f_fin');
            $table->string('periodo_vac', 255);
            $table->integer('cant_periodo');
            $table->string('descripcion', 255);

            $table->foreign('ced')
            ->references('ced')
            ->on('nominas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('vacaciones');
    }
}
