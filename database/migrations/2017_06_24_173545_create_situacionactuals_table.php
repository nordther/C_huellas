<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSituacionactualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situacionactuals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sa_id')->index()->unique();
            $table->string('sa_wordkey_categoria',120);
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
        Schema::drop('situacionactuals');
    }
}
