<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->integer('id_usuario', true);
			$table->string('nome');
			$table->string('lotacao', 100);
			$table->string('funcao', 100);
			$table->string('email', 100);
			$table->string('telefone', 50);
			$table->string('celular', 100);
			$table->char('senha', 40);
			$table->string('matricula', 50);
			$table->string('empresa')->default('1');
			$table->integer('permissao')->default(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario');
	}

}
