<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoricoProcessoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historico_processo', function(Blueprint $table)
		{
			$table->integer('id_histor_contr_proc', true);
			$table->integer('categoria');
			$table->string('nome', 200);
			$table->string('total_ocorre', 200);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historico_processo');
	}

}
