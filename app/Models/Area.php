<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {

	protected $table = 'area';
	protected $fillable =['codigo_area','nombre_area','descripcion_area','estado_area'];
	protected $guarded =['id'];
}
