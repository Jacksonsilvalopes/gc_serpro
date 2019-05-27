<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filial', function(Blueprint $table)
		{
			$table->integer('id_filial', true);
			$table->integer('id_prestador')->index('id_prest');
			$table->string('nome', 200);
			$table->string('cnpj', 100);
			$table->string('endereco');
			$table->string('cep', 50);
			$table->string('estado', 100);
			$table->string('pais', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filial');
	}

}
