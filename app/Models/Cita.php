<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model {

	protected $table = 'cita';
	protected $fillable =['fecha_cita','hora_inicio_cita','hora_fin_cita','estado_cita','profesional','aprendiz','problematica','tipo_cita'];
	protected $guarded =['id'];

}
