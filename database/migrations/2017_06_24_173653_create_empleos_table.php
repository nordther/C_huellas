<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emple_id')->index()->unique();
            $table->integer('emple_id_datospersonales')->index();
            $table->string('emple_nombre_entidad',300);
            $table->string('emple_direccion_entidad',300);
            $table->integer('emple_dg_id')->index()->unique();
            $table->string('emple_cargo');           
            $table->date('emple_tiempo_begin');
            $table->date('emple_tiempo_finishes');
            $table->timestamps();

            $table->foreign('emple_id_datospersonales')
                  ->references('dp_id')
                  ->on('datospersonales')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('emple_dg_id')
                  ->references('dg_id')
                  ->on('datosgenerales')
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
        Schema::drop('empleos');
    }
}
