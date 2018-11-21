<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model {

	protected $fillable = ['dia', 'saida', 'trajeto', 'tipo'];
	
	public function confirmacao(){
		return $this->hasMany(Confirmacao::class);
	}
	
	public function user() {
		return $this->belogsTo(User::class);
	}
}
