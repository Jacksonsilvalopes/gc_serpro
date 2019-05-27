<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlertaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alerta', function(Blueprint $table)
		{
			$table->foreign('id_contrato', 'id_contract')->references('id_contrato')->on('contrato')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alerta', function(Blueprint $table)
		{
			$table->dropForeign('id_contract');
		});
	}

}
