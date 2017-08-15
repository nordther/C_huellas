<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasrcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediasrcs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mdsrc_id')->index()->unique();
            $table->string('mdsrc_url',200);            
            $table->string('mdsrc_filename',150)->nullable();
            $table->integer('mdsrc_filesize')->nullable();
            $table->string('mdsrc_filesizetype',100)->nullable();
            $table->string('mdsrc_fileformat',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mediasrcs');
    }
}
