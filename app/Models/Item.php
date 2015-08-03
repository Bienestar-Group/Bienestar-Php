<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	protected $table = 'item';
	protected $fillable = ['nombre_item','tipo_item','estado_item','concepto'];
	protected $guarded = ['id'];

}
