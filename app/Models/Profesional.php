<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesional extends Model {

	protected $table = 'profesional';
	protected $fillable =['tipo_documento','documento','nombre','primer_apeliido','segundo_apellido','telefono','email','direccion','fecha_nacimiento','estado_profesional'];
	protected $guarded= ['id'];

}
