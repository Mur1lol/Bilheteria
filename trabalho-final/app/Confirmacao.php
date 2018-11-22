<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmacao extends Model{

	protected $fillable = ['data', 'cronograma_id'];
	
	public function user(){
		return $this->belogsTo( User::class);
	}
    
	public function cronogramas(){
		retuurn $this->belongsTo(Cronograma::class);
	}
}
