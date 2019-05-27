<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCorretivasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('corretivas', function(Blueprint $table)
		{
			$table->foreign('id_tipo', 'id_tip')->references('id_tipo')->on('tipo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('corretivas', function(Blueprint $table)
		{
			$table->dropForeign('id_tip');
		});
	}

}
