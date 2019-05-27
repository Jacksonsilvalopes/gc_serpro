<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagamentos', function(Blueprint $table)
		{
			$table->integer('id_pag', true);
			$table->integer('id_tipo')->index('id_tip');
			$table->string('nota_fiscal', 50);
			$table->decimal('valor_parcela', 10);
			$table->integer('n_parcela');
			$table->date('data_inicio_per');
			$table->date('data_fim_per');
			$table->string('aut_nota', 10);
			$table->string('medido', 10);
			$table->date('d_assinatura_dig');
			$table->date('d_vencimento_pag');
			$table->string('siscor', 50);
			$table->text('obser', 65535);
			$table->integer('id_contrato');
			$table->string('regional');
			$table->string('status', 50);
			$table->string('relatorio', 10)->default('Nao');
			$table->string('ateste', 10)->default('Nao');
			$table->date('recebimento_nota');
			$table->string('cnpj_faturamento', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pagamentos');
	}

}
