<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cita', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha_cita');
			$table->time('hora_inicio_cita');
			$table->time('hora_fin_cita');
			$table->char('estado_cita');
			$table->integer('profesional')->unsigned();
			$table->integer('aprendriz');
			$table->integer('problematica')->unsigned();
			$table->string('tipo_cita');
			$table->foreign('profesional')->references('id')->on('profesional')->onUpdate('cascade');
			$table->foreign('problematica')->references('id')->on('problematica')->onUpdate('cascade');
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
		Schema::drop('citas');
	}

}
