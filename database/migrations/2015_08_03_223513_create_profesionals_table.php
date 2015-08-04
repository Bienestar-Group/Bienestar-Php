<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesional', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tipo_documento_profesional');
			$table->biginteger('documento_profesional')->unique();;
			$table->string('nombre_profesional');
			$table->string('primer_apellido_profesional');
			$table->string('segundo_apellido_profesional');
			$table->biginteger('telefono_profesional');
			$table->string('email_profesional');
			$table->string('direccion_profesional');
			$table->date('fecha_nacimiento_profesional');
			$table->string('estado_profesional');
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
		Schema::drop('profesional');
	}

}
