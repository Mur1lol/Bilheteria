<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{

	protected $fillable = ['inicio', 'descricao'];
	
	public function cronograna(){
		return $this->hasMany(
			Comentario::class);
	}

	public function user(){
		return $this->belongsto(User::class);
	}
   
}
