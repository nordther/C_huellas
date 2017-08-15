<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('d_id_donacion')->index()->unique();
            $table->integer('d_id_programa')->index();
            $table->integer('d_id_td')->index();
            $table->integer('d_id_benefactor')->index();
            $table->timestamps();

            $table->foreign('d_id_td')
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
        Schema::drop('donaciones');
    }
}
