<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMultaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('multa', function(Blueprint $table)
		{
			$table->foreign('id_contrato', 'multa')->references('id_contrato')->on('contrato')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('multa', function(Blueprint $table)
		{
			$table->dropForeign('multa');
		});
	}

}
