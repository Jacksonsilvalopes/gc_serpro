<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColaboradorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colaborador', function(Blueprint $table)
		{
			$table->integer('id_colaborador', true);
			$table->integer('id_presta')->index('id_presta');
			$table->string('nome', 100);
			$table->string('funcao', 60);
			$table->string('email', 40)->nullable();
			$table->string('telefone', 50);
			$table->string('celular', 50);
			$table->integer('id_contrato');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('colaborador');
	}

}
