<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seguimiento', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha_inicio');
			$table->char('estado_seguimiento');
			$table->integer('aprendiz');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('seguimientos');
	}

}
