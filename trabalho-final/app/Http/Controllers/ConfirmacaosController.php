<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cronograma;
use App\Confirmacao;
use App\Temporada;
use Auth;

class ConfirmacaosController extends Controller {

    function index() {
        $confirmacaos = Confirmacao::all();
        return view('confirmacaos.index', compact('confirmacaos'));
    }

    function store(Request $request, Temporada $temporada, Cronograma $cronograma) {
        $confirmacao = new Confirmacao;
        $confirmacao->fill($request->all());
        $confirmacao->user()->associate(Auth::user());
        $confirmacao->cronograma()->associate($cronograma);
        $confirmacao->save();

        return redirect(route('temporadas.show', [$temporada->id, $cronograma->id]));
    }

    function show(Cronograma $cronograma) {
        return view('confirmacaos.show', compact('cronograma'));
    }

    function edit(Confirmacao $confirmacao) {
        return view('confirmacaos.edit', compact('confirmacao'));
    }

    function update(Request $request, Confirmacao $confirmacao) {
        
        // $confirmacao->status = $request->status;
        $confirmacao->fill($request->all());
        $confirmacao->save();

        return redirect(route('confirmacaos.index', $confirmacao->id));
    }
}
