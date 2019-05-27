<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDescumpClausulaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('descump_clausula', function(Blueprint $table)
		{
			$table->foreign('id_contrato', 'id')->references('id_contrato')->on('contrato')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('descump_clausula', function(Blueprint $table)
		{
			$table->dropForeign('id');
		});
	}

}
