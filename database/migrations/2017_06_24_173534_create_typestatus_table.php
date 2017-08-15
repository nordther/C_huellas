<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypestatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typestatus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ts_id_typestatus')->index()->unique();
            $table->integer('ts_id_zona')->index();
            $table->string('ts_status_name',200); 

            $table->foreign('ts_id_zona')
                  ->references('zn_id')
                  ->on('zonas')
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
        Schema::drop('typestatus');
    }
}
