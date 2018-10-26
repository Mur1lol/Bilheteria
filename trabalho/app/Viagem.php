<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    //

    public function transportes() {
		return $this->belongsTo(Transporte::class);
	}
}
