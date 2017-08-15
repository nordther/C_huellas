<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('us_id_datospersonales')->index()->unique();
            $table->integer('us_id_roll')->index();
            $table->integer('us_id_permiso')->index()->unique();
            $table->string('us_email')->unique();
            $table->string('us_password',60);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('us_id_datospersonales')
                  ->references('dp_id')
                  ->on('datospersonales')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('us_id_roll')
                  ->references('rl_id')
                  ->on('rolls')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('us_id_permiso')
                  ->references('pm_id')
                  ->on('permisos')
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
        Schema::drop('users');
    }
}
