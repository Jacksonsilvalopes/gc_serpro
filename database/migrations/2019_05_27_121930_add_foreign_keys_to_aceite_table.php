<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAceiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('aceite', function(Blueprint $table)
		{
			$table->foreign('id_iten', 'iten')->references('id_itens')->on('itens')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('aceite', function(Blueprint $table)
		{
			$table->dropForeign('iten');
		});
	}

}
