<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taller', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_taller');
			$table->string('descripcion_taller');
			$table->date('fecha_inicio_taller');
			$table->date('fecha_fin_taller');
			$table->string('estado_taller');
			$table->bigInteger('curso');
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
		Schema::drop('taller');
	}

}
