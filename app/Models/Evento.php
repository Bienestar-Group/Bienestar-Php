<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

	protected $table = 'evento';
	protected $fillable = ['nombre_evento','tipo_evento','fecha_evento','hora_inicio_evento','hora_fin_evento','lugar_evento','descripcion_evento','estado_evento','responsble'];
	protected $guarded = ['id'];

}
