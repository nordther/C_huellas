<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatospersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datospersonales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dp_id')->index()->unique();
            $table->string('dp_nombre',200);
            $table->string('dp_apellido',200);
            $table->date('dp_fe_nacimiento');
            $table->string('dp_edad',20);
            $table->string('dp_telefono',20);
            $table->string('dp_celular',20);
            $table->string('dp_direccion',300);
            $table->integer('dp_td_id')->index();
            $table->integer('dp_id_roll')->index();
            $table->integer('dp_id_estp')->index()->unique();
            $table->integer('dp_id_sa')->index()->nullable();
            $table->integer('dp_id_genero')->index()->nullable();
            $table->integer('dp_id_parentesco')->index()->unique()->nullable();
            $table->integer('dp_id_municipio')->index()->unique()->nullable();
            $table->integer('dp_id_type_user')->index();
            $table->timestamps();

            $table->foreign('dp_td_id')
                  ->references('td_id')
                  ->on('typedocuments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('dp_id_roll')
                  ->references('rl_id')
                  ->on('rolls')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('dp_id_estp')
                  ->references('estp_id')
                  ->on('estadopersonas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('dp_id_sa')
                  ->references('sa_id')
                  ->on('situacionactuals')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('dp_id_genero')
                  ->references('g_id_genero')
                  ->on('generos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('dp_id_parentesco')
                  ->references('pr_id_parentesco')
                  ->on('parentescos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');      

            $table->foreign('dp_id_municipio')
                  ->references('mn_id_municipio')
                  ->on('municipios')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');      

            $table->foreign('dp_id_type_user')
                  ->references('tus_id')
                  ->on('typeusers')
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
        Schema::drop('datospersonales');
    }
}
