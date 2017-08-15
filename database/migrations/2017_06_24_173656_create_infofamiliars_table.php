<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfofamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infofamiliars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inffam_id')->index()->unique();
            $table->integer('inffam_id_datospersonales')->index();
            $table->integer('inffam_id_parentesco')->index();
            $table->string('inffam_ocupacion',200);
            $table->integer('inffam_dg_id')->index()->unique();        
            $table->timestamps();

            $table->foreign('inffam_id_datospersonales')
                  ->references('dp_id')
                  ->on('datospersonales')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('inffam_id_parentesco')
                  ->references('pr_id_parentesco')
                  ->on('parentescos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');      

            $table->foreign('inffam_dg_id')
                  ->references('dg_id')
                  ->on('datosgenerales')
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
        Schema::drop('infofamiliars');
    }
}
