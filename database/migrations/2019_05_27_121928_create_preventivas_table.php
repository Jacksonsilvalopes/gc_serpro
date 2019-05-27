<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreventivasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preventivas', function(Blueprint $table)
		{
			$table->integer('id_preventiva', true);
			$table->integer('id_tipo')->index('id_tipo');
			$table->string('item');
			$table->string('patrimonio', 100);
			$table->string('n_chamado', 50);
			$table->string('mes', 100);
			$table->date('d_limite');
			$table->date('data_conclusao');
			$table->string('siscor', 50);
			$table->text('obs', 65535);
			$table->string('previsao_multa', 10);
			$table->string('aplicacao_multa', 10);
			$table->integer('id_contrato');
			$table->string('regional', 100);
			$table->string('status', 10);
			$table->string('mes_ref', 100);
			$table->integer('ano');
			$table->timestamp('criado')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('preventivas');
	}

}
