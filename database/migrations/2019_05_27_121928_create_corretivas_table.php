<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCorretivasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('corretivas', function(Blueprint $table)
		{
			$table->integer('id_corretiva', true);
			$table->string('n_chamado', 50)->nullable();
			$table->text('resumo_demanda', 65535);
			$table->string('requisitante', 20);
			$table->date('data_abertura');
			$table->time('hora_abertura');
			$table->date('data_atendimento');
			$table->time('hora_atendimento');
			$table->date('data_conclusao')->default('0000-00-00');
			$table->time('hora_conclusao');
			$table->decimal('tempo_excedido_atendimento', 10, 0);
			$table->decimal('tempo_excedido_conclusao', 10, 0);
			$table->decimal('total', 10, 0);
			$table->integer('tipo_severidade');
			$table->decimal('prazo_atendimento', 10, 0)->nullable()->default(0);
			$table->decimal('prazo_conclusao', 10, 0);
			$table->string('n_patrimonio', 50);
			$table->integer('previsao_multa');
			$table->string('aplicacao_multa', 40);
			$table->decimal('subtotal_atendimento', 10, 0);
			$table->decimal('subtotal_conclusao', 10, 0);
			$table->integer('modo');
			$table->text('tecnico', 65535);
			$table->text('observacao');
			$table->string('status', 20);
			$table->integer('id_tipo')->index('id_tipo');
			$table->integer('ano');
			$table->integer('id_contrato')->nullable();
			$table->string('rg', 50)->nullable();
			$table->string('regional', 80)->nullable();
			$table->timestamp('criado')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('necessidade_on_site', 20);
			$table->string('atendimento_onsite', 20);
			$table->date('data_atend_onsite');
			$table->time('hora_atendimento_onsite');
			$table->string('tipos', 50);
			$table->integer('mes_ref');
			$table->date('dabertura_real');
			$table->time('habertura_real');
			$table->date('datendimento_real');
			$table->time('hatendimento_real');
			$table->date('dconclusao_real');
			$table->time('hconclusao_real');
			$table->integer('ano_ref');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('corretivas');
	}

}
