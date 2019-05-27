<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeveridadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('severidades', function(Blueprint $table)
		{
			$table->integer('id_severidade', true);
			$table->integer('id_contrato')->index('id_contrato');
			$table->integer('prazo_atend');
			$table->integer('prazo_solu');
			$table->string('descricao');
			$table->decimal('multa', 10);
			$table->string('item', 20);
			$table->integer('modo');
			$table->integer('severidade');
			$table->string('tipo_atendimento', 20)->nullable();
			$table->integer('tolerancia')->nullable();
			$table->integer('start_onsite')->nullable();
			$table->string('programada', 20);
			$table->decimal('valorFixo', 10);
			$table->integer('tipoCalcMulta');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('severidades');
	}

}
