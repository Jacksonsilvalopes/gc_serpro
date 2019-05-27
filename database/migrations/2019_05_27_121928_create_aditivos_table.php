<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAditivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aditivos', function(Blueprint $table)
		{
			$table->integer('id_aditivo', true);
			$table->integer('id_contrato')->index('id_contratc');
			$table->string('numero_aditivo', 100);
			$table->decimal('valor_acrescimo', 10);
			$table->decimal('valor_supressao', 10);
			$table->date('inicio_vigencia_aditivio');
			$table->date('fim_vigencia_aditivo');
			$table->string('obs');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aditivos');
	}

}
