<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model {

	protected $fillable = ['dia', 'saida', 'trajeto', 'tipo'];

	public function temporada(){
		return $this->belongsTo(Temporada::class);
	}

	public function confirmacaos(){
		return $this->hasMany(Confirmacao::class);
	}
	
	public function user() {
		return $this->hasMany(User::class);
	}
}
