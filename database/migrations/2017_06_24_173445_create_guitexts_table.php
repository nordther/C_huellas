<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuitextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guitexts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gtxt_id')->index()->unique();
            $table->integer('gtxt_id_gtype')->index();
            $table->integer('gtxt_id_language')->index();
            $table->string('gtxt_paramt_wordkey',120);
            $table->string('gtxt_text',375);
            $table->timestamps();

            $table->foreign('gtxt_id_gtype')
                  ->references('gtype_id')
                  ->on('guitypes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('gtxt_id_language')
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
        Schema::drop('guitexts');
    }
}
