<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoextrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infoextras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('infext_id')->index()->unique();
            $table->integer('infext_id_datospersonales')->index();
            $table->string('infext_destreza',325);
            $table->string('infext_nivel',100);
            $table->timestamps();

            $table->foreign('infext_id_datospersonales')
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
        Schema::drop('infoextras');
    }
}
