<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulatributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulatributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mda_id')->inde()->unique();
            $table->integer('mda_id_table')->inde();
            $table->string('mda_type_atribute',255);
            $table->string('mda_name_atribute',255);
            $table->timestamps();

            $table->foreign('mda_id_table')
                  ->references('mdt_id')
                  ->on('modultables')
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
        Schema::drop('modulatributes');
    }
}
