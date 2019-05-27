<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVisitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visitas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('data_inicio')->nullable();
			$table->dateTime('data_final')->nullable();
			$table->string('nome', 80);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('visitas');
	}

}
