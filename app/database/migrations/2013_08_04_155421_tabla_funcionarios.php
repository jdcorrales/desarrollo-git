<?php

use Illuminate\Database\Migrations\Migration;

class TablaFuncionarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('funcionarios', function($table){
			$table->create();//crea la tabla funcionarios
			$table->increments('id');//llave primaria
			$table->integer('funcionario_codigo')->default(0);
			$table->string('login',255);
			$table->string('nombres',255)->nullable();
			$table->string('apellidos',255)->nullable();
			$table->text('firma')->nullable();
			$table->smallInteger('estado')->default(1);
			$table->timestamp('fecha_ingreso');
			$table->string('clave',255);
			$table->string('nit',255)->nullable();
			$table->smallInteger('perfil')->default(6);
			$table->smallInteger('debe_firmar')->default(1);
			$table->string('tipo',1)->default(0);
			$table->dateTime('ultimo_pwd')->default('0000-00-00 00:00:00');
			$table->string('mensajeria',1);
			$table->string('email')->nullable();
			$table->smallInteger('sistema')->default(1);
			$table->string('email_contrasseña',255)->nullable();
			$table->string('direccion',255)->nullable();
			$table->integer('telefono')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Revierte todos los cambios hechos en el metodo up()
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('funcionarios');
	}

}