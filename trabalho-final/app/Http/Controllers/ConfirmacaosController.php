<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirmacao;

class ConfirmacaosController extends Controller
{
    function index() {
        $confirmacaos = Confirmacao::all();
        return view('confirmacaos.index', compact('confirmacaos'));
    }

    
    function create() {
        return view('confirmacaos.create');
    }

    
    function store(Request $request, Cronograma $cronograma) {
        $confirmacao = new Confirmacao;
        $confirmacao->fill($request->all());
        $confirmacao->cronograma()->associate($cronograma);
        $confirmacao->save();

        return redirect(route('temporadas.show', $cronograma->id));
    }

    function show(confirmacao $confirmacao) {
        return view('confirmacaos.show', compact('confirmacao'));
    }
}
