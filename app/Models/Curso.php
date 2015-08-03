<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

	protected $table = 'curso';
	protected $fillable = ['nombre_curso','descripcion_curso','modalidad_curso','fecha_inicio_curso','fecha_fin_curso','estado_curso','profesional'];
	protected $guarded = ['id'];


}
