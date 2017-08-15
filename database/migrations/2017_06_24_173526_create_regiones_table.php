<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regiones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rg_id_region')->index()->unique();
            $table->string('rg_region',200);
            $table->integer('rg_id_pais')->index();
            $table->timestamps();

            $table->foreign('rg_id_pais')
                  ->references('ps_id_pais')
                  ->on('paises')
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
        Schema::drop('regiones');
    }
}
