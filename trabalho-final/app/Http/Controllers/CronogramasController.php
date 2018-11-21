<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temporada;
use App\Cronograma;
use Auth;

class CronogramasController extends Controller
{
    function index() {
        $cronogramas = Cronograma::all();
        return view('cronogramas.index', compact('cronogramas'));
    }

    
    function create() {
        return view('cronogramas.create');
    }

    
    function store(Request $request, Temporada $temporada) {
        $cronograma = new Cronograma;
        $cronograma->fill($request->all());
        $cronograma->temporada()->associate($temporada);
        $cronograma->save();

        return redirect(route('temporadas.show', $temporada->id));
    }

    function show(Cronograma $cronograma) {
        return view('cronogramas.show', compact('cronograma'));
    }
}
