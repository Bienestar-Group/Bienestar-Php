<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evento', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_evento');
			$table->string('tipo_evento');
			$table->date('fecha_evento');
			$table->time('hora_inicio_evento');
			$table->time('hora_fin_evento');
			$table->string('lugar_evento');
			$table->string('descripcion_evento');
			$table->string('estado_evento');
			$table->bigInteger('responsable');
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
		Schema::drop('evento');
	}

}
