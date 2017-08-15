<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pst_id')->index()->unique();
            $table->integer('pst_id_autor')->index();
            $table->integer('pst_id_src')->index()->unique()->nullable();
            $table->date('pst_eventdate_begin');
            $table->date('pst_eventdate_finish');
            $table->time('pst_eventtime_begin');
            $table->time('pst_eventtime_finishes');
            $table->timestamps();

            $table->foreign('pst_id_autor')
                  ->references('dp_id')
                  ->on('datospersonales')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('pst_id_src')
                 ->references('srcapp_id')
                 ->on('srcapps')
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
        Schema::drop('posts');
    }
}
