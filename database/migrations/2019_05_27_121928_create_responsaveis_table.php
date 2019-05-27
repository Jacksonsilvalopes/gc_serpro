<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResponsaveisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('responsaveis', function(Blueprint $table)
		{
			$table->integer('id_resp', true);
			$table->string('nome');
			$table->string('area', 80)->nullable();
			$table->string('funcao', 100);
			$table->string('email');
			$table->string('matricula', 50);
			$table->string('telefone', 40);
			$table->integer('id_local')->nullable();
			$table->string('responsabilidade')->nullable();
			$table->integer('id_contrato');
			$table->timestamp('atualizacao')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('sigla', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('responsaveis');
	}

}
