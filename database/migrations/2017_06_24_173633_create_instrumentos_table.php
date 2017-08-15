<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instr_id')->index()->unique();
            $table->integer('instr_id_td')->index();
            $table->string('instr_wordkey_name',120);
            $table->timestamps();

            $table->foreign('instr_id_td')
                  ->references('td_id')
                  ->on('tipodonativos')
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
        Schema::drop('instrumentos');
    }
}
