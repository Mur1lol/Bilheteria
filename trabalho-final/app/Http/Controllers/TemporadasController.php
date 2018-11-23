<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temporada;

class TemporadasController extends Controller
{
    public function index() {
        $temporadas = Temporada::all();
        return view('temporadas.index', compact('temporadas'));
    }

    
    public function create() {
        return view('temporadas.create');
    }

    
    public function store(Request $request) {
        $temporada = new Temporada();
        $temporada->fill($request->all());
        $temporada->save();

        return redirect(route('temporadas.index'));
    }

    public function show(Temporada $temporada) {
        return view('temporadas.show', compact('temporada'));
    }

    
    public function edit(Temporada $temporada)
    {
        return view('temporadas.edit', compact('temporada'));
    }

    public function update(Request $request, Temporada $temporada)
    {
    // if ($temporada->user == Auth::user()) {
            $temporada->fill($request->all());
            $temporada->save();

            return redirect(route('temporadas.show', $temporada->id));
        // } else
            // abort(403);
    }

    // public function destroy(Temporada $temporada)
    // {
    //     //
    // }
}
