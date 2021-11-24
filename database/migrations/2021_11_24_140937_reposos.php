<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reposos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reposos', function (Blueprint $table) {
            $table->id();
            $table->char('v_e', 1);
            $table->integer('ced')->unique();
            $table->integer('n_reposo');
            $table->date('f_reposo');
            $table->date('f_desde');
            $table->date('f_hasta');
            $table->string('diagnostico', 255);
            $table->string('otros', 255)->nullable();

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
        Schema::dropIfExists('reposos');
    }
}
