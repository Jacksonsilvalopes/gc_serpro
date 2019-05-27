<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMultaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('multa', function(Blueprint $table)
		{
			$table->integer('id_multa', true);
			$table->integer('id_contrato')->index('Iid_cont');
			$table->string('rg', 20);
			$table->decimal('referencia', 10);
			$table->decimal('periodo', 10);
			$table->string('categoria', 20);
			$table->decimal('subtotal', 10);
			$table->integer('id_corretiva');
			$table->string('n_chamado', 50);
			$table->string('regional', 50);
			$table->date('data_abertura');
			$table->time('hora_abertura');
			$table->date('data_atendimento');
			$table->time('hora_atendimento');
			$table->date('data_conclusao');
			$table->time('hora_conclusao');
			$table->decimal('tempo_excedido_atendimento', 10);
			$table->decimal('tempo_excedido_conclusao', 10);
			$table->integer('tipo_severidade');
			$table->decimal('prazo_atendimento', 10);
			$table->integer('prazo_conclusao');
			$table->string('n_patrimonio', 50);
			$table->decimal('subtotal_atendimento', 10);
			$table->decimal('subtotal_conclusao', 10);
			$table->decimal('total', 10);
			$table->decimal('taxa', 10);
			$table->text('obs');
			$table->integer('status');
			$table->integer('id_itens');
			$table->date('prazo_entrega_itens');
			$table->date('prorrogacao_itens');
			$table->date('entrega_itens');
			$table->integer('atraso_itens');
			$table->integer('id_aceite');
			$table->decimal('valor_entrega', 10);
			$table->integer('parametro_multa');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('multa');
	}

}
