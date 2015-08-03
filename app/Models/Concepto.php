<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model {

	protected $table = 'concepto';
	protected $fillable = ['nombre_concepto','estado_concepto','area'];
	protected $guarded = ['id'];

}
