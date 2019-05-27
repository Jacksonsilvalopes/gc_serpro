<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo', function(Blueprint $table)
		{
			$table->integer('id_tipo', true);
			$table->integer('id_local')->index('id_local');
			$table->string('tipos', 50)->nullable();
			$table->string('lugar_regional', 100);
			$table->date('prazo_entrega');
			$table->date('rec_definitivo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo');
	}

}
