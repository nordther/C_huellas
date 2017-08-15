<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaprogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoriaprogramas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cp_id_categoria')->index()->unique();
            $table->string('cp_wordkey_name',120);
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
        Schema::drop('categoriaprogramas');
    }
}
