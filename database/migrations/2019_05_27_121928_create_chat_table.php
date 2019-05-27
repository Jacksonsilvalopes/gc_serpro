<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chat', function(Blueprint $table)
		{
			$table->integer('id_chat', true);
			$table->string('mensagem');
			$table->string('pseudo');
			$table->timestamp('data')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('status', 50)->default('Pendente');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chat');
	}

}
