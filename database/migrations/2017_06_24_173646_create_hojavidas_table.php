<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHojavidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojavidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hv_id')->index()->unique();
            $table->integer('hv_id_datospersonales')->index()->unique();
            $table->timestamps();

            $table->foreign('hv_id_datospersonales')
                  ->references('dp_id')
                  ->on('datospersonales')
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
        Schema::drop('hojavidas');
    }
}
