<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model {

	protected $table = 'regional';
	protected $fillable = ['nombre_regional','direccion_regional','telefono_regional','pbx_regional','director_regional','telefono_director','estado_regional'];
	protected $guarded = ['id'];

}
