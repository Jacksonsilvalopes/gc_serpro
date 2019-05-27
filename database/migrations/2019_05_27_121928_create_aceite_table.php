<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAceiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aceite', function(Blueprint $table)
		{
			$table->integer('id_aceite', true);
			$table->integer('id_iten')->index('id_itens');
			$table->string('assunto');
			$table->string('observacao', 250);
			$table->timestamp('data_registro')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->date('prorrogacao');
			$table->integer('categoria');
			$table->string('patrimonio', 50);
			$table->integer('qtd_entrege')->default(0);
			$table->date('entrega');
			$table->date('rec_provisorio');
			$table->date('data_intalacao');
			$table->integer('atraso_dias')->default(0);
			$table->integer('aplicacao_multa');
			$table->string('status', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aceite');
	}

}
