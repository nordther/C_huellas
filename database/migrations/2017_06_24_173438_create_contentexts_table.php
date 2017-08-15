<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contentexts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ctxt_id')->index()->unique();
            $table->string('ctxt_title',200);
            $table->string('ctxt_text',500);
            $table->integer('ctxt_id_language')->index();
            $table->timestamps();

            $table->foreign('ctxt_id_language')
                  ->references('lg_id')
                  ->on('languages')
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
        Schema::drop('contentexts');
    }
}
