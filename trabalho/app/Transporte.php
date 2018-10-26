<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    public function viagems() {
		return $this->hasMany(Viagem::class);
	}
}
