<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDescumpClausulaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('descump_clausula', function(Blueprint $table)
		{
			$table->integer('id_descumpri', true);
			$table->integer('id_contrato')->index('id_contrat');
			$table->text('clausula');
			$table->text('motivacao');
			$table->decimal('referencia', 10);
			$table->integer('status');
			$table->text('det_processo');
			$table->decimal('valor_multa', 10);
			$table->integer('categoria');
			$table->string('siscor', 50);
			$table->string('id_colaborador', 250);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('descump_clausula');
	}

}
