<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 220)->nullable();
			$table->string('color', 10)->nullable();
			$table->dateTime('start')->nullable();
			$table->dateTime('end')->nullable();
			$table->text('observacao')->nullable();
			$table->integer('id_contr')->index('id_contr');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
