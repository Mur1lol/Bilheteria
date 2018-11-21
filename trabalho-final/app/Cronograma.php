<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model {

	protected $fillable = ['dia', 'saida', 'trajeto', 'tipo', 'temporada_id'];

	public function temporada(){
		return $this->belongsTo(Temporada::class);
	}

	public function confirmacao(){
		return $this->hasMany(confirmacao::class);
	}
	
	public function user() {
		return $this->belogsTo(User::class);
	}
}
