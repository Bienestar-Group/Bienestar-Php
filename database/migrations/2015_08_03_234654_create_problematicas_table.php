<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblematicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('problematica', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_problematica');
			$table->string('tipo_problematica');
			$table->char('estado_problematica');
			$table->integer('area')->unsigned();
			$table->foreign('area')->references('id')->on('area')->onUpdate('cascade');
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
		Schema::drop('problematica');
	}

}
