<?php

namespace App\Http\Controllers;

use App\Temporada;
use Illuminate\Http\Request;

class TemporadaController extends Controller
{
    public function index() {
        $temporadas = Temporada::all();
        return view('temporada.index', compact('temporadas'));
    }

    
    // public function create()
    // {
    //     return view('temporadas.create');
    // }

    
    // public function store(Request $request)
    // {
    //     $temporada = new Temporada();
    //     $temporada->fill($request->all());
    //     $temporada->save();
    // }

    // public function show(Temporada $temporada)
    // {
    //     return view('temporadas.show', compact('temporada'));
    // }

    
    // public function edit(Temporada $temporada)
    // {
    //     //
    // }

    // public function update(Request $request, Temporada $temporada)
    // {
    //     //
    // }

    // public function destroy(Temporada $temporada)
    // {
    //     //
    // }
}
