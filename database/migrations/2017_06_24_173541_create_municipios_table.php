<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mn_id_municipio')->index()->unique();
            $table->string('mn_municipio',200);
            $table->integer('mn_id_zona')->index(); 
            $table->integer('mn_id_tmn')->index();
            $table->boolean('mn_capital');             
            $table->timestamps();

            $table->foreign('mn_id_zona')
                  ->references('zn_id')
                  ->on('zonas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('mn_id_tmn')
                  ->references('tmn_id')
                  ->on('typemunicipios')
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
        Schema::drop('municipios');
    }
}
