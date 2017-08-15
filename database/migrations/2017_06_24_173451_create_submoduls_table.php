<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmodulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submoduls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('smdls_id')->index()->unique();
            $table->integer('smdls_id_mdls')->index();
            $table->string('smdls_url',200);
            $table->string('smdls_patch',200);            
            $table->string('smdls_wordkey_modul_name',120);            
            $table->timestamps();

            $table->foreign('smdls_id_mdls')
                  ->references('mdls_id')
                  ->on('moduls')
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
        Schema::drop('submoduls');
    }
}
