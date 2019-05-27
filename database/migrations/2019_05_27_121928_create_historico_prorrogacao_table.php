<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoricoProrrogacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historico_prorrogacao', function(Blueprint $table)
		{
			$table->integer('id_prorrog', true);
			$table->integer('id_contrato');
			$table->integer('tipo_prorog');
			$table->date('d_prorrogada');
			$table->text('detalhe');
			$table->integer('categoria');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historico_prorrogacao');
	}

}
