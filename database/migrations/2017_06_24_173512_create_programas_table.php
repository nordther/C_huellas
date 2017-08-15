<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('p_id_programa')->index()->unique();
            $table->integer('p_id_catego_programa')->index();
            $table->string('p_wordkey_name',120)->index();
            $table->timestamps();

            $table->foreign('p_id_catego_programa')
                  ->references('cp_id_categoria')
                  ->on('categoriaprogramas')
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
        Schema::drop('programas');
    }
}
