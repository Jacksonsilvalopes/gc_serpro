<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documentos', function(Blueprint $table)
		{
			$table->integer('id_contrato');
			$table->string('link');
			$table->string('categoria', 100);
			$table->string('clausula', 10);
			$table->string('responsa', 50);
			$table->date('prazo');
			$table->date('prevista');
			$table->date('executada');
			$table->text('observacao');
			$table->integer('status');
			$table->integer('id_doc', true);
			$table->date('periodo');
			$table->string('regional', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('documentos');
	}

}
