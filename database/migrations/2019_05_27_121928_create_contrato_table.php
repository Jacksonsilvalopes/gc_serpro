<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contrato', function(Blueprint $table)
		{
			$table->integer('id_contrato', true);
			$table->integer('id_prestador')->nullable()->index('id_prestador');
			$table->string('rg', 50);
			$table->date('d_Registro')->nullable();
			$table->string('projeto_basico', 50);
			$table->date('d_emissao')->nullable();
			$table->string('n_processo', 50);
			$table->date('d_Assinatura');
			$table->string('status', 40);
			$table->date('d_Inic_vige_contr');
			$table->date('d_fim_vige_cont');
			$table->string('pos_prorrogacao', 10);
			$table->float('vig_garantia', 10, 0);
			$table->text('obs')->nullable();
			$table->float('valor_Contratado', 10);
			$table->decimal('valor_atual', 10);
			$table->date('d_prorro');
			$table->date('d_Aceite')->nullable();
			$table->string('n_siscor', 20);
			$table->text('objeto', 65535);
			$table->string('tipo', 20);
			$table->date('prazo_entrega');
			$table->date('d_recebimento')->nullable();
			$table->float('vig_contrat', 10, 0);
			$table->date('d_fim_g');
			$table->string('link_pv');
			$table->string('link_ged');
			$table->string('link_proscorm');
			$table->timestamp('agora')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('natureza', 20);
			$table->integer('tip_chamado')->nullable();
			$table->date('fim_vig_garat');
			$table->string('mine', 50)->nullable();
			$table->date('data_prorro_aditivo')->nullable();
			$table->decimal('percent_atrasoEntrega', 10)->nullable();
			$table->decimal('percent_naoObjeto', 10)->nullable();
			$table->decimal('percent_descumprimento', 10)->nullable();
			$table->decimal('limiteParcial', 10);
			$table->decimal('limiteTotal', 10);
			$table->date('entrega_garantia_exc');
			$table->integer('parametro_multa');
			$table->integer('periodo_garantia_exc');
			$table->float('valor_garantia_exc', 10);
			$table->string('pasta', 250);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contrato');
	}

}
