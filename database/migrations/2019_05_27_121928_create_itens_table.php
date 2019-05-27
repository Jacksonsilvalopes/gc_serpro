<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('itens', function(Blueprint $table)
		{
			$table->integer('id_itens', true);
			$table->integer('id_tipo')->index('id_tipo');
			$table->integer('id_contrato');
			$table->string('regional', 50);
			$table->string('descricao');
			$table->string('responsavel', 100);
			$table->string('area', 100);
			$table->string('patrimonio', 100);
			$table->string('serie', 100)->default('Não Informado');
			$table->decimal('valor_unitario', 10);
			$table->string('status', 100);
			$table->date('prazo_entrega');
			$table->date('prorrogacao')->default('0000-00-00');
			$table->date('entrega');
			$table->date('rec_provisorio');
			$table->date('data_instalacao');
			$table->integer('atraso_dias');
			$table->integer('aplicacao_multa');
			$table->string('Observacao');
			$table->integer('qtd_total')->default(0);
			$table->decimal('sub_total', 10)->default(0.00);
			$table->integer('ativo')->default(2);
			$table->integer('qtd_entregue_itens')->default(0);
			$table->integer('atraso_dias_itens')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('itens');
	}

}
