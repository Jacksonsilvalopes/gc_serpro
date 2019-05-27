<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFilialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('filial', function(Blueprint $table)
		{
			$table->foreign('id_prestador', 'id_fili')->references('id_prestador')->on('prestador')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('filial', function(Blueprint $table)
		{
			$table->dropForeign('id_fili');
		});
	}

}
