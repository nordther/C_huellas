<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountbeneficierparentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countbeneficierparents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cbp_id')->index();
            $table->integer('cbp_id_parent')->index();
            $table->integer('cbp_id_beneficier')->index()->unique();
            $table->timestamps();

            $table->foreign('cbp_id_parent')
                  ->references('pd_id_padre')
                  ->on('padres')
                  ->onDeleted('cascade')
                  ->onUpdate('cascade');

            $table->foreign('cbp_id_beneficier')
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
        Schema::drop('countbeneficierparents');
    }
}
