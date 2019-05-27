<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('local', function(Blueprint $table)
		{
			$table->integer('id_local', true);
			$table->integer('Id_contrato')->index('Id_contrato');
			$table->string('lugar_regional', 50);
			$table->string('endereco');
			$table->string('cnpj', 50);
			$table->date('rec_definitivo');
			$table->string('sigla', 100);
			$table->integer('id_prestador');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('local');
	}

}
