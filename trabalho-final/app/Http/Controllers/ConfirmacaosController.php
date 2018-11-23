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

    function store(Request $request, Cronograma $cronograma, Temporada $temporada) {
        $confirmacao = new Confirmacao;
        $confirmacao->fill($request->all());
        $confirmacao->user()->associate(Auth::user());
        $confirmacao->cronograma()->associate($cronograma);
        $confirmacao->save();

        return redirect(route('temporadas.show', $temporada->id));
    }

    function show(Confirmacao $confirmacao) {
        return view('confirmacaos.show', compact('confirmacao'));
    }
}
