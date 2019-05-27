<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLocalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('local', function(Blueprint $table)
		{
			$table->foreign('Id_contrato', 'id_contrato_fk')->references('id_contrato')->on('contrato')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('Id_contrato', 'local_ibfk_1')->references('id_contrato')->on('contrato')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('local', function(Blueprint $table)
		{
			$table->dropForeign('id_contrato_fk');
			$table->dropForeign('local_ibfk_1');
		});
	}

}
