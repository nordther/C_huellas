<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pres_id_profesor')->index()->unique();
            $table->integer('pres_id_programa')->index();
            $table->timestamps();

            $table->foreign('pres_id_profesor')
                  ->references('dp_id')
                  ->on('datospersonales')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('pres_id_programa')
                  ->references('p_id_programa')
                  ->on('programas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profesores');
    }
}
