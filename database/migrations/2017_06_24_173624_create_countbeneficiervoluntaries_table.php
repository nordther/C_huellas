<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountbeneficiervoluntariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countbeneficiervoluntaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cbv_id')->index()->unique();
            $table->integer('cbv_id_voluntary')->index();
            $table->integer('cbv_id_beneficier')->index()->unique();
            $table->timestamps();

            $table->foreign('cbv_id_voluntary')
                  ->references('v_id_voluntario')
                  ->on('voluntarios')
                  ->onDeleted('cascade')
                  ->onUpdate('cascade');

            $table->foreign('cbv_id_beneficier')
                  ->references('b_id_beneficiario')
                  ->on('beneficiarios')
                  ->onDeleted('cascade')
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
        Schema::drop('countbeneficiervoluntaries');
    }
}
