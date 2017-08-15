<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSrcappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srcapps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('srcapp_id')->index()->unique();
            $table->string('srcapp_url',200)->nullable();
            $table->string('srcapp_dir',200);
            $table->string('srcapp_filename',150);
            $table->integer('srcapp_filesize')->nullable();
            $table->string('srcapp_filesizetype',100)->nullable();
            $table->string('srcapp_fileformat',100);
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
        Schema::drop('srcapps');
    }
}
