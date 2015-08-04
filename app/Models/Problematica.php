<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Problematica extends Model {

	
	protected $table = 'profesional';
	protected $fillable =['nombre_problematica','tipo_problematica','estado_problematica','area'];
	protected $guarded= ['id'];


}
