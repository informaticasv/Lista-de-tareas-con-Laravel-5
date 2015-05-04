<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {
	protected $fillable = ['nombre', 'fecha_inicio', 'fecha_fin', 'completo', 'slug'];

	
}
