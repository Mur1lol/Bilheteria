<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronogramasController extends Controller
{
    public function index() {
        $cronogramas = Cronograma::all();
        return view('cronograma.index', compact('cronogramas'));
    }

    public function create()
    {
        return view('cronogramas.create');
    }

    public function store(Request $request)
    {
        $cronograma = new Cronograma;
        $cronograma->fill($request->all());
        $cronograma->save();
    }

    public function show(Cronograma $cronograma)
    {
        return view('cronogramas.show', compact('cronograma'));
    }

    public function edit(Cronograma $cronograma)
    {
        return view('cronogramas.edit', compact('cronograma'));    }

    public function update(Request $request, Cronograma $cronograma)
    {
        
    }

    public function destroy(Cronograma $cronograma)
    {
        
    }
}
