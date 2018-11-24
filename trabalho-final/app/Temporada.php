<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{

	protected $fillable = ['nome', 'inicio', 'descricao'];
	
	public function cronogramas(){
		return $this->hasMany(Cronograma::class);
	}

	public function confirmacao() {
		return $this->hasMany(Confirmacao::class);
	}

	public function user(){
		return $this->belongsto(User::class);
	}
   
}
