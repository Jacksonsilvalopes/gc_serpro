<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSomaAtrasoItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('soma_atraso_item', function(Blueprint $table)
		{
			$table->integer('id_item_ataso', true);
			$table->integer('id_contrato');
			$table->integer('id_multa');
			$table->integer('categoria');
			$table->decimal('valor_multa', 10);
			$table->integer('status');
			$table->string('id_acumulado', 250);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('soma_atraso_item');
	}

}
