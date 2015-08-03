<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model {

	protected $table = 'taller';
	protected $fillable = ['nombre_taller','descripcion_taller','fecha_inicio_taller','fecha_fin_taller','estado_taller','curso'];
	protected $guarded = ['id'];


}
