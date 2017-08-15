<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mdls_id')->index()->unique();
            $table->string('mdls_url',200);
            $table->string('mdls_patch',200)->nullable();            
            $table->string('mdls_wordkey_modul_name',120)->nullable();
            $table->string('mdls_paramt_name',120)->nullable();
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
        Schema::drop('moduls');
    }
}
