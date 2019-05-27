<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegRelatorioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reg_relatorio', function(Blueprint $table)
		{
			$table->integer('id_relatorio', true);
			$table->integer('id_contrato')->index('id_contrat');
			$table->text('conclusao_preventiva');
			$table->text('conclusao_corretiva');
			$table->string('acompanhado', 100);
			$table->string('analizado', 100);
			$table->string('mes', 20);
			$table->string('ano', 100);
			$table->string('prestador', 250);
			$table->string('rg', 100);
			$table->timestamp('atualizacao')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reg_relatorio');
	}

}
