<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asst_id')->index()->unique();
            $table->timestamps();  

            $table->foreign('asst_id')
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
        Schema::drop('assistans');
    }
}
