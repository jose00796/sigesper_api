<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReposoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reposo', function (Blueprint $table) {
            $table->id();
            $table->char('v_e');
            $table->integer('ced')->unique();
            $table->integer('n_reposo');
            $table->date('f_reposo');
            $table->date('f_desde');
            $table->date('f_hasta');
            $table->string('diagnostico');
            $table->string('otros')->nullable();

            $table->foreign('ced')
            ->references('ced')
            ->on('nomina')
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
        Schema::dropIfExists('reposo');
    }
}
