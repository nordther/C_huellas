<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ct_id')->index()->unique();
            $table->integer('ct_id_datospersonales')->index();
            $table->integer('ct_dg_id')->index()->unique();
            $table->timestamps();

            $table->foreign('ct_id_datospersonales')
                  ->references('dp_id')
                  ->on('datospersonales')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('ct_dg_id')
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
        Schema::drop('contactos');
    }
}
