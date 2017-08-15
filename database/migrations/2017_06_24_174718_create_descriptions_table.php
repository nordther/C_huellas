<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desc_id')->index()->unique();
            $table->string('desc_title',200);
            $table->string('desc_text',900);
            $table->integer('desc_id_post')->index()->unique();
            $table->timestamps();

            $table->foreign('desc_id_post')
                  ->references('pst_id')
                  ->on('posts')
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
        Schema::drop('descriptions');
    }
}
