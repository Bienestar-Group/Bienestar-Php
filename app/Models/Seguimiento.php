<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model {

	protected $table = 'seguimiento';
	protected $fillable =['fecha_inicio','estado_seguimiento'];
	protected $guarded =['id'];

}
