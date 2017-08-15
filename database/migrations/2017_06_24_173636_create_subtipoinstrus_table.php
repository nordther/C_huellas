<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtipoinstrusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtipoinstrus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subtinstr_id')->index()->unique();
            $table->integer('subtinstr_id_tinstr')->index();
            $table->string('subtinstr_wordkey_name',120);
            $table->timestamps();

            $table->foreign('subtinstr_id_tinstr')
                  ->references('instr_id')
                  ->on('instrumentos')
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
        Schema::drop('subtipoinstrus');
    }
}
