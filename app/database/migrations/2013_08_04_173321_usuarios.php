<?php

use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuarios', function($table){
			$table->create();//crea la tabla funcionarios
			$table->increments('id');//llave primaria			
			$table->string('nombres',255)->nullable();
			$table->string('apellidos',255)->nullable();			
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
		Schema::drop('usuarios');
	}

}