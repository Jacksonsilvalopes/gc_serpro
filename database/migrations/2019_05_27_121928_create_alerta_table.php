<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlertaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alerta', function(Blueprint $table)
		{
			$table->integer('id_alerta', true);
			$table->string('obs');
			$table->timestamp('data')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('situacao');
			$table->string('siscor', 50);
			$table->integer('id_contrato')->index('id_contrato');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alerta');
	}

}
