<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsticionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insticiones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inst_id')->index()->unique();
            $table->string('inst_name',200);
            $table->string('inst_address',400);
            $table->string('inst_telefono',20);
            $table->string('inst_correo')->nullable();
            $table->timestamps();

            $table->foreign('inst_id')
                  ->references('b_ins_educativa')
                  ->on('beneficiarios')
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
        Schema::drop('insticiones');
    }
}
