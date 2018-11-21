<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Temporada;
use App\Cronograma;
use Auth;

class CronogramasController extends Controller
{
    public function index() {
        $cronogramas = Cronograma::all();
        return view('cronogramas.index', compact('cronogramas'));
    }

    
    public function create() {
        return view('cronogramas.create');
    }

    
    public function store(Request $request) {
        $cronograma = new Cronograma;
        $cronograma->fill($request->all());
        $cronograma->temporada()->associate($temporada);
        $cronograma->save();

        return redirect(route('cronogramas.index'));
    }

    public function show(Cronograma $cronograma) {
        return view('cronogramas.show', compact('cronograma'));
    }
}
