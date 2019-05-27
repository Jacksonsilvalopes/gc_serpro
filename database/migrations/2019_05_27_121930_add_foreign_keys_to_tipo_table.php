<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipo', function(Blueprint $table)
		{
			$table->foreign('id_local', 'Id_locale')->references('id_local')->on('local')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipo', function(Blueprint $table)
		{
			$table->dropForeign('Id_locale');
		});
	}

}
