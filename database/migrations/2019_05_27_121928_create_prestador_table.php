<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrestadorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prestador', function(Blueprint $table)
		{
			$table->integer('id_prestador', true);
			$table->string('nome', 100);
			$table->string('mnemonico', 50);
			$table->string('cnpj', 50);
			$table->string('endereco');
			$table->integer('modo')->default(2);
			$table->string('pais', 50)->default('Brasil');
			$table->string('estado', 50);
			$table->string('cep', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prestador');
	}

}
