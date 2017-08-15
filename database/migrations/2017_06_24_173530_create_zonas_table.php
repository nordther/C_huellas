<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zonas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zn_id')->index()->unique();
            $table->string('zn_name',200);
            $table->integer('zn_id_region')->index();

            $table->foreign('zn_id_region')
                  ->references('rg_id_region')
                  ->on('regiones')
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
        Schema::drop('zonas');
    }
}
