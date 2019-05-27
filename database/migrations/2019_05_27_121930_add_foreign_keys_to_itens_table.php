<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToItensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('itens', function(Blueprint $table)
		{
			$table->foreign('id_tipo', 'id_itens')->references('id_tipo')->on('tipo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('itens', function(Blueprint $table)
		{
			$table->dropForeign('id_itens');
		});
	}

}
