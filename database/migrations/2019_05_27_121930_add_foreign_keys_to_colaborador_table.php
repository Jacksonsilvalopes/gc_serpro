<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToColaboradorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('colaborador', function(Blueprint $table)
		{
			$table->foreign('id_presta', 'id_presta')->references('id_prestador')->on('prestador')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('colaborador', function(Blueprint $table)
		{
			$table->dropForeign('id_presta');
		});
	}

}
