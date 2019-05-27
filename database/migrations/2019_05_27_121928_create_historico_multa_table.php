<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoricoMultaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historico_multa', function(Blueprint $table)
		{
			$table->integer('id_histmulta', true);
			$table->integer('id_contrato');
			$table->timestamp('data_registro')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->decimal('valor_multa_aplicado', 10);
			$table->string('siscor', 50);
			$table->text('observacao');
			$table->integer('categoria');
			$table->decimal('total_acumulado', 10);
			$table->decimal('valor_multa_definitivo', 10);
			$table->integer('status');
			$table->string('id_multas', 250);
			$table->string('id_colaborador', 250);
			$table->text('clausula');
			$table->decimal('referencia', 10);
			$table->text('motivacao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historico_multa');
	}

}
