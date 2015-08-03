<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regional', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_regional');
			$table->string('direccion_regional');
			$table->bigInteger('telefono_regional');
			$table->bigInteger('pbx_regional');
			$table->string('director_regional');
			$table->bigInteger('telefono_director');
			$table->string('estado_regional');
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
		Schema::drop('regional');
	}

}
