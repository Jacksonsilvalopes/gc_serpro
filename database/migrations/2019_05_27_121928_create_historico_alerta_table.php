<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoricoAlertaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historico_alerta', function(Blueprint $table)
		{
			$table->integer('id_histori_ateste', true);
			$table->integer('id_contrato');
			$table->timestamp('data_registro')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('informacao');
			$table->integer('id_alerta');
			$table->string('crip', 250);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historico_alerta');
	}

}
