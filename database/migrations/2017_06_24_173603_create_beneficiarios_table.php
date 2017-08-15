<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('b_id_beneficiario')->index()->unique();
            $table->string('b_grado');
            $table->boolean('b_me_trabajador');
            $table->string('b_jornada');
            $table->string('b_acudiente');
            $table->integer('b_ins_educativa')->index()->unique();
            $table->timestamps();

            $table->foreign('b_id_beneficiario')
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
        Schema::drop('beneficiarios');
    }
}
