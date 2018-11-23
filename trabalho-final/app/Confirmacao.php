<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmacao extends Model{
	protected $fillable = ['status'];
	
	public function cronograma(){
		return $this->belongsTo(Cronograma::class);
	}

	public function user(){
		return $this->belongsTo(User::class);
	}
}
