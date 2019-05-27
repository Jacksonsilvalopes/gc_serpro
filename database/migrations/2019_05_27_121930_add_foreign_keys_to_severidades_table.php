<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSeveridadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('severidades', function(Blueprint $table)
		{
			$table->foreign('id_contrato', 'id_contrato')->references('id_contrato')->on('contrato')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('severidades', function(Blueprint $table)
		{
			$table->dropForeign('id_contrato');
		});
	}

}
