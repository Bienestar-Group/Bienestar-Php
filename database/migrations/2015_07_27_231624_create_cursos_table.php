<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curso', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_curso');
			$table->string('descripcion_curso');
			$table->string('modalidad_curso');
			$table->date('fecha_inicio_curso');
			$table->date('fecha_fin_curso');
			$table->string('estado_curso');
			$table->bigInteger('profesional');
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
		Schema::drop('curso');
	}

}
