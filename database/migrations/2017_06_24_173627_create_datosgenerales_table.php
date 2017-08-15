<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosgeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosgenerales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dg_id')->index()->unique();
            $table->integer('dg_id_typedocument')->index();
            $table->string('dg_nombre',200);
            $table->string('dg_apellido',200);            
            $table->string('dg_telefono',20);
            $table->string('dg_celular',20);
            $table->string('dg_direccion',300);
            $table->string('dg_correo',200);
            $table->timestamps();

            $table->foreign('dg_id_typedocument')
                  ->references('td_id')
                  ->on('typedocuments')
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
        Schema::drop('datosgenerales');
    }
}
